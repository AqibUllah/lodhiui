import './bootstrap';
import 'jquery';
import Jquery from "jquery";
window.$ = Jquery

import { Autoplay, Navigation, Pagination,EffectCube } from "swiper/modules";
import Swiper from "swiper";

Swiper.use([Autoplay,Navigation,Pagination,EffectCube]);
window.Swiper = Swiper
window.Navigation = Navigation
window.Pagination = Pagination
window.EffectCube = EffectCube

document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.querySelector(".menu-button");
    const closeButton = document.querySelector(".close-button");
    const sidebar = document.querySelector(".sidebar");
    const overlay = document.querySelector(".overlay");

    // Function to open the sidebar
    function openSidebar() {
        sidebar.classList.add("sidebar-open");
        overlay.classList.add("overlay-show");
    }

    // Function to close the sidebar
    function closeSidebar() {
        sidebar.classList.remove("sidebar-open");
        overlay.classList.remove("overlay-show");
    }

    // Event listeners
    menuButton.addEventListener("click", openSidebar);
    closeButton.addEventListener("click", closeSidebar);
    overlay.addEventListener("click", closeSidebar);
});


$(".sub-menu").hide();
$('#toggle > li > a').click(function () {
    var $ul = $(this).siblings('ul');
    if ($ul.length > 0) {
        $ul.slideToggle(600);
        $(".sub-menu").not($ul).slideUp(400);
        return false;
    }
});


///////////////////////////// SETTING PANEL ////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    const settingsPanel = document.querySelector('.settings-panel');
    const toggleButton = document.querySelector('.setting-btn');

    toggleButton.addEventListener('click', () => {
        settingsPanel.classList.toggle('active');
        toggleButton.classList.toggle('active');
    });

    document.addEventListener('click', (event) => {
        if (!settingsPanel.contains(event.target) && !toggleButton.contains(event.target)) {
            settingsPanel.classList.remove('active');
            toggleButton.classList.remove('active');
        }
    });
});


//tabs
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tabs__tab');
    const tabContents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const target = this.getAttribute('data-tab');

            tabs.forEach(t => t.classList.remove('tabs__tab--active'));
            tabContents.forEach(tc => tc.style.display = 'none');

            this.classList.add('tabs__tab--active');
            document.getElementById(target).style.display = 'block';
        });
    });
});


///////////////////////////// THEME CONFIGURATION ///////////////////////////////
function setTheme(theme) {
    document.body.className = '';
    document.body.classList.add(theme);
    localStorage.setItem('theme', theme);

    // Update the active class on theme buttons
    updateActiveThemeButton(theme);
}

function updateActiveThemeButton(theme) {
    // Remove active class from all theme buttons
    const buttons = document.querySelectorAll('.theme-box');
    buttons.forEach(button => button.classList.remove('active'));

    // Add active class to the selected theme button
    const activeButton = document.getElementById(theme);
    if (activeButton) {
        activeButton.classList.add('active');
    }
}
document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme') || 'theme-gd-pink';
    setTheme(savedTheme);
    // Ensure the correct button has the active class on page load
    updateActiveThemeButton(savedTheme);

    const themeBox = document.getElementById('theme-box');
    const modal = document.getElementById('themeModal');
    const btn = document.getElementById('themeSelectorBtn');
    const span = document.getElementsByClassName('close')[0];

    // themeBox.attr('data-value', savedTheme);

    btn.onclick = function() {
        modal.style.display = 'flex';
    }

    span.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    }
});

