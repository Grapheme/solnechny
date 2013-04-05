/*  Author: Grapheme Group
 *  http://grapheme.ru/
 */

(function($){
	var mainOptions = {target: '#form-request',beforeSubmit: mt.ajaxBeforeSubmit,success: mt.ajaxSuccessSubmit,type:'post'};
	var singlePhotoOption = {
		type: 'post',
		beforeSubmit: function(responseText,statusText,xhr,jqForm){
			if(mt.ajaxBeforeSubmit(responseText,statusText,xhr,jqForm)){
				$("#upload-photo-status").empty();
				var percentVal = '0%';
				$("div.bar").width(percentVal);
				$("div.bar").html(percentVal);
				$("#btn-submit-event").addClass('hidden');
				$(jqForm).find("div.wait-request").removeClass('hidden');
				$("#div-upload-photo").removeClass('hidden');
			}else{return false;}
		},
		uploadProgress: function(event,position,total,percentComplete){
			var percentVal = percentComplete + '%';
			$("div.bar").width(percentVal);
			$("div.bar").html(percentVal);
			$("#upload-photo-status").html('<img src="'+mt.baseURL+'images/wait.gif" alt="" />');
		},
		success: function(responseText,statusText,xhr,jqForm){
			var percentVal = '100%';
			$("div.bar").width(percentVal);
			$("div.bar").html(percentVal);
			$("#upload-photo-status").html('Фото загружено');
			$(jqForm).find("div.wait-request").addClass('hidden');
			$("#btn-submit-event").removeClass('hidden');
			$(jqForm).find(":input[type='submit']").removeClass('disabled').removeAttr('disabled');
			if(statusText){
				$("div.bar").parents('div.progress').removeClass('progress-info active').addClass('progress-success');
				$("#div-insert-item").delay(1000).slideUp(500,function(){
					$("#div-insert-item").remove();
					$("#form-request").html(responseText);
				})
			}else{
				$("div.bar").parents('div.progress').removeClass('progress-info active').addClass('progress-danger');
			}
		}
	}
	$("#form-sign-in").submit(function(){
		var options = mainOptions;
		options.target = null;
		options.dataType = 'json';
		options.success = function(response,status,xhr,jqForm){
			if(response.status){mt.redirect(response.path);}else{mt.ajaxSuccessSubmit(response,status,xhr,jqForm);$(jqForm).find("div.form-request").html(response.message);}
		}
		$(this).ajaxSubmit(options);
		return false;
	});
	$("#insert-event-form").submit(function(){
		var ckdata = CKEDITOR.instances.content.getData();
		$(this).find("textarea.ckeditor").html(ckdata);
		$(this).ajaxSubmit(singlePhotoOption);
		return false;
	});
	$("#update-event-form").submit(function(){
		var ckdata = CKEDITOR.instances.content.getData();
		$(this).find("textarea.ckeditor").html(ckdata);
		var eventOptions = mainOptions;
		eventOptions.target = null;
		eventOptions.success = function(responseText,statusText,xhr,jqForm){
			mt.ajaxSuccessSubmit(responseText,statusText,xhr,jqForm);
			$("#div-update-event").slideUp(500,function(){
				$(this).remove();
				$("#form-request").html(responseText);
			})
		}
		$(this).ajaxSubmit(eventOptions);
		return false;
	});
	$("button.event-status").click(function(event){
		if($(this).hasClass("active")){return false;}
		var _this = this;
		var postdata = $(_this).parents('div.btn-group').attr('data-account');
		$.post(mt.baseURL+"change-event-status",{'postdata':postdata},
				function(data){
					$(_this).removeClass('btn-success').removeClass('btn-danger');
					$(_this).siblings(':button').removeClass('btn-success').removeClass('btn-danger');
					if(data.status){$(_this).addClass('btn-success');}else{$(_this).addClass('btn-danger');}
				},"json");
		
	})
})(window.jQuery);