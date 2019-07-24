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
}