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
							</div>
						</div>
						<img class="photo-right" src="<?=site_url('img/photo-right.png');?>">
					</div>
					<div class="page-title">
						Загородный клуб «Солнечный» представляет новый формат ресторана, эксклюзивность которого состоит в том, что именно здесь гости клуба могут совместить гастрономическую кухню и отдых на природе.  В новом сезоне ресторан «Солнечный» обещает стать излюбленным местом отдыха ростовчан.
					</div>
					<div class="grid2 page-main-text" style="display: table">
						<div class="col text">
							<p>
								Авторская кухня «Солнечного» — это разнообразные завтраки, ланчи и семейные ужины. Мы также предоставляем нашим гостям возможность приобрести горячие и холодные блюда с собой на вынос или заказать их в нашей гастрономической лавке. Новинкой заведения является открытый BBQ-бар, где гости клуба будут не только свидетелями, но и участниками увлекательного процесса приготовления блюд на огне. 
							</p>
							<p>
								Интерьер ресторана уютный и по-домашнему теплый — с плетеными креслами, глубокими мягкими диванами и обилием живых растений.  Мы стремимся позволить посетителям клуба оказаться вне законов времени и насладиться бесподобно вкусными и изысканными обедами или ужинами.
							</p>
						</div>
						<div class="col">
							<p>
								В новом сезоне ресторан «Солнечный» работает круглый год и предлагает проведение корпоративных мероприятий, банкетов и свадебных торжеств с количеством гостей до 150 человек. Мы рады предложить нашим гостям полностью обновленное меню и новый изысканный интерьер. Высокоскоростной доступ в Интернет, профессиональное акустическое оборудование, вежливый и обходительный персонал позволят провести в нашем ресторане мероприятие любого уровня — от деловой встречи до международной конференции. 
							</p>
						</div>
					</div>
					<div class="child-phone"> </div>
					<!--
					<div class="child-phone" style="padding-bottom: 2em;">
					<span class="wt-title">Забронируйте и оплатите билет</span>
					</div>

					<div class="child-phone">
					<span class="wt-title">Бронирование в будние дни по звонку администратору &mdash; 8 (863) 210-19-02</span>
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