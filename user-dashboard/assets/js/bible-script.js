// Basic app state and utilities
const API_ROOT = 'https://bible-api.com/';
const books = [
    'Genesis','Exodus','Leviticus','Numbers','Deuteronomy','Joshua','Judges','Ruth','1 Samuel','2 Samuel','1 Kings','2 Kings','1 Chronicles','2 Chronicles','Ezra','Nehemiah','Esther','Job','Psalms','Proverbs','Ecclesiastes','Song of Solomon','Isaiah','Jeremiah','Lamentations','Ezekiel','Daniel','Hosea','Joel','Amos','Obadiah','Jonah','Micah','Nahum','Habakkuk','Zephaniah','Haggai','Zechariah','Malachi','Matthew','Mark','Luke','John','Acts','Romans','1 Corinthians','2 Corinthians','Galatians','Ephesians','Philippians','Colossians','1 Thessalonians','2 Thessalonians','1 Timothy','2 Timothy','Titus','Philemon','Hebrews','James','1 Peter','2 Peter','1 John','2 John','3 John','Jude','Revelation'
];

// DOM elements
const searchInput = document.getElementById('searchInput');
const searchBtn = document.getElementById('searchBtn');
const passageArea = document.getElementById('passageArea');
const welcomeState = document.getElementById('welcomeState');
const passageTitle = document.getElementById('passageTitle');
const passageSubtitle = document.getElementById('passageSubtitle');
const historyList = document.getElementById('historyList');
const bookmarksList = document.getElementById('bookmarksList');
const bookSelect = document.getElementById('bookSelect');
const chapterInput = document.getElementById('chapterInput');
const verseInput = document.getElementById('verseInput');
const goBtn = document.getElementById('goBtn');
const randomBtn = document.getElementById('randomBtn');
const todayBtn = document.getElementById('todayBtn');
const bookmarkBtn = document.getElementById('bookmarkBtn');
const fontSizeSlider = document.getElementById('fontSizeSlider');
const footerFontSlider = document.getElementById('footerFontSlider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const copyBtn = document.getElementById('copyBtn');
const shareBtn = document.getElementById('shareBtn');
const clearCacheBtn = document.getElementById('clearCacheBtn');
const sidebar = document.getElementById('sidebar');

// state
let currentRef = null;
let currentData = null;

// init
function init(){
    // populate books
    books.forEach(b=>{
        const o = document.createElement('option');
        o.value = b; o.textContent = b;
        bookSelect.appendChild(o);
    });

    // load bookmarks and history
    renderBookmarks();
    renderHistory();

    // attach events
    searchBtn.addEventListener('click', ()=>doSearch(searchInput.value.trim()));
    searchInput.addEventListener('keypress', (e)=>{ if(e.key==='Enter') doSearch(searchInput.value.trim()); });
    goBtn.addEventListener('click', ()=>{
        const b = bookSelect.value; 
        const c = chapterInput.value.trim(); 
        const v = verseInput.value.trim();
        if(!c){ alert('Enter a chapter number'); return }
        const q = v? `${b} ${c}:${v}`: `${b} ${c}`;
        doSearch(q);
    });
    randomBtn.addEventListener('click', randomVerse);
    todayBtn.addEventListener('click', verseOfTheDay);
    bookmarkBtn.addEventListener('click', toggleBookmark);
    fontSizeSlider.addEventListener('input', e=>updateFontSize(e.target.value));
    footerFontSlider.addEventListener('input', e=>{
        fontSizeSlider.value = e.target.value;
        updateFontSize(e.target.value);
    });
    prevBtn.addEventListener('click', ()=>navigate(-1));
    nextBtn.addEventListener('click', ()=>navigate(1));
    copyBtn.addEventListener('click', copyToClipboard);
    shareBtn.addEventListener('click', sharePassage);
    clearCacheBtn.addEventListener('click', clearCache);
    
    // Set initial font size
    updateFontSize(fontSizeSlider.value);
}

function updateFontSize(size) {
    document.documentElement.style.setProperty('--body-font-size', size + 'px');
    passageArea.style.fontSize = size + 'px';
}

function toggleMobileMenu() {
    sidebar.classList.toggle('open');
}

// helpers: localStorage caching and bookmarks
function cacheFetch(key, data){
    const store = JSON.parse(localStorage.getItem('bible_cache')||'{}');
    store[key] = {ts:Date.now(), data};
    localStorage.setItem('bible_cache', JSON.stringify(store));
}

function getCached(key){
    const store = JSON.parse(localStorage.getItem('bible_cache')||'{}');
    const entry = store[key];
    if(!entry) return null;
    // expire after 7 days
    if(Date.now() - entry.ts > 7*24*3600*1000){
        delete store[key]; 
        localStorage.setItem('bible_cache', JSON.stringify(store));
        return null;
    }
    return entry.data;
}

function saveHistory(q){
    if(!q) return;
    const arr = JSON.parse(localStorage.getItem('bible_history')||'[]');
    arr.unshift({q,ts:Date.now()});
    const uniq = [];
    for(const it of arr){ 
        if(!uniq.find(u=>u.q.toLowerCase()===it.q.toLowerCase())) uniq.push(it); 
    }
    localStorage.setItem('bible_history', JSON.stringify(uniq.slice(0,40)));
    renderHistory();
}

function renderHistory(){
    const arr = JSON.parse(localStorage.getItem('bible_history')||'[]');
    historyList.innerHTML='';
    if(arr.length===0){ 
        historyList.innerHTML = '<div class="list-item text-center">No recent searches</div>'; 
        return;
    }
    arr.forEach(it=>{
        const el = document.createElement('div'); 
        el.className='list-item'; 
        el.innerHTML = `
            <div class="list-item-title">${it.q}</div>
            <div class="list-item-subtitle">${new Date(it.ts).toLocaleString()}</div>
        `;
        el.addEventListener('click', ()=>doSearch(it.q));
        historyList.appendChild(el);
    });
}

function getBookmarks(){
    return JSON.parse(localStorage.getItem('bible_bookmarks')||'[]');
}

function renderBookmarks(){
    const arr = getBookmarks();
    bookmarksList.innerHTML = '';
    if(arr.length===0){ 
        bookmarksList.innerHTML = '<div class="list-item text-center">No bookmarks yet</div>'; 
        return;
    }
    arr.forEach((bm,idx)=>{
        const el = document.createElement('div'); 
        el.className='list-item';
        el.innerHTML = `
            <div class="list-item-title">${bm.ref}</div>
            <div class="list-item-subtitle">${bm.note||''}</div>
            <div style="display:flex;gap:6px;margin-top:8px">
                <button data-idx="${idx}" class="btn" style="padding:6px 10px;font-size:12px">Open</button>
                <button data-del="${idx}" class="btn btn-outline" style="padding:6px 10px;font-size:12px">Delete</button>
            </div>
        `;
        el.querySelector('[data-idx]').addEventListener('click', ()=>doSearch(bm.ref));
        el.querySelector('[data-del]').addEventListener('click', ()=>{ removeBookmark(idx); });
        bookmarksList.appendChild(el);
    });
}

function addBookmark(ref, note){
    const arr = getBookmarks();
    if(arr.find(a=>a.ref.toLowerCase()===ref.toLowerCase())){ 
        alert('Already bookmarked'); 
        return;
    }
    arr.unshift({ref,note,ts:Date.now(),data:currentData});
    localStorage.setItem('bible_bookmarks', JSON.stringify(arr.slice(0,80)));
    renderBookmarks();
}

function removeBookmark(idx){
    const arr = getBookmarks(); 
    arr.splice(idx,1); 
    localStorage.setItem('bible_bookmarks', JSON.stringify(arr)); 
    renderBookmarks();
}

function toggleBookmark(){
    if(!currentRef){ 
        alert('No passage loaded'); 
        return;
    }
    const arr = getBookmarks();
    if(arr.find(a=>a.ref.toLowerCase()===currentRef.toLowerCase())){
        // remove
        const filtered = arr.filter(a=>a.ref.toLowerCase()!==currentRef.toLowerCase()); 
        localStorage.setItem('bible_bookmarks', JSON.stringify(filtered)); 
        renderBookmarks();
        alert('Removed bookmark');
    } else {
        const note = prompt('Add note to bookmark (optional)'); 
        addBookmark(currentRef,note);
        alert('Bookmarked');
    }
}

// api fetch
async function fetchPassage(query){
    if(!query) throw new Error('Empty query');
    const key = query.toLowerCase();
    const cached = getCached(key);
    if(cached) return cached;
    try{
        const url = API_ROOT + encodeURIComponent(query);
        const resp = await fetch(url);
        if(!resp.ok) throw new Error('Passage not found');
        const data = await resp.json();
        cacheFetch(key,data);
        return data;
    }catch(err){
        throw err;
    }
}

// render
function renderPassage(data, refStr){
    currentData = data; 
    currentRef = refStr;
    passageTitle.textContent = refStr;
    passageSubtitle.textContent = data.reference || '';
    passageArea.innerHTML = '';
    
    // Hide welcome state, show passage
    welcomeState.classList.add('hidden');
    passageArea.classList.remove('hidden');
    
    // data.verses may exist or data.text (for some endpoints)
    if(data.verses){
        data.verses.forEach(v=>{
            const div = document.createElement('div'); 
            div.className='verse';
            div.innerHTML = `<span class="verse-num">${v.verse}</span><span class="txt">${escapeHtml(v.text)}</span>`;
            div.addEventListener('click', ()=>{ div.classList.toggle('highlight'); });
            passageArea.appendChild(div);
        });
    } else if(data.text){
        // whole text
        const split = data.text.split(/\n\n+/).filter(Boolean);
        split.forEach(p=>{ 
            const d=document.createElement('p'); 
            d.textContent = p; 
            passageArea.appendChild(d); 
        });
    } else {
        passageArea.innerHTML = '<div style="color:var(--text-muted)">No text returned for this passage.</div>';
    }
    saveHistory(refStr);
}

function escapeHtml(str){
    return str.replace(/</g,'&lt;').replace(/>/g,'&gt;');
}

async function doSearch(q){
    if(!q){ 
        alert('Enter a reference or search term'); 
        return;
    }
    passageArea.innerHTML = '<div style="color:var(--text-muted)">Loading&hellip;</div>';
    try{
        const data = await fetchPassage(q);
        renderPassage(data, data.reference||q);
    }catch(err){
        passageArea.innerHTML = `<div style="color:tomato">${err.message || 'Error fetching passage'}</div>`;
    }
}

// navigation: next/prev - simple heuristic: try change chapter by +/-1 for current
function navigate(direction){
    if(!currentRef){ 
        alert('No passage loaded'); 
        return;
    }
    // parse like "Book Chapter:Verse" or "Book Chapter"
    const m = currentRef.match(/^(.+)\s+(\d+)(?::(\d+))?/);
    if(!m){ 
        alert('Cannot navigate this reference'); 
        return;
    }
    const book = m[1]; 
    const chap = parseInt(m[2],10);
    const newChap = chap + direction;
    doSearch(`${book} ${newChap}`);
}

function copyToClipboard(){
    if(!currentData){ 
        alert('No passage to copy'); 
        return;
    }
    const text = (currentData.verses? currentData.verses.map(v=>v.text).join('\n') : currentData.text || '');
    navigator.clipboard.writeText(`${currentRef}\n\n${text}`).then(()=>alert('Copied to clipboard')); 
}

function sharePassage(){
    if(!currentRef){ 
        alert('Open a passage first'); 
        return;
    }
    const url = API_ROOT + encodeURIComponent(currentRef);
    if(navigator.share){ 
        navigator.share({title:currentRef,text:'Check this passage',url}).catch(()=>{}); 
    } else {
        navigator.clipboard.writeText(url).then(()=>alert('Share URL copied to clipboard'));
    }
}

function clearCache(){ 
    localStorage.removeItem('bible_cache'); 
    alert('Cache cleared'); 
}

// extras
async function randomVerse(){
    // pick a random book/chapter/verse — approximate method: choose random book and random chapter between 1..50 and try until success
    const b = books[Math.floor(Math.random()*books.length)];
    const chap = Math.floor(Math.random()*30)+1; // naive
    try{ 
        await doSearch(`${b} ${chap}`); 
        // then pick random verse from loaded
        const vs = currentData && currentData.verses; 
        if(vs && vs.length>0){ 
            const v = vs[Math.floor(Math.random()*vs.length)]; 
            doSearch(`${b} ${chap}:${v.verse}`); 
        }
    }catch(e){ 
        console.warn(e); 
        alert('Could not pick random verse - try again'); 
    }
}

async function verseOfTheDay(){
    // deterministic "random": use date to pick a verse
    const date = new Date();
    const seed = date.getFullYear()*10000 + (date.getMonth()+1)*100 + date.getDate();
    const b = books[seed % books.length];
    const chap = (seed % 50) + 1;
    try{ 
        await doSearch(`${b} ${chap}`); 
        const vs = currentData && currentData.verses; 
        if(vs && vs.length>0){ 
            const v = vs[seed % vs.length]; 
            doSearch(`${b} ${chap}:${v.verse}`); 
        } 
    }catch(e){ 
        console.warn(e); 
        alert('Could not load verse of the day'); 
    }
}

// small utilities
window.addEventListener('load', init);