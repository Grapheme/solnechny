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
						<img class="star" src="<?=site_url('img/sun.png');?>">
						<div class="afisha-title"><div class="title-line"> </div>О КЛУБЕ<div class="title-line"> </div></div>
						<div class="about-links">
							<a class="about_link" href="<?=site_url('about#about');?>">О КЛУБЕ</a>
							<a class="about_link" href="<?=site_url('about#map');?>">СХЕМА КОМПЛЕКСА</a>
						</div>
					</div>
					<div class="about-con">
						<img class="photo-left" src="<?=site_url('img/photo-left.png');?>">
						<div class="about-img-div">
							<div class="fotorama" data-arrows="false" data-width="100%" data-nav="dots" data-loop="true" data-autoplay="8000" data-cropToFit="true">
								<img src="<?=site_url('img/club/1.jpg');?>">
								<img src="<?=site_url('img/club/2.jpg');?>">
								<img src="<?=site_url('img/club/3.jpg');?>">
								<img src="<?=site_url('img/club/4.jpg');?>">
								<img src="<?=site_url('img/club/5.jpg');?>">
							</div>
						</div>
						<img class="photo-right" src="<?=site_url('img/photo-right.png');?>">
					</div>
					<a name="about"> </a>
					<div class="page-title">
						В десяти километрах от Ростова-на-Дону вы найдете море летних развлечений для взрослых и детей всех возрастов. Подогреваемые бассейны, площадки для пляжных игр, приватные беседки, диджей-бар и уютный ресторан с европейской кухней и детским меню. Загородный клуб «Солнечный» — ваше место под солнцем!
					</div>
					<div class="grid2 page-main-text" style="display: table">
						<div class="col text">
							Экологичный интерьер и первоклассный сервис для поклонников семейного отдыха на природе с городским комфортом.
							Не дожидаясь отпуска, вы можете зарядиться солнечной энергией в окружении ярких, интересных людей. Позагорать в шезлонге у бассейна или поиграть в пляжный волейбол. 
							Теплой компанией растянуться на «vip-матрасе» в беседке, а вечером поужинать на террасе и послушать выступления любимых музыкантов.
						</div>
						<div class="col">
							Детей и родителей порадует детский клуб с возможностью оставить ребенка на целый день.
							Под присмотром опытных педагогов и аниматоров дети занимаются творчеством, строят песочные замки, катаются с горки в мини-бассейне и заняты множеством других интересных дел. Что бы вы ни выбрали, в «Солнечном» вас ждут идеальные летние выходные.
						</div>
					</div>
					<div class="page-sub-text">
						<img src="<?=site_url('img/child.png');?>">
						Территория клуба оборудована с учетом безопасности и потребностей детей: пеленальная комната со всем необходимым для мам и малышей, нескользящие покрытия и широкие съезды для колясок. Специальные зоны для курения. Кроме того, в комплексе есть удобства для людей с ограниченными возможностями.
					</div>
					<a name="map"> </a>
					<div class="plan-title">
						СХЕМА КОМПЛЕКСА
					</div>
					<div class="plan-con">
						<div class="plan-div">
							<div class="plan-wrapper plan-circle-ball"><img src="<?=site_url('img/circle-1.png');?>" alt=""><div class="plan-text">Площадка для пляжного волейбола.</div></div>
							<div class="plan-wrapper plan-circle-cir"><img src="<?=site_url('img/circle-hor.png');?>" alt=""><div class="plan-text">Детский бассейн с водной горкой <nobr>8х4 метра</nobr> и площадка для игр.</div></div>
							<div class="plan-wrapper plan-circle-ambr"><img src="<?=site_url('img/circle-pool.png');?>" alt=""><div class="plan-text">Удобные шезлонги с зонтами у бассейна.</div></div>
							<div class="plan-wrapper plan-circle-star"><img src="<?=site_url('img/circle-star.png');?>" alt=""><div class="plan-text">Сцена для проведения живых концертов.</div></div>
							<div class="plan-wrapper plan-circle-park"><img src="<?=site_url('img/circle-park.png');?>" alt=""><div class="plan-text">Автопарковка на 100 мест для гостей клуба.</div></div>
							<div class="plan-wrapper plan-circle-ship"><img src="<?=site_url('img/circle-sun.png');?>" alt=""><div class="plan-text">Вход в клуб, рецепция.</div></div>
							<div class="plan-wrapper plan-circle-shiptop"><img src="<?=site_url('img/circle-rest.png');?>" alt=""><div class="plan-text">Ресторан с европейской кухней на 260 посадочных мест.</div></div>
							<div class="plan-wrapper plan-circle-show"><img src="<?=site_url('img/circle-show.png');?>" alt=""><div class="plan-text">Душевые кабинки.</div></div>
							<div class="plan-wrapper plan-circle-shipright"><img src="<?=site_url('img/circle-ship.png');?>" alt=""><div class="plan-text">Бассейн 25х20 метров с подогревом в мае и сентябре.</div></div>
							<div class="plan-wrapper plan-circle-hor"><img src="<?=site_url('img/circle-hor.png');?>" alt=""><div class="plan-text">Детский клуб с аниматорами и опытными педагогами.</div></div>
							<div class="plan-wrapper plan-circle-bar"><img src="<?=site_url('img/circle-bar.png');?>" alt=""><div class="plan-text">Диджей-бар с напитками и легкими закусками.</div></div>
							<div class="plan-wrapper plan-circle-park2"><img src="<?=site_url('img/circle-park.png');?>" alt=""><div class="plan-text">Автопарковка на 100 мест для гостей клуба.</div></div>
							<div class="plan-wrapper plan-circle-vip1"><img src="<?=site_url('img/circle-vip.png');?>" alt=""><div class="plan-text">Лаунж террасса с видом на комплекс и персональным обслуживанием.</div></div>
							<div class="plan-wrapper plan-circle-vip2"><img src="<?=site_url('img/circle-vip.png');?>" alt=""><div class="plan-text">Приватные беседки на 6-8 человек с большим матрасом.</div></div>
							<img class="plan-photo" src="<?=site_url('img/plan.jpg');?>" alt="">
						</div>
					</div>
					<div class="work-time">
						<span class="wt-title">Лучшие места под солнцем бронируйте заранее по телефону: 8 (863) 295-51-11</span></br>
						<span class="wt-text">Мы ждем вас с 9:00 до 00:00, с 1 июня до 1 ноября</span><br>
						<img src="<?=site_url('img/sun.png');?>">
					</div>
				</article>
			</div>
		</div>
		<div class="push"> </div>
	</div>
	<?php $this->load->view("guests_interface/includes/footer");?>
	<?php $this->load->view("guests_interface/includes/scripts");?>
	<script type="text/javascript" src="<?=site_url('js/fotorama.js');?>"></script>
	<?php $this->load->view("guests_interface/includes/metrika");?>
</body>
</html>
