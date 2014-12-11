/// <reference path="jquery.d.ts" />

var $ACTIVE_SCREEN : JQuery;

$(() => {
    $(".najit-spoj").on('click', () => {
        switchToScreen($("#screen2"));
    });

    $ACTIVE_SCREEN = $("#screen1");
    $ACTIVE_SCREEN.show();
});

function switchToScreen(screen : JQuery) {
    screen.css('position', 'absolute');
    screen.css('left', '1000px');
    screen.css('top', 0);
    screen.show();
    screen.css('opacity', 0);

    var offset : number = $ACTIVE_SCREEN.offset().left;

    screen.animate({
        left: offset,
        opacity: 100
    }, 1000, () => {
        screen.css('position', 'relative');
        screen.css('left', 0);
    });
    $ACTIVE_SCREEN.fadeOut(1000);

    $ACTIVE_SCREEN = screen;
}