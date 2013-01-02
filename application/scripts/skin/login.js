$(function(){
	popupFb.init();

	$("#modal_registro").on("show", function(){
		$("#modal_ingreso").modal("hide");
	});

	form_ajax.init();
});


/**
 * Inicializa el login por ajax
 */
var form_ajax = (function($){
	var objr = {};
	function initialize(){
		$("form[data-sendajax=true]").each(function(){
			var target = $(this);
			target.ajaxForm({ 
				success:  function(data){
					success(data, target)
				},
				clearForm: true,
				resetForm: true,
				dataType: 'json'        // 'xml', 'script', or 'json' (expected server response type)
			});

			$('.close', target).on('click', function(){
				$("#"+target.attr("data-alert")).hide(500);
			});
		});
	}
	function success(data, target){
		var alert = $("#"+target.attr("data-alert"));
		
		alert.addClass("alert-"+data.frm_errors.ico).show(300);
		$("span", alert).html(data.frm_errors.msg);
	}
	objr.init = initialize;
	return objr;
})(jQuery);


/**
 * Popup para el login con facebook
 */
var popupFb = (function($){
	var objr = {};
	function initialize(){
		$('input[type="button"]#loginFb').on('click', function(){
			popup();
		});
	}
	function popup(){
		var width = 300, 
			height = 300, 
			xPosition = ($(window).width()-width) / 2, 
			yPosition = ($(window).height()-height) / 2, 
			url = base_url + 'customer/login_facebook';
		var win = window.open(url, 'Login Facebook', 'width=' + width + 
													 ', height=' + height + 
													 ', top=' + yPosition + 
													 ', left=' + xPosition);
	}
	objr.init = initialize;
	return objr;
})(jQuery);