export default function Slides() {
    $('[data-group]').each(function () {
        "use strict";
        let $allTarget = $(this).find('[data-target]'),
            $allClick = $(this).find('[data-click]'),
            activeClass = 'active';

        $allTarget.first().addClass(activeClass);
        $allClick.first().addClass(activeClass);

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