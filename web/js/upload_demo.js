$(document).ready(function () {


    $("#image").change(function () {

        var file = document.getElementById("image").files[0];

        var readImg = new FileReader();

        readImg.readAsDataURL(file);

        readImg.onload = function (e) {
            $('.prevImg').attr('src', e.target.result).fadeIn();
        }

    })


});