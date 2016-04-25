$(document).ready(function () {

    'use strict';

    function showTooltip(x, y, contents) {
        $('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css({
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5
        }).appendTo('body').fadeIn(200);
    }


    /***** BAR CHART *****/

    var bardata = [['Jan', 10], ['Feb', 23], ['Mar', 18], ['Apr', 13], ['May', 17], ['Jun', 30],
        ['Jul', 26], ['Aug', 16], ['Sep', 17], ['Oct', 5], ['Nov', 8], ['Dec', 15]];

    $.plot('#barchart', [bardata], {
        series: {
            lines: {
                lineWidth: 1
            },
            bars: {
                show: true,
                barWidth: 0.5,
                align: 'center',
                lineWidth: 0,
                fillColor: '#428BCA'
            }
        },
        grid: {
            borderColor: '#ddd',
            borderWidth: 1,
            labelMargin: 10
        },
        xaxis: {
            mode: 'categories',
            tickLength: 0
        }
    });


});
