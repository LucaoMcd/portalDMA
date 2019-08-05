export default function MenuAnimation() {
    
    const menu_expand = document.querySelector(".menu-expand");
    const toggle_btn = document.querySelector(".menu-icon-bg");
    const close_btn = document.querySelector(".menu-expand-close");

    toggle_btn.addEventListener('click', function (e) {
        "use strict";
        menu_expand.classList.add('animate-menu');
    });
    close_btn.addEventListener('click', function (e) {
        "use strict";
        menu_expand.classList.remove('animate-menu');
    });

    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    menu_expand.style.setProperty('--vh', `${vh}px`);
}