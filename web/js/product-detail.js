(function($) {
            layout = '1column';
            $('.cloud-zoom-gallery').click(function() { console.log(this.href);
                $('#zoom-btn').attr('href', this.href);
            });
            function doSliderMoreview() {
                var owl = $("ul.em-moreviews-slider");
                if (owl.length) {
                    owl.owlCarousel({
                        // Navigation
                        navigation: true,
                        navigationText: ["Previous", "Next"],
                        pagination: false,
                        paginationNumbers: false,
                        // Responsive
                        responsive: true,
                        items: 7,
                        /*items above 1200px browser width*/
                        itemsDesktop: [1200, 4],
                        /*//items between 1199px and 981px*/
                        itemsDesktopSmall: [992, 7],
                        itemsTablet: [768, 3],
                        itemsMobile: [480, 2],
                        // CSS Styles
                        baseClass: "owl-carousel",
                        theme: "owl-theme",
                        transitionStyle: false,
                        addClassActive: true,
                    });
                }
            }

            function changeQty(increase) {
                var qty = parseInt($('#qty').val());
                if (!isNaN(qty)) {
                    console.log(qty)
                    qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
                    $('#qty').val(qty);
                }
            }

            /* Related Product */
            var relatedProductsCheckFlag = false;

            function selectAllRelated(txt) {
                if (relatedProductsCheckFlag == false) {
                    $('.related-checkbox').each(function(elem) {
                        elem.checked = true;
                    });
                    relatedProductsCheckFlag = true;
                    txt.innerHTML = "unselect all";
                } else {
                    $('.related-checkbox').each(function(elem) {
                        elem.checked = false;
                    });
                    relatedProductsCheckFlag = false;
                    txt.innerHTML = "select all";
                }
                addRelatedToProduct();
            };
            function addRelatedToProduct() {
                var checkboxes = $('.related-checkbox');
                var values = [];
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) values.push(checkboxes[i].value);
                }
                if ($('related-products-field')) {
                    $('related-products-field').value = values.join(',');
                }
            };
            
                $(window).load(function() {
                    if (!isPhone) {
                        $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();
                        
                    }
                    doSliderMoreview();

                    /* Related Slider */
                    var owl = $('#em-related').find('.em-related-slider');
                    if (owl.length) {
                        owl.owlCarousel({
                            // Navigation
                            navigation: true,
                            navigationText: ["Previous", "Next"],
                            pagination: false,
                            paginationNumbers: false,
                            // Responsive
                            responsive: true,
                            items: 4,
                            /*items above 1200px browser width*/
                            itemsDesktop: [1200, 4],
                            /*//items between 1199px and 981px*/
                            itemsDesktopSmall: [992, 3],
                            itemsTablet: [768, 3],
                            itemsMobile: [480, 2],
                            // CSS Styles
                            baseClass: "owl-carousel",
                            theme: "owl-theme",
                            transitionStyle: false,
                            addClassActive: true,
                            afterMove: function() {
                                var $_img = owl.find('img.em-img-lazy');
                                if ($_img.length) {
                                    var timeout = setTimeout(function() {
                                        $_img.trigger("appear");
                                    }, 200);
                                }
                            },
                        });
                    }

                    /* Related Checkbox */
                    $( ".related-checkbox" ).on( "click", function() {
                        addRelatedToProduct()
                    });
                });            
})(jQuery);