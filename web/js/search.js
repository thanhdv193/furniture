var search = {};
search.busy = false;
search.page = 1;
search.contain = null;

search.init = function () {
    $('form input[action=origin-search]').keyup(function () {
        delay(function () {
            $('form[name=search-for-item]').delay(200).submit();
        }, 500);
    });

    search.initSearch();
    setTimeout(function () {
        search.checkoutbox();
    }, 100);

    if ($(window).width() == 768) {
        search.contain = $('#box-mr-quang').masonry({
            gutter: 18.3,
            percentPosition: true,
            itemSelector: ".grid_item",
            columnWidth: ".grid_sizer"
        });
    } else {
        search.contain = $('#box-mr-quang').masonry({
            gutter: 18.3,
            percentPosition: true,
            itemSelector: ".grid_item",
            columnWidth: ".grid_sizer"
        });
    }
//    autocomplete.addListener('place_changed', search.resolveLocation);
    textutils.suggestData('pac-input');

    $('form[name=form-product] input').keypress(function (e) {
        if (e.which == 13) {
            var address = $('#pac-input').val();
            var title = $('form[name=form-product] input[name=title]').val();
            if (address == '' && title == '') {
                location.href = baseUrl;
            } else {
                if (address === '' && title === '') {
                    location.href = baseUrl + 'phodocu/search/search';
                } else if (address !== '' && title === '') {
                    location.href = baseUrl + 'phodocu/search/search?location=' + address;
//                    location.href = baseUrl + 'tim-kiem/p=' + address + '.html';
                } else if (address === '' && title !== '') {
                    location.href = baseUrl + 'phodocu/search/search?title=' + title;
//                    location.href = baseUrl + 'tim-kiem/k=' + title + '.html';
                } else {
                    location.href = baseUrl + 'phodocu/search/search?location=' + address + '&title=' + title;
//                    location.href = baseUrl + 'tim-kiem/k=' + title + ',p=' + address + '.html';
                }
            }
        }
    });

//    if (address !== '' && title === '') {
//                    location.href = baseUrl + 'tim-kiem?p=' + address;
//                } else if (address === '' && title !== '') {
//                    location.href = baseUrl + 'tim-kiem?t=' + title;
//                } else {
//                    location.href = baseUrl + 'tim-kiem?p=' + address + '&t=' + title;
//                }
};

search.clicksearch = function () {
    var address = $('#pac-input').val();
    var title = $('form[name=form-product] input[name=title]').val();
    if (address == '' && title == '') {
        location.href = baseUrl;
    } else {
        if (address === '' && title === '') {
            location.href = baseUrl + 'phodocu/search/search';
        } else if (address !== '' && title === '') {
            location.href = baseUrl + 'phodocu/search/search?location=' + address;
//                    location.href = baseUrl + 'tim-kiem/p=' + address + '.html';
        } else if (address === '' && title !== '') {
            location.href = baseUrl + 'phodocu/search/search?title=' + title;
//                    location.href = baseUrl + 'tim-kiem/k=' + title + '.html';
        } else {
            location.href = baseUrl + 'phodocu/search/search?location=' + address + '&title=' + title;
//                    location.href = baseUrl + 'tim-kiem/k=' + title + ',p=' + address + '.html';
        }
    }
};

search.checkoutbox = function () {
    $.ajax({
        type: "POST",
        url: baseUrl + 'phodocu/outbox/checkoutbox',
        success: function (result) {
            var i = 0;
            var html = '<ul>';
            if (typeof result.data != 'undefined') {
                var length = result.data.length;
            }
            if (length != 0) {
                $('#user_login .box-mail .mail-noti').text(length).show();
            } else {
                html += '<li><p class="empty_data_outbox_header">Hộp thư trống</p></li>';
            }
            $.each(result.data, function (key, val) {
                if (i <= 5) {
                    html += '<li>';
                    html += '<a style="color:black; text-decoration:none;" href="' + baseUrl + 'hom-thu/' + val.consersation_id + '.html">';
                    html += '<div class="data-mail-box">';
                    html += '<img style="float: left" src="' + val.reply_count + '" />';
                    html += '<div class="text-outbox"><p class="title">' + val.title + '</p><p class="author_title">Với : ' + val.username.substring(0, 8) + ',' + val.username_recipient.substring(0, 8) + '</p><p class="date_time">' + val.last_reply + ',' + textutils.formatTime(val.created_at) + '</p></div>';
                    html += '<div style="clear:both"></div>';
                    html += '</div>';
                    html += '</a>';
                    html += '</li>';
                    i++;
                }
            });
            html += '</ul>';
            $('#user_login .box-content-mail').append(html);
        }
    });
};

search.scroll = function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= $(document).height() - $(window).height()) {
            if (search.busy == true)
                return false;
            else
                search.loadMore();
        }
    });
};

search.getItems = function (item) {
    var items = '';
    for (var i = 0; i < 1; i++) {
        items += item;
    }
    return $(items);
}

search.loadMore = function () {
    var params = textutils.queryParam();
    search.busy = true;
    search.page = parseInt(search.page + 1);
    $.ajax({
        type: "POST",
        url: baseUrl + 'phodocu/search/get-box',
        cache: false,
        data: {page: search.page, title: params.title, location: params.location},
        success: function (result)
        {
            var $items = search.getItems(result);
            $items.hide();
            search.contain.append($items);
            $items.show();
            search.contain.masonry('appended', $items);
        }
    }).always(function ()
    {
        search.busy = false;
    });
};
search.initSearch = function () {
    var params = textutils.queryParam();
    $.each(params, function (key, val) {
        $('#form-search-data [name="' + key + '"]').val(val);
        $(".tag-search").append('<a>' + key + ':' + val + '</a>');
    });
};

var delay = (function () {
    var timer = 0;
    return function (callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();

search.resolveLocation = function () {
    var address = $('#pac-input').val();
    var url = textutils.createAlias(address);
    location.href = baseUrl + 'phodocu/search/search?location=' + url;
};

search.initSearch = function () {
    var params = textutils.queryParam();
    $.each(params, function (key, val) {
        $('#form-search-data [name="' + key + '"]').val(val);
        $(".tag-search").append('<a>' + key + ':' + val + '</a>');
    });
};