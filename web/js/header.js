var delayShow, delayHide;

$(document).ready(function(){
    var imagePath = $('#imagePath').val();
    var $Wwindow = $(window).width();
    var $liLevel0 = $('#navigation .globalMenuByForums > ul.items > li');

    $('.globalMenuByForums ul.items > li > ul.items > li > ul.items').show();

    $($liLevel0).each(function () {

        if ($Wwindow < 800)
        {
            $(this).click(function () {
                $(this).closest('li').find('ul.items').show();
            });
        }
        else
        {
            if ($(this).hasClass('node_3')) {
                //var lifeboy = '<a target="_blank" href="/threads/6/lifebuoy-bi-kip-biet-doi-tay-sach-ngay-the-gioi-rua-tay-voi-xa-phong.3357640/" class="menu-lifeboy"><img src="styles/muare/images/lifeboy.png" /></a>';
                //$(this).children('ul').append(lifeboy );
            }

            //if($(this).hasClass('node_117')){
            //	var oldFurniture = '<a target="_blank" href="/categories/ha-noi/pho-do-cu.117/"  class="menu-furniture"><img src="'+imagePath+'/images/icons/nav/navicons_pdc.png" width="90%" height="90%" /></a>';
            //	$(this).children('ul').append(oldFurniture);
            //}
            $(this).mouseenter(function () {


                if (delayHide != undefined)
                {
                    clearTimeout(delayHide);
                }

                var myObj = $(this);
                myObj.addClass('hover');

                delayShow = setTimeout(function () {
                    $($liLevel0).not('.hover').children('ul').css('display', 'none');
                    myObj.find('ul').stop().slideDown('fast');
                    $('.st-container').css('z-index', '7600');
                }, 500);

            });
        }

        $(this).mouseleave(function () {
            if (delayShow != undefined)
            {
                clearTimeout(delayShow);
            }
            $(this).removeClass('hover');
            delayHide = setTimeout(function () {
                $('#navigation .globalMenuByForums > ul.items > li > ul').stop().hide();
                $('.st-container').css('z-index', '700');
            }, 500);
        });
    });


    if ($Wwindow <= 480)
    {
        $('#navigation .locationPopup .PopupControl .dt').text('');
    }
});