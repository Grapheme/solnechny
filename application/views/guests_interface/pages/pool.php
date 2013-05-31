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
						<div class="afisha-title"><div class="title-line"> </div>БАССЕЙН<div class="title-line"> </div></div>
						<div class="about-links">
							<a class="about_link" href="pool.html#about">О БАССЕЙНЕ</a>
							<a class="about_link" href="pool.html#rules">ПРАВИЛА</a>
							<a class="about_link" href="pool.html#booking">БРОНИРОВАНИЕ</a>
						</div>
					</div>
					<div class="about-con">
						<img class="photo-left" src="<?=site_url('img/photo-left.png');?>">
						<div class="about-img-div">
							<div class="fotorama" data-arrows="false" data-width="100%" data-nav="dots" data-loop="true" data-autoplay="8000" data-cropToFit="true">
								<img src="<?=site_url('img/pool/1.jpg');?>">
								<img src="<?=site_url('img/pool/2.jpg');?>">
								<img src="<?=site_url('img/pool/3.jpg');?>">
							</div>
						</div>
						<img class="photo-right" src="<?=site_url('img/photo-right.png');?>">
					</div>
					<a name="about"> </a>
					<div class="page-title">
						Зона отдыха вокруг бассейна – это эпицентр «Солнечной» активности. Здесь кажется, что море совсем близко. Повсюду фейерверки водных брызг, 
						волейбольный азарт, взмахи шейкера за барной стойкой, смех и танцы под жизнерадостные летние хиты.
					</div>
					<div class="grid2 page-main-text" style="display: table">
						<div class="col text">
							В вашем распоряжении естественный солярий с шезлонгами и зонтами, площадка для пляжного волейбола, бар с впечатляющей коктейльной картой и 
							легкими закусками. Подогреваемые бассейны поддерживают комфортную температуру с мая по ноябрь. Для детей организована игровая площадка с песочницей, 
							мини-бассейном и водной горкой. Если вы предпочитаете  отдыхать на расстоянии от общего веселья,
						</div>
						<div class="col">
							Забронируйте vip-беседку с большим матрасом, на котором с комфортом разместится компания до 8 человек. В беседку вы можете заказать блюда из ресторана.
							Для гостей клуба на втором уровне комплекса есть уютная лаунж-терраса с видом на комплекс, двухместными лежаками, телевизором и персональным обслуживанием.
						</div>
					</div>
					<a name="rules"> </a>
					<div class="plan-title pool">
						ПРАВИЛА ПОЛЬЗОВАНИЯ БАССЕЙНОМ И ЗОНОЙ ОТДЫХА
					</div>
					<div class="grid2 rules" style="display: table;">
						<div class="col">
							<div class="rule"><span class="dot">•</span><div class="rule-text">Загородный клуб «Солнечный», прежде всего, ориентирован на комфортный семейный отдых. На территории комплекса можно курить только в специально отведенных местах, а с 13:00 до 14:00 в клубе играет тихая спокойная музыка, чтобы малыши могли отдохнуть.</div></div>
							<div class="rule"><span class="dot">•</span><div class="rule-text">При входе оплачивается стоимость шезлонга. <br/> ПН-ЧТ &mdash; 1000 рублей, ПТ-ВС &mdash; 1 200 рублей.</div></div>
							<div class="rule"><span class="dot">•</span><div class="rule-text">Дети до 3 лет – вход бесплатно, располагаются на шезлонге с родителями.</div></div>
						</div>
						<div class="col">
							<div class="rule"><span class="dot">•</span><div class="rule-text">Дети от 3 до 10 лет &mdash; скидка 30%</div></div>
							<div class="rule"><span class="dot">•</span><div class="rule-text">Бронирование одной из девяти беседок вместимостью до 8 человек - 10 000 день, депозит 2000 рублей.</div></div>
							<div class="rule"><span class="dot">•</span><div class="rule-text">VIP-терраса на втором уровне, 150 кв. м  – всегда в резерве, точная стоимость при бронировании.</div></div>
						</div>
					</div>
					<a name="booking"> </a>
					<div class="pool-button"> </div>
					<!--
					<div class="pool-button"><input class="sbutton" type="button" value="ЗАБРОНИРОВАТЬ ЛЕЖАК" onclick="window.location='bron.html'"></div>
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
