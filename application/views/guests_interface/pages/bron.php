<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<?php $this->load->view("guests_interface/includes/head");?>
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
						<img class="star" src="img/bambr.png">
						<div class="afisha-title"><div class="title-line"></div>БРОНИРОВАНИЕ<div class="title-line"></div></div>
					</div>
					<p>&nbsp;</p>
					<div class="page-title">
						Выберите номер лежака, позвоните администратору по номеру: <strong>+7 (863) 295-51-11</strong> <br/>
						и оплатите непосредственно в клубе в день посещения.
					</div>
					<div class="contacts">
						<div class="cont-text">Бронирование осуществляется не позднее, чем за сутки до посещения клуба.</div>
					</div>
					<div class="plan-con pattern">
						<div class="plan-div pool-schema">
							<div class="sunbed" id="sunbed-16">16</div>
							<div class="sunbed" id="sunbed-17">17</div>
							<div class="sunbed" id="sunbed-18">18</div>
							<div class="sunbed" id="sunbed-19">19</div>
							<img class="plan-photo schema" src="<?=site_url('img/schema.png');?>" alt="">
						</div>
					</div>
				</article>
			</div>
		</div>
		<div class="push"></div>
	</div>
	<?php $this->load->view("guests_interface/includes/footer");?>
	<?php $this->load->view("guests_interface/includes/scripts");?>
	<script type="text/javascript" src="<?=site_url('js/vendor/base.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/cabinet/guest.js');?>"></script>
	<?php $this->load->view("guests_interface/includes/metrika");?>
</body>
</html>
