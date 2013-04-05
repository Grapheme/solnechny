/*  Author: Grapheme Group
 *  http://grapheme.ru/
 */
 
var mt = mt || {};
mt.baseURL = window.location.protocol+'//'+window.location.hostname+'/';
mt.currentURL = window.location.href;
mt.currentElement = 0;
mt.isValidEmailAddress = function(emailAddress){var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);return pattern.test(emailAddress);};
mt.isValidPhone = function(phoneNumber){var pattern = new RegExp(/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/i);return pattern.test(phoneNumber);};
mt.textLineFilter = function(string){return string.replace(/[&,=]/,' ');}
mt.setJsonRequest = function(request,functionName){$.each(request,function(index,value){$("#"+index)[functionName](value);});}
mt.formSerialize = function(objects){
	var data = '';
	$(objects).each(function(i,element){
		var value = mt.textLineFilter($(element).val());
		$(element).val(value);var name = $(element).attr('name');
		if(data === ''){data = name+"="+value;}else{data = data+"&"+name+"="+value;}});
	return data;
};
mt.matches_parameters = function(parameter1,parameter2){
	var param1 = new String(parameter1);
	var param2 = new String(parameter2);
	if(param1.toString() == param2.toString()){return true;}
	return false;
};
mt.exist_email = function(emailInput){
	var user_email = $(emailInput).val();
	$(emailInput).tooltip('destroy');
	if(user_email != ''){
		if(!mt.isValidEmailAddress(user_email)){$(emailInput).attr('data-original-title','Неверный Email').tooltip('show');}
		else{
			$.post(mt.baseURL+"valid/exist-email",{'parametr':user_email},
				function(data){if(!data.status){$(emailInput).attr('data-original-title','Email уже существует').tooltip('show');}},"json");
		}
	}
};
mt.redirect = function(path){window.location=path;}
mt.minLength = function(string,Len){if(string != ''){if(string.length < Len){return false}}return true}
mt.FieldsIsNotNumeric = function(formObject){
	var result = {};var num = 0;
	$(formObject).nextAll("input.digital").each(function(i,element){if(!$.isNumeric($(element).val())){result[num] = $(element).attr('id');num++;}});
	$(formObject).nextAll("input.numeric-float").each(function(i,element){if(!$.isNumeric($(element).val())){result[num] = $(element).attr('id');num++;}});
	if($.isEmptyObject(result)){return false;}else{return result;}
}
mt.noValidEmails = function(elements){
	var user_email = ''; var errors = false;
	$(elements).each(function(i,element){
		user_email = $(element).val();
		if(!mt.isValidEmailAddress(user_email)){$(element).attr('data-original-title','Неверный Email').tooltip('show');errors = true;}
	});
	return errors;
}
mt.validation = function(formData,jqForm,options){
	var errors = false;
	$(":input[role='tooltip']").tooltip('destroy');
	$(jqForm).find(".valid-required").each(function(i,element){if($(this).val() == ''){$(this).tooltip('show');errors = true;}});
	if(!errors){
		if($(jqForm).find("input.valid-email").length > 0){
			if(mt.noValidEmails($(jqForm).find("input.valid-email"))){errors = true;}
		}
	}
	if(!errors){
		if($(jqForm).find("input[type='password']").length == 2){
			var user_password = $("#input-password").val();
			var user_confirm_password = $("#input-confirm-password").val();
			if(user_password != ''){
				if(!mt.matches_parameters(user_password,user_confirm_password)){$("#input-confirm-password").attr('data-original-title','Пароли не совпадают').tooltip('show');errors = true;}
				if(!mt.minLength(user_password,6)){$("#input-password").attr('data-original-title','Не меньше 6 символов').tooltip('show');errors = true;}
			}
		}
	}
	if(errors){return false;}else{return true;}
}
mt.ajaxBeforeSubmit = function(formData,jqForm,options){
	$(jqForm).find("div.form-request").html('');
	if(mt.validation(formData,jqForm,options)){
		$(jqForm).find("div.wait-request").removeClass('hidden');
		$(jqForm).find("div.div-form-operation").addClass('hidden');
		return true;
	}else{
		return false;
	}
}
mt.ajaxSuccessSubmit = function(responseText,statusText,xhr,jqForm){
	$(jqForm).find("div.wait-request").addClass('hidden');
	$(jqForm).find("div.div-form-operation").removeClass('hidden');
}
$(function(){
	$.fn.exists = function(){return $(this).length;}
	$.fn.emptyValue = function(){if($(this).val() == ''){return true;}else{return false;}}
	$(".none").click(function(event){event.preventDefault();});
	$(":input.unique-email").blur(function(){mt.exist_email(this);});
	$(":input[role='tooltip']").change(function(){$(this).tooltip("destroy");});
});