<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<?php $this->load->view("guests_interface/includes/head");?>
<link rel="stylesheet" href="<?=site_url('css/fotorama.css');?>">
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
						<img class="star" src="<?=site_url('img/ship.png');?>">
						<div class="afisha-title"><div class="title-line"></div>РЕСТОРАН<div class="title-line"></div></div>
					</div>
					<div class="about-con" style="margin-top: 25px;">
						<img class="photo-left" src="<?=site_url('img/photo-left.png');?>">
						<div class="about-img-div">
							<div class="fotorama" data-arrows="false" data-width="100%" data-nav="dots" data-loop="true" data-autoplay="8000" data-cropToFit="true">
								<img src="<?=site_url('img/rest/1.jpg');?>">
								<img src="<?=site_url('img/rest/2.jpg');?>">
								<img src="<?=site_url('img/rest/3.jpg');?>">
								<img src="<?=site_url('img/rest/4.jpg');?>">
								<img src="<?=site_url('img/rest/5.jpg');?>">
								<img src="<?=site_url('img/rest/6.jpg');?>">
								<img src="<?=site_url('img/rest/7.jpg');?>">
								<img src="<?=site_url('img/rest/8.jpg');?>">
								<img src="<?=site_url('img/rest/9.jpg');?>">
							</div>
						</div>
						<img class="photo-right" src="<?=site_url('img/photo-right.png');?>">
					</div>
					<div class="page-title">
						Уютный ресторан на 260 мест с европейской кухней и концертной программой по выходным.
					</div>
					<div class="grid2 page-main-text" style="display: table">
						<div class="col text">
							Двухуровневый ресторан с открытой террасой на 260 гостей прекрасно подходит как для камерных ужинов, так и для пышных торжеств. Светлый, лаконичный интерьер выдержан в природной цветовой гамме. Мягкие кресла, «необработанные » деревянные поверхности и обилие живых растений дают ощущение свежести и умиротворения. В меню традиционные блюда русской, европейской и итальянской кухни.
						</div>
						<div class="col">
							Для детей, кроме любимой пиццы и пасты, большой выбор диетических блюд из детского меню, всевозможные салаты, фреши и десерты из сезонных фруктов и ягод. Для взрослых – профессиональная дегустация вин от опытного сомелье. Есть зал для курящих, работает высокоскоростной wi fi.  Каждые выходные – живые выступления известных музыкантов, места на которые нужно бронировать заранее.
						</div>
					</div>
					<div class="child-phone"> </div>
					<!--
					<div class="child-phone" style="padding-bottom: 2em;">
					<span class="wt-title">Забронируйте и оплатите билет</span>
					</div>
					<div class="child-phone">
					<span class="wt-title">Бронирование в будние дни по звонку администратору &mdash; 8 (863) 295-51-11</span>
					</div>
					-->
				</article>
			</div>
		</div>
		<div class="push"></div>
	</div>
	<?php $this->load->view("guests_interface/includes/footer");?>
	<?php $this->load->view("guests_interface/includes/scripts");?>
	<script type="text/javascript" src="<?=site_url('js/fotorama.js');?>"></script>
	<?php $this->load->view("guests_interface/includes/metrika");?>
</body>
</html>