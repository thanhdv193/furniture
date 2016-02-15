$(document).ready(function () {

    function add_to_cart(pro_id)
    {
        $.ajax({
            url: '/fontend/cart/add',
            cache: false,
            type: 'post',
            data: {product_id: pro_id},            
            success: function (result)
            {
                document.location = '/fontend/cart/index';
            },
            error: function (result) {
                alert("Có lỗi xẩy ra, vui lòng thử lại sau.");
            }

        });
    }
    $('.add-to-cart .add-cart').on('click', function (e) {
        var id = $(this).data('value');
        add_to_cart(id);
        console.log(a);
    });
});