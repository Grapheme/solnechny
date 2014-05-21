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
					</div>
					<div class="about-con">
						<img class="photo-left" src="<?=site_url('img/photo-left.png');?>">
						<div class="about-img-div">
							<div class="fotorama" data-arrows="false" data-width="100%" data-nav="dots" data-loop="true" data-autoplay="8000" data-cropToFit="true">
								<img src="<?=site_url('img/pool/1.jpg');?>">
								<img src="<?=site_url('img/pool/2.jpg');?>">
								<img src="<?=site_url('img/pool/3.jpg');?>">
								<img src="<?=site_url('img/pool/4.jpg');?>">
							</div>
						</div>
						<img class="photo-right" src="<?=site_url('img/photo-right.png');?>">
					</div>
					<a name="about"> </a>
					<div class="page-title">
						Душа загородного клуба «Солнечный» — большой и детский открытые бассейны.
					</div>
					<div class="grid2 page-main-text" style="display: table">
						<div class="col text">
							Основной бассейн является самым большим открытым бассейном в Ростове-на-Дону 
							и подходит как для тренировки профессиональных спортсменов, так и для тех, кто 
							хочет поддерживать себя в хорошей физической форме. Второй мини-бассейн 
							располагается вблизи детской площадки и создан специально для детей, за 
							безопасностью которых следят аниматоры.
						</div>
						<div class="col">
							Зона отдыха клуба — это порядка 200 шезлонгов по всему периметру бассейна, 
							остекленный гриль-бар с персональным обслуживанием и VIP-беседки вместимостью 
							до 8 человек, где можно спрятаться от общего шума. Для любителей активного 
							отдыха обустроена спортивная площадка для игры в пляжный волейбол и футбол. 
							Второй этаж клуба — это лаунж-терраса с двухместными лежаками, телевизором и 
							видом на комплекс.
						</div>
					</div>
					<a name="rules"> </a>
					<div class="plan-title pool">
						ПРАВИЛА ПОЛЬЗОВАНИЯ БАССЕЙНОМ И ЗОНОЙ ОТДЫХА
					</div>
					<div class="grid2 rules" style="display: table;">
						<div class="col">
	                        <div class="rule"><span class="dot">•</span><div class="rule-text">Загородный клуб «Солнечный», прежде всего, ориентирован на комфортный семейный отдых. На территории комплекса можно курить только в специально отведенных местах, а с 13:00 до 14:00 в клубе играет тихая спокойная музыка, чтобы малыши могли отдохнуть.</div></div>
	                        <div class="rule"><span class="dot">•</span><div class="rule-text">При входе оплачивается стоимость шезлонга. <br/> ПН-ПТ - 1000 рублей, СБ-ВС - 1 200 рублей.</div></div>
	                        <div class="rule"><span class="dot">•</span><div class="rule-text">При посещении бассейна ПН-ПТ с 16:00 до 21:00 предоставляется скидка 50% при входе.</div></div>
	                        <div class="rule"><span class="dot">•</span><div class="rule-text">Дети от 3 до 10 лет - скидка 30%</div></div>
	                    </div>
	                    <div class="col">
	                        <div class="rule"><span class="dot">•</span><div class="rule-text">Дети до 3 лет – вход бесплатно, располагаются на шезлонге с родителями.</div></div>
	                        <div class="rule"><span class="dot">•</span><div class="rule-text">Бронирование одной из девяти беседок вместимостью <nobr>6-8 человек</nobr> - 5 000 день.</div></div>
	                        <div class="rule"><span class="dot">•</span><div class="rule-text">VIP-терраса на втором уровне, 150 кв. м  – всегда в резерве, точная стоимость при бронировании.</div></div>
	                        <div class="rule"><span class="dot">•</span><div class="rule-text">Для гостей клуба, проживающих в МКР «Солнечный», предоставляется возможность покупки месячного абонемента на посещение бассейна. Стоимость абонемента составляет <nobr>10 000 рублей</nobr>.</div></div>
	                    </div>
					</div>
					<!--
					<a name="booking"> </a>
					<div class="pool-button"> </div>
					<div class="pool-button"><input class="sbutton" type="button" value="ЗАБРОНИРОВАТЬ ЛЕЖАК" onclick="window.location='bron.html'"></div>
					-->
					<div class="work-time">
						<span class="wt-title">Лучшие места под солнцем бронируйте заранее по телефону: 8 (863) 210-19-03</span></br>
						<span class="wt-text">Мы ждем вас с 10:00 до 21:00, с 17 мая до 1 ноября</span><br>
						<img src="<?=site_url('img/pool.png');?>">
					</div>
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
