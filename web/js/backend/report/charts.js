$(document).ready(function () {

var helpers = Chart.helpers;
var canvas = document.getElementById('bar');
var randomScalingFactor = function() {
  return Math.round(Math.random() * 100)
};
var barChartData = {
    labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"],
    datasets: [{
      label: "Tổng đơn hàng",
      fillColor: "#2574ab",
      strokeColor: "#2574ab",
      highlightFill: "#2574ab",
      highlightStroke: "#2574ab",
      data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(),randomScalingFactor(), randomScalingFactor(),0,0, 0]
    }, {
      label: "Đơn hàng thành công",
      fillColor: "#259dab",
      strokeColor: "rgba(151,187,205,0.8)",
      highlightFill: "rgba(151,187,205,0.75)",
      highlightStroke: "rgba(151,187,205,1)",
      data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(),randomScalingFactor(), randomScalingFactor(),0,0,0]
    }]

  }
  // 
var bar = new Chart(canvas.getContext('2d')).Bar(barChartData, {
  tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>kb",
  animation: false,
});
// 
var legendHolder = document.createElement('div');
legendHolder.innerHTML = bar.generateLegend();

document.getElementById('legend').appendChild(legendHolder.firstChild);

});
