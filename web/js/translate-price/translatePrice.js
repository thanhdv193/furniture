$(document).ready(function () {
    function insertPrice() {
        var a = validateNumber();        
        var b = $("input#price").attr("maxlength");        
        if (a.length > b) {
            a = a.substring(0, b)
        }
        $("input#price").attr("value", a);
        
        formatPrice()
    }
    function formatPrice() { 
        var b = validateNumber();        
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
                //var string = j.replace('/" "/g','.');                
                $("#price").attr("value", string)
            }
        }
    }

    function validateNumber() { 
        var a = "";
        //var e = $("input#price").attr("value");  
        var e = $("input#price").val(); 
        
        var c = e.length;        
        if ((c > 0)) {
            if (!(e === "") && (e != null)) {
                var c = e.length;
                for (var b = 0; b < c; b++) {
                    var d = e.charAt(b);
                    if ((d >= "0") && (d <= "9") && !(d == "")) {
                        a = a + d
                    }
                }
            }
        }
        return a
    }
    translatePrice = function () {
        var a = validateNumber();
        $("#tprice").text(DocTienBangChu(a))
    };
    var ChuSo = new Array(" không ", " một ", " hai ", " ba ", " bốn ", " năm ", " sáu ", " bảy ", " tám ", " chín ");
    var Tien = new Array("", " nghìn", " triệu", " tỷ", " nghìn tỷ", " triệu tỷ");

    function DocSo3ChuSo(e) {
        var c;
        var b;
        var a;
        var d = "";
        c = parseInt(e / 100);
        b = parseInt((e % 100) / 10);
        a = e % 10;
        if (c == 0 && b == 0 && a == 0) {
            return ""
        }
        if (c != 0) {
            d += ChuSo[c] + " trăm ";
            if ((b == 0) && (a != 0)) {
                d += " linh "
            }
        }
        if ((b != 0) && (b != 1)) {
            d += ChuSo[b] + " mươi";
            if ((b == 0) && (a != 0)) {
                d = d + " linh "
            }
        }
        if (b == 1) {
            d += " mười "
        }
        switch (a) {
            case 1:
                if ((b != 0) && (b != 1)) {
                    d += " mốt "
                } else {
                    d += ChuSo[a]
                }
                break;
            case 5:
                if (b == 0) {
                    d += ChuSo[a]
                } else {
                    d += " lăm "
                }
                break;
            default:
                if (a != 0) {
                    d += ChuSo[a]
                }
                break
        }
        return d
    }
    function DocTienBangChu(d) {
        var a = 0;
        var c = 0;
        var f = 0;
        var e = "";
        var b = "";
        var g = new Array();
        if (d < 0) {
            return ""
        }
        if (d == 0) {
            return ""
        }
        if (d > 0) {
            f = d
        } else {
            f = -d
        }
        if (d > 8999999999999999) {
            return "Số quá lớn!"
        }
        g[5] = Math.floor(f / 1000000000000000);
        if (isNaN(g[5])) {
            g[5] = "0"
        }
        f = f - parseFloat(g[5].toString()) * 1000000000000000;
        g[4] = Math.floor(f / 1000000000000);
        if (isNaN(g[4])) {
            g[4] = "0"
        }
        f = f - parseFloat(g[4].toString()) * 1000000000000;
        g[3] = Math.floor(f / 1000000000);
        if (isNaN(g[3])) {
            g[3] = "0"
        }
        f = f - parseFloat(g[3].toString()) * 1000000000;
        g[2] = parseInt(f / 1000000);
        if (isNaN(g[2])) {
            g[2] = "0"
        }
        g[1] = parseInt((f % 1000000) / 1000);
        if (isNaN(g[1])) {
            g[1] = "0"
        }
        g[0] = parseInt(f % 1000);
        if (isNaN(g[0])) {
            g[0] = "0"
        }
        if (g[5] > 0) {
            a = 5
        } else {
            if (g[4] > 0) {
                a = 4
            } else {
                if (g[3] > 0) {
                    a = 3
                } else {
                    if (g[2] > 0) {
                        a = 2
                    } else {
                        if (g[1] > 0) {
                            a = 1
                        } else {
                            a = 0
                        }
                    }
                }
            }
        }
        for (c = a; c >= 0; c--) {
            b = DocSo3ChuSo(g[c]);
            e += b;
            if (g[c] > 0) {
                e += Tien[c]
            }
            if ((c > 0) && (b.length > 0)) {
                e += ","
            }
        }
        if (e.substring(e.length - 1) == ",") {
            e = e.substring(0, e.length - 1)
        }
        e = e.substring(1, 2).toUpperCase() + e.substring(2);
        e = $.trim(e);
        e = e + " đồng";
        return e
    }

    $("#price").keydown(function (b) {
        var a = (b.which) ? b.which : b.keyCode;
        if (a == 46 || a == 8 || a == 37 || a == 39 || a == 9 || a == 229) {
        } else {
            if (a > 31 && (a < 48 || a > 57) && (a < 96 || a > 105)) {
                return false
            }
        }
    });
    formatPrice();
    $("input#price").on("focusout", function () {
        insertPrice();
        translatePrice()
    }).on("keyup", function () {
        formatPrice();
        translatePrice()
    });
});