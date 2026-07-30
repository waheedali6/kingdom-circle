
        /////////side-bar//////////
        const toggleBtn = document.getElementById('sidebar-toggler');
        const sideBar = document.getElementById('sidebar');
        const smLogo = document.querySelector('.small-logo');
        const bgLogo = document.querySelector('.big-logo');
        const links = document.querySelectorAll('.links .link');
        const o = document.querySelector('.overlay')
        const sideClose = document.querySelector('.side-close-btn')
        sideClose.onclick = () => {
            sideBar.classList.remove('show');
            o.classList.remove('show')
        }
        o.onclick = () => {
            sideBar.classList.remove('show');
            o.classList.remove('show')
        }
        toggleBtn.addEventListener('click', () => {
            if (window.innerWidth <= 991) {
                sideBar.classList.toggle('show');
                o.classList.toggle('show')
            } else {

                sideBar.classList.toggle("collapsed");
            }

            if (sideBar.classList.contains('collapsed')) {
                smLogo.classList.remove('hide')
                bgLogo.classList.add('hide')
            } else {
                 smLogo.classList.add('hide')
                bgLogo.classList.remove('hide')
            }

        })


        //////drop-down/////////
        const proDropToggle = document.querySelector('.dropdown-toggle');
        const proDropdown = document.querySelector('.dropdown-menu');

        proDropToggle.onclick = () => {
            proDropdown.classList.toggle('show-menu');
        }
       


        ////////logout-popup///////
        const logoutToggleBtn = document.querySelectorAll('.logout-toggle');
        const logoutOverlay = document.querySelector('.logout-overlay');

        logoutToggleBtn.forEach((item) => {
            item.addEventListener('click', () => {
                logoutOverlay.classList.toggle('active')
                sideBar.classList.remove('show');
                o.classList.remove('show')
            })
        })



        ////////announce-popup///////
        const announceToggleBtn = document.querySelectorAll('.announce-toggle');
        const announceOverlay = document.querySelector('.announce-overlay');

        announceToggleBtn.forEach((item) => {
            item.addEventListener('click', () => {
                announceOverlay.classList.toggle('active')
                sideBar.classList.remove('show');
                o.classList.remove('show')
            })
        })

        const announceDeleteToggleBtn = document.querySelectorAll('.announce-delete-toggle');
        const announceDeleteOverlay = document.querySelector('.announce-delete-overlay');

        announceDeleteToggleBtn.forEach((item) => {
            item.addEventListener('click', () => {
                announceDeleteOverlay.classList.toggle('active')
                sideBar.classList.remove('show');
                o.classList.remove('show')
            })
        })



        ///////setting tab//////
        const SettingTab = document.querySelector('.setting-tabs');
        const SettingTabBtns = document.querySelectorAll('.tab-btn');
        const TabPane = document.querySelectorAll('.tab-pane');
        SettingTab.onclick = (e) => {
            const TabBtns = e.target.closest('.tab-btn');
            if(!TabBtns) return;
            SettingTabBtns.forEach(item => {
                item.classList.remove('active');
            });
            
            TabPane.forEach(pane => {
                pane.classList.remove('active')
            });

            TabBtns.classList.add('active');
            document.getElementById(TabBtns.dataset.tab).classList.add('active');

        }





        