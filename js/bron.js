/*  Author: Grapheme Group
 *  http://grapheme.ru/
 */

$(function(){
	getSunbedStatuses($("input.datepicker").val());
	$("div.sunbed").click(function(){
		if($(this).hasClass('current')){
			$(this).removeClass('current');
		}else{
			$(this).addClass('current');
		}
	});
	$("button.set-free-sunbeds-statuses").click(function(){
		
		var selectedSunbeds = mt.sunbedsSerialize();
		if(selectedSunbeds != false){
			sendSunbedStatus(selectedSunbeds,'free');
		}
	});
	$("button.set-engaged-sunbeds-statuses").click(function(){
		
		var selectedSunbeds = mt.sunbedsSerialize();
		if(selectedSunbeds != false){
			sendSunbedStatus(selectedSunbeds,'engaged');
		}
	});
	$("a.save-sunbeds-statuses").click(function(event){
		event.preventDefault();
		var _this = this;
		if($("div.current").length > 0){
			alert('1');
		}
	});
	function sendSunbedStatus(sunbeds,metod){
		
		var date = $("input.datepicker").val();
		$.ajax({
			url: mt.baseURL+'set-sundeb-statuses',data: {'sunbeds':sunbeds,'metod':metod,'date':date},type: 'POST',dataType: 'json',
			beforeSend: function(){
				$("div.div-operation").addClass('hidden');
				$("div.server-response").html('');
				$("div.wait-request").removeClass('hidden');
			},
			success: function(data,textStatus,xhr){
				setTimeout(function(){
					if(data.status == true){
						if(metod == 'engaged'){
							$("div.current").addClass('engaged');
						}else if(metod == 'free'){
							$("div.current").removeClass('engaged');
						}
						$("div.current").removeClass('current');
					}
					$("div.div-operation").removeClass('hidden');
					$("div.server-response").html('<img src="'+mt.baseURL+'img/check.png"> Операция выполнена');
					$("div.wait-request").addClass('hidden');
				},1000);
				
			},
			error: function(xhr,textStatus,errorThrown){
				$("div.div-operation").removeClass('hidden');
				$("div.server-response").html('<img src="'+mt.baseURL+'img/no-check.png"> Ошибка. Попробуйте снова');
				$("div.wait-request").addClass('hidden');
			}
		});
	}
});