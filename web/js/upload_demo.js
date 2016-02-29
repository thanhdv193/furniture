var $window_upload_file = function $window_upload_file() {
    var $object = {
        element: null,
        init: function init() {
            var $this = this;
            if ($this.element === null) {
                $this.element = $(document.createElement("li")).attr({
                    "class": "image-item box-select-img",
                    "title":"Thêm ảnh"
                }).append("<input name='image[]' type='file' class='upload'>");
            }
            $(".listimage").append($this.element);
        },
        events: function events() {
            var $this = this;
            $this.element.find(".upload").on('change', function (event) {
                var file = this.files[0];
                html = '  <li data-id="-1" class="uk-grid-margin dangload image-item ">\n\
                      <div class="uk-progress uk-progress-striped uk-active">\n\
                      <div class="uk-progress-bar" style="width: 0%;"></div></div> \n\
                      <a class="itemview" href=""><div class="boximg"></div></a></li>';                
                var curren = $(this).parent();
                curren.before(html);                
                var dangcho = curren.prev();
                var progwith = dangcho.children('.uk-progress');

                var oFReader = new FileReader();
                oFReader.readAsDataURL(file);

                oFReader.onload = function (oFREvent) {                    
                    dangcho.removeClass('dangload');
                    progwith.remove();
                    dangcho.children().children().css('background-image', 'url(' + oFREvent.target.result + ')');
                    html = '<a alt="ảnh" title="xóa ảnh này" class="fa fa-close xoaanh"></a>';
                    dangcho.append(html);
                    dangcho.attr('data-id', 1);
                    dangcho.children().attr('href', "#");
                    
                    dangcho.find("a.xoaanh").on('click', function (event) {                        
                        event.preventDefault();
                        var $this = this;
                        dangcho.remove();
                    });
                };                
                
                var $window_upload = $window_upload_file();
                $window_upload.init();
                $window_upload.events();
                $(this).parents('.image-item').css("display",'none');
            });                        
        },
    };

    return $object;
};

$(document).ready(function (e) {
    var $window_upload = $window_upload_file();
    $window_upload.init();
    $window_upload.events();

    $('.listimage .product-update a.xoaanh').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        var id = $this.data('value');        
        $.ajax({
            type: "POST",
            url: baseUrl + '/backend/product/delete-image',
            cache: false,
            data: {img_id: id},
            dataType: 'json',
            success: function (result)
            {
                if(result.status === 'ok')
                {                    
                    $this.parents('li.product-update').css("display",'none');
                }
            }
        }).always(function ()
        {
            
        });
    });
});