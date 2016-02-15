$(document).ready(function () {
    function update_cart(pro_id,type)
    {
        $.ajax({
            url: '/fontend/cart/delete-cart.html',
            cache: false,
            type: 'post',
            data: {product_id: pro_id,type:type},            
            success: function (result)
            {
//                document.location = '/fontend/cart/index.html';
            },
            error: function (result) {
                alert("Có lỗi xẩy ra, vui lòng thử lại sau.");
            }

        });
    }
    function formatPrice(b1,pra_class) { 
        var b = b1.toString();        
        var j = "";
        var f = "";
        var c = b.length;
        if ((c > 0)) {
            if (!(b === "") && (b != null)) {
                var a = 0;
                var d = 0;
                for (i = c - 1; i >= 0; i--) {
                    a++;
                    if ((a % 3 == 0) && (a < c)) {
                        var e = c - a;
                        var g = b.substr(e, 3);
                        f = g + " " + f;
                        d++
                    }
                }
                var h = c - (d * 3);
                j = b.substring(0, h) + " " + f;
                if (j.charAt(j.length - 1) == " ") {
                    j = j.substr(0, (j.length - 1))
                }
                var string = j.split(' ').join('.');
                return string;
                //var string = j.replace('/" "/g','.');                
                $("#"+pra_class).attr("value", string)
            }
        }
    }
    $("input.input_price").keydown(function (b) {
        var a = (b.which) ? b.which : b.keyCode;
        if (a == 46 || a == 8 || a == 37 || a == 39 || a == 9 || a == 229) {
        } else {
            if (a > 31 && (a < 48 || a > 57) && (a < 96 || a > 105)) {
                return false
            }
        }
    });
    
    $("input.input_price").on("keyup", function () {
        var p_id = $(this).attr("name");
        var value = $(this).val();        
        if(value == '')
        {
            value = 0;
        }
        var p_price = $('#p-'+p_id).text();
        var formart_price = p_price.replace(/\./g, "");
        var  total_price = parseInt(formart_price)*parseInt(value);
        var a = formatPrice(total_price,'p-final-'+p_id);          
        $('#p-final-'+p_id).text(a);

    });
    $(".action .delete-product").on("click",function(e){
        e.preventDefault();
        var id = $(this).data('value');
        $('.tr-'+id).css("display","none");
        update_cart(id,'delete');
    });
});