$(function(){
	popupFb.init();
});

var popupFb = (function($){
	var objr = {};
	function initialize(){
		$('#loginFb').on('click', function(){
			popup();
		});
	}
	function popup(){
		var width = 300, 
			height = 300, 
			xPosition = ($(window).width()-width) / 2, 
			yPosition = ($(window).height()-height) / 2, 
			url = base_url + 'facebook_test/';
		var win = window.open(url, 'Login Facebook', 'width=' + width + 
													 ', height=' + height + 
													 ', top=' + yPosition + 
													 ', left=' + xPosition);
	}
	objr.init = initialize;
	return objr;
})(jQuery);