

$(document).ready(function () {
    
    var id_first = null;
    var first = null;
    var id_last = null;
    var last = null;
     $(".qty_cart .qty-product").keydown(function (b) {
        var a = (b.which) ? b.which : b.keyCode;
        if (a == 46 || a == 8 || a == 37 || a == 39 || a == 9 || a == 229) {            
        } else {
            if (a > 31 && (a < 48 || a > 57) && (a < 96 || a > 105)) {
                return false
            }
        }
          
    });
    $(".qty_cart .qty-product").focusin(function () {
        id_first = $(this).data('id');
        first = $(this).val();     
    });
    $(".qty_cart .qty-product").focusout(function () {
        id_last = $(this).data('id');
        last = $(this).val();
        if(id_last === id_first)
        {
            if (parseInt(last) != parseInt(first))
            {
                $.ajax({
                    type: "POST",
                    url: baseUrl + '/fontend/cart/update-cart',
                    cache: false,
                    data: {id: id_last,qty:last},
                    dataType: 'json',
                    success: function (result)
                    {
                        if (result.status == 'ok') {
                            var price = $('.cart-price .price-'+id_last).data('value');
                             var price_all = price*parseInt(last);    
                            // console.log(format(price_all));
                            $('.price-all-'+id_last).text(format(price_all)+'đ');
                        }
                        if (result.status == false)
                        {

                        }
                    }
                }).always(function ()
                {
                    //is_busy = false;
                });
            }
        }                
        
    });
    
    $('.cart-product .btn-remove').on('click',function(e){
        e.preventDefault();
        var id_p = $(this).data('value');
        $.ajax({
                    type: "POST",
                    url: baseUrl + '/fontend/cart/delete-cart',
                    cache: false,
                    data: {id: id_p},
                    dataType: 'json',
                    success: function (result)
                    {
                        if (result.status == 'ok') {
                            $('#shopping-cart-table .tr-p-'+id_p).css('display','none');
                        }
                        if (result.status == false)
                        {

                        }
                    }
                }).always(function ()
                {
                    //is_busy = false;
                });
    });
    var format = function (num) {
        var str = num.toString().replace("$", ""), parts = false, output = [], i = 1, formatted = null;
        if (str.indexOf(".") > 0) {
            parts = str.split(".");
            str = parts[0];
        }
        str = str.split("").reverse();
        for (var j = 0, len = str.length; j < len; j++) {
            if (str[j] != ",") {
                output.push(str[j]);
                if (i % 3 == 0 && j < (len - 1)) {
                    output.push(",");
                }
                i++;
            }
        }
        formatted = output.reverse().join("");
        return(formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    };
   
});
