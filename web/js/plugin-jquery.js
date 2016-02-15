
$(document).ready(function()  {
   
});

(function ($) {
    $.fn.neoAnimateMenu = function(options){
        var defaults = {
                animatePadding: 10
            }
            var options =  $.extend(defaults, options);
            return this.each(function() {
                var opt = options;
                var obj = $(this);
                var items = $("li a", obj);
                items.mouseover(function () {
                    $(this).animate({paddingLeft: opt.animatePadding}, 50);
                }).mouseout(function () {
                    $(this).animate({paddingLeft: '10'}, 50);
                });
            });
    };
    
})(jQuery);

