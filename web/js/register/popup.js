jQuery(document).ready(function () {
    function deselect(e) {
        $('.pop').slideFadeToggle(function () {
            e.removeClass('selected');
        });
    }
    $(function () {
        $('#contact').on('click', function () {
            if ($(this).hasClass('selected')) {
                deselect($(this));
            } else {
                $(this).addClass('selected');
                $('.pop').slideFadeToggle();
            }
            return false;
        });

        $('.close_popup').on('click', function () {
            deselect($('#contact'));
            return false;
        });
    });

    $.fn.slideFadeToggle = function (easing, callback) {
        return this.animate({opacity: 'toggle', height: 'toggle'}, 'slow', easing, callback);
    };
    function login()
    {
        var username = $('#loginform-username').val();
        var password = $('#loginform-password').val();
        $.ajax({
            url: 'http://localhost:803/site/login-ajax',
            cache: false,
            type: 'post',
            data: {username: username, password: password},
            success: function (result)
            {
                if (result == 'user_name_null')
                {
                    $('#login-error').text('Tên đăng nhập không được trống.');
                }
                if (result == 'password_name_null')
                {
                    $('#login-error').text('Mật khẩu không được trống.');
                }
                if (result == 'user_not_exist')
                {
                    $('#login-error').text('Tài khoản không tồn tại.');
                }
                if (result == 'password_exist')
                {
                    $('#login-error').text('Mật khẩu chưa đúng.');
                }
                if (result == 'successful')
                {
                    $('.btn-login').text('Đăng xuất('+username+')');
                    $('.form-module').css('display','none');
                }
            }
        });
    }
    $('#login-button').on('click', function (e) {
        e.preventDefault();
        login();

    });
    $('.close_popup').on('click', function (e) {
        e.preventDefault();

        $('#basicModal').css('display', 'none');

    });
    
    $('.login').on('click', function (e) {
        e.preventDefault();

        $('.form-register').css('display', 'none');
        $('.form-login').css('display', 'block');
        $('.login').css('display', 'none');
        $('.register').css('display', 'block');

    });
    $('.register').on('click', function (e) {
        e.preventDefault();

        $('.form-register').css('display', 'block');
        $('.form-login').css('display', 'none');
        $('.register').css('display', 'none');
        $('.login').css('display', 'block');
    });
    // Toggle Function
    
//    $('.register').click(function () { 
//        // Switches the Icon
//        //$(this).children('i').toggleClass('fa-pencil');
//        // Switches the forms  
//        $('.form').animate({
//            height: "toggle",
//            'padding-top': 'toggle',
//            'padding-bottom': 'toggle',
//            opacity: "toggle"
//        }, "slow");
//        $(".register").text("Đăng nhập");
//    });
    
})