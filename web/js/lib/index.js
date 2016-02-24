

$(document).ready(function() {
    
    $('.em-btn-addto .btn-cart').on('click',function(e){
        $id = $(this).data('button');
        
    });
    
    
    var stopped = false;
    var is_busy = false;
    $('#login-form .login').on('click', function (e) {  
        e.preventDefault();
        var data = $('#login-form').serialize();
        //console.log(data);
        $("#img-loadmore").css("display", "block");
        is_busy = true;                
        $.ajax({
            type: "POST",
            url: '/site/login-ajax',
            cache: false,
            data: data,
            dataType: 'json',
            success: function (result)
            {
                
                if(result.status == true){
                    alert("da dang nhap");
                }
                if(result.status == false)
                {
                    if(result.error == "user_not_exist")
                    {
                        $('.field-loginform-username .help-block-error').text('Sai tên tài khoản');
                        $('.field-loginform-password .help-block-error').text('');
                    }
                    if(result.error == "username_null")
                    {
                        $('.field-loginform-username .help-block-error').text('Tên đăng nhập không được để trống');
                        $('.field-loginform-password .help-block-error').text('');
                    }
                    if(result.error == "password_null")
                    {
                        $('.field-loginform-username .help-block-error').text('');
                        $('.field-loginform-password .help-block-error').text('Mật khẩu không được để trông');
                    }
                    if(result.error == "password_exist")
                    {
                        $('.field-loginform-username .help-block-error').text('');
                        $('.field-loginform-password .help-block-error').text('Sai mật khẩu');
                    }
                    if(result.error == "successful")
                    { console.log("dang nhap tc");
                        window.location.href = "home.html";
                    }
                    //console.log(result.error);
                }
            }
        }).always(function ()
            {
            is_busy = false;
            });                    
        
    });    
});
