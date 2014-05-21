<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<?php $this->load->view("guests_interface/includes/head");?>
<link rel="stylesheet" href="<?=site_url('css/bootstrap-tooltip.css');?>" />
<link rel="stylesheet" href="<?=site_url('css/css-patch.css');?>" />
</head>
<body>
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
	<div id="fb-root"> </div>
	<script>(function(d,s,id){var js,fjs = d.getElementsByTagName(s)[0]; if(d.getElementById(id)) return; js = d.createElement(s);js.id = id; js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";fjs.parentNode.insertBefore(js, fjs);}(document,'script','facebook-jssdk'));</script>
	<script>!function(d,s,id){var js,fjs = d.getElementsByTagName(s)[0]; if(!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = "//platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);}}(document, "script", "twitter-wjs");</script>
	<div class="page about">
		<div class="page-container">
		<?php $this->load->view("guests_interface/includes/header");?>
			<div class="white-div">
				<?php $this->load->view("guests_interface/includes/navigation");?>
				<article>
					<div class="page-top">
						<img class="star" src="img/contact.png" style="margin-bottom: 1em;">
						<div class="afisha-title"><div class="title-line"></div>КОНТАКТЫ<div class="title-line"></div></div>
					</div>
					<div class="contacts">
						<p>&nbsp;</p>
						<p class="page-title">
							Мы находимся в 10 км от Ростова-на-Дону, <br/>в приятном соседстве с элитным жилым поселком «Солнечный».
						</p>
						<p class="cont-text">МКР &laquo;Солнечный&raquo;<br>г. Батайск, шоссе Восточное, 17 Б</p>
						<div class="ya-map-link"><a target="_blank" href="http://maps.yandex.ru/?um=CBuJeKP_Ekg6rKw_YeXUQrnRgS2hKWp5&l=map">КАРТА ЯНДЕКС</a></div>
						<div class="cont-text">T.: 8 (863) 210-19-03</div>
						<a class="cont-email" href="mailto:info@sk-stroikov.ru">info@sk-stroikov.ru</a>
						<div class="cont-title">БРОНИРОВАНИЕ ШЕЗЛОНГОВ</div>
						<div class="cont-text">T.: 8 (863) 210-19-03</div>
						<div class="cont-title">РЕЖИМ РАБОТЫ</div>
						<div class="cont-text">Мы рады принять наших гостей ежедневно<br>с 10.00 до 23.00</div>
					</div>
					<form action="<?=site_url('send-feedback');?>" method="post" id="form-feedback">
						<div class="feedback">
							<div class="cont-title feed">ОБРАТНАЯ СВЯЗЬ
								<p class="cont-error">Не заполнены обязательные поля</p>
							</div>
							<div class="cont-inp-div"><input class="cont-inp valid-required" name="user-name" type="text" placeholder="Представьтесь" <?=TOOLTIP_FIELD_BLANK;?>></div>
							<div class="cont-inp-div"><input class="cont-inp valid-required valid-email" name="user-email" type="text" placeholder="Электронная почта для ответа" <?=TOOLTIP_FIELD_BLANK;?>></div>
							<div class="cont-inp-div"><textarea class="cont-inp valid-required" name="user-content" placeholder="Сообщение" rows="5" <?=TOOLTIP_FIELD_BLANK;?>></textarea></div>
						</div>
						<div class="cont-send">
							<div class="div-form-operation">
								<div class="text-error form-request"></div>
								<button class="sbutton" type="submit" value="send" name="submit-feedback">ОТПРАВИТЬ</button>
							</div>
							<div class="wait-request hidden"></div>
						</div>
					</form>
				</article>
			</div>
		</div>
		<div class="push"></div>
	</div>
	<?php $this->load->view("guests_interface/includes/footer");?>
	<?php $this->load->view("guests_interface/includes/scripts");?>
	<script type="text/javascript" src="<?=site_url('js/vendor/bootstrap.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/vendor/jquery.form.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/vendor/base.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/cabinet/guest.js');?>"></script>
	<?php $this->load->view("guests_interface/includes/metrika");?>
</body>
</html>
