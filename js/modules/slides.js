export default function Slides() {
    $('[data-group]').each(function () {
        "use strict";
        let $allTarget = $(this).find('[data-target]'),
            $allClick = $(this).find('[data-click]'),
            activeClass = 'active';

        const services = document.querySelector('[data-group="services"]')
        if(services) {
            let randomNumber = Math.floor(Math.random() * $allTarget.length)
            $allTarget[randomNumber].classList.add(activeClass)
            $allClick[randomNumber].classList.add(activeClass)
        } else {
            $allTarget.first().addClass(activeClass);
            $allClick.first().addClass(activeClass);
        }

        $allClick.click(function (e) {
            e.preventDefault();

            let id = $(this).data('click'),
                $target = $('[data-target="' + id + '"]');

            $allClick.removeClass(activeClass);
            $allTarget.removeClass(activeClass);

            $(this).addClass(activeClass);
            $target.addClass(activeClass);
        });

    });
}