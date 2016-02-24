(function ($) {
    if (typeof EM == 'undefined')
        EM = {};
    if (typeof EM.SETTING == 'undefined')
        EM.SETTING = {};

    function setColumnCountGridMode() {
        var wWin = $(window).width();
        if (EM.SETTING.DISABLE_RESPONSIVE == 1) {
            var sDesktop = 'emcatalog-desktop-';
            var sDesktopSmall = 'emcatalog-desktop-small-';
            var sTablet = 'emcatalog-tablet-';
            var sMobile = 'emcatalog-mobile-';
            var sGrid = $('#em-grid-mode');
            if (wWin > 1200) {
                sGrid.removeClass().addClass(sDesktop + '5');
            } else {
                if (wWin <= 1200 && wWin > 768) {
                    sGrid.removeClass().addClass(sDesktopSmall + '4');
                } else {
                    if (wWin <= 768 && wWin > 480) {
                        sGrid.removeClass().addClass(sTablet + '3');
                    } else {
                        sGrid.removeClass().addClass(sMobile + '2');
                    }
                }
            }
        } else {
            var sDesktop = 'emcatalog-desktop-';
            var sGrid = $('#em-grid-mode');
            sGrid.removeClass().addClass(sDesktop + '5');
        }
    }
    ;
    //Ready Function
    $(document).ready(function () {
        setColumnCountGridMode();
    });
    $(window).resize($.throttle(300, function () {
        setColumnCountGridMode();
    }));
})(jQuery);