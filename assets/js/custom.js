// NAVIGATION


// NAVIGATION

initializeStellarNav(1,'.main_menu');
    function initializeStellarNav(index, element) {
      $(element).stellarNav({
        breakpoint: 1024,
        position: 'left',
         menuLabel: '',
           closeLabel: '',
      });
    }
// blogslider start
$('.blogslid').slick({
  dots: true,
  arrows:true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// blogslider end

// product slider jas start

 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});
// product slider jas end

// simple slick slider start
$(".regular").slick({
  dots: true,
  infinite: true,
  speed:300,
  autoplay:true,
  slidesToShow: 3,
  slidesToScroll: 3
});

// simple slick slider end

// wow animation js 



// responsive menu js 






// slick slider in tabs js start

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


$(document).ready(function() {
  $('.tabcontent.active').css('display', 'block');
});
// slick slider in tabs js end










// one big picture 
EasySlides('.slider_one_big_picture',
{
    'autoplay': true,
    'stepbystep': false,
    'show': 5,
    'loop': false
});




// one bifg two

EasySlides('.slider_one_big_2',
{
        'autoplay': false,
        'stepbystep': true,
        'show': 5,
        'loop': false
});



// slider for line 

EasySlides('.slider_four_in_line',
{
    'autoplay': true,
    'show': 9
});

// Clock 
EasySlides('.slider_clock',
{
     'autoplay': true,
     'stepbystep': false,
     'show': 15
 });
// random places slider
EasySlides('.slider_random',
{
    'autoplay': true,
    'stepbystep': false,
    'show': 'all',
    'beforeshow': function (this_slider) {
        const slides = this_slider.querySelectorAll(':scope>*:not(.next_button, .prev_button, .nav_indicators)');
        slides.forEach(function (element, index) {
            let x = element.dataset.x;
            let y = element.dataset.y;
            let r = element.dataset.r;

            if (typeof x == 'undefined') {
                x = (100 / slides.length) * index;
                element.dataset.x = x;
            }
            if (typeof y == 'undefined') {
                y = Math.floor(Math.random() * 25) + 70;
                element.dataset.y = y;
            }
            if (typeof r == 'undefined') {
                r = Math.floor(Math.random() * 180) - 90;
                element.dataset.r = r;
            }

            element.style.left = x+'%';
            element.style.top = y+'%';
            element.style.transform = 'rotate('+r+'deg)';
        });
    },
    'aftershow': function (this_slider) {
        const slides = this_slider.querySelectorAll(':scope>*:not(.next_button, .prev_button, .nav_indicators)');
        slides.forEach(function (element, index) {
            if (element.classList.contains('active')) {
                element.style.left = '';
                element.style.top = '';
                element.style.transform = '';
            }
        });
    }
 });



// jqurey of slider in bootstarp 5 tabs 
$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
    $('.your-slider-class').slick('setPosition');
});