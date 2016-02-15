$(document).ready(function(){
   $(".tab-content").hide();
   var results = window.location.href;
			arr = results.split('#');
			console.log(arr[1]);
			currentTab = $('#'+arr[1]);
		//alert(arr[1]);
			$('#tab-panel li').removeClass('current');
			currentTab.parent().addClass('current');
			$('.tab-content').hide();
			var activeTab = currentTab.attr("href");
			$(activeTab).fadeIn(300);
                        
                $("#tab-panel li a").click(function(){
		$('#tab-panel li').removeClass('current');
		$(this).parent().addClass('current');
		$('.tab-content').hide();
		var activeTab = $(this).attr("href");
		$(activeTab).fadeIn(300);
		});	
});