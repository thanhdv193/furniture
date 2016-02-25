

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
   
});
