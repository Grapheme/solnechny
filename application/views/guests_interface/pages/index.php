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
	<?php $this->load->view("guests_interface/includes/header-index");?>
	<div class="position">
		<div id="circle-1" class="position-circle"> </div>
		<div id="circle-2" class="position-circle"> </div>
		<div id="circle-3" class="position-circle"> </div>
		<div id="circle-4" class="position-circle"> </div>
		<div id="circle-5" class="position-circle"> </div>
	</div>
	<?php $this->load->view("guests_interface/includes/slider");?>
	<?php $this->load->view("guests_interface/includes/navigation-index");?>
	
	<div class="main-1">
		<a class="circle"></a>
		<a href="<?=site_url('about');?>" class="circle-inv">
			<div class="circle-div">
				<img src="<?=site_url('img/sun.png');?>" alt=""><br>
				<span class="title">О КЛУБЕ</span>
				<div class="text">Загородный семейный клуб с атмосферой европейского курорта.</div>
			</div>
		</a>
		<img class="main-arrow-down" src="<?=site_url('img/main-down.png');?>" id="1">
	</div>
	<div class="main-2">
		<a class="circle"></a>
		<a href="<?=site_url('pool');?>" class="circle-inv">
			<div class="circle-div">
				<img src="<?=site_url('img/pool.png');?>" alt=""><br>
				<span class="title">БАССЕЙН</span>
				<div class="text">Плавательный бассейн под открытым небом c комфортной температурой воды с мая по октябрь.</div>
			</div>
		</a>
		<img class="main-arrow-down" src="<?=site_url('img/main-down.png');?>" id="2">
	</div>
	<div class="main-3">
		<a class="circle"></a>
		<a href="<?=site_url('spa');?>" class="circle-inv">
			<div class="circle-div">
				<img src="<?=site_url('img/hor.png');?>" alt=""><br>
				<span class="title">СПА-ЗОНА</span>
				<div class="text">Спа-зона объединяет хамам, сауну и кабинет массажа. Здесь царит тепло и гармония во всем.</div>
			</div>
		</a>
		<img class="main-arrow-down" src="<?=site_url('img/main-down.png');?>" id="3">
	</div>
	<div class="main-4">
		<a class="circle"></a>
		<a href="<?=site_url('restaurant');?>" class="circle-inv">
			<div class="circle-div">
				<img src="<?=site_url('img/rest.png');?>" alt=""><br>
				<span class="title">РЕСТОРАН</span>
				<div class="text">Уютный ресторан на 260 мест с европейской кухней и концертной программой по выходным.</div>
			</div>
		</a>
		<img class="main-arrow-down" src="<?=site_url('img/main-down.png');?>" id="4">
	</div>
	<div class="main-5">
		<a class="circle"></a>
		<a href="<?=site_url('afisha');?>" class="circle-inv">
			<div class="circle-div">
				<img src="<?=site_url('img/star-m.png');?>" alt=""><br>
				<span class="title">АФИША</span>
				<div class="text">По выходным в «Солнечном» выступают лучшие музыканты и диджеи. Бронируйте столики заранее.</div>
			</div>
		</a>
		<img class="main-arrow-up" src="<?=site_url('img/main-up.png');?>">
	</div>
	<div class="popup-overlay">
    	<div class="social-popup">
    		<a href="#" class="close">Х</a>
    		<div class="question">
    			<input type="checkbox" id="no-show-popup" />
    			Больше не показывать это окно
    		</div>
    		<div class="vk-widget">
        		<script type="text/javascript" src="//vk.com/js/api/openapi.js?96"></script>
				<!-- VK Widget -->
				<div id="vk_groups"></div>
				<script type="text/javascript">
				VK.Widgets.Group("vk_groups", {mode: 1, width: "300", height: "290"}, 54576777);
				</script>
			</div>
			<div class="fb-widget">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1&appId=118650518205495";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like-box" data-href="https://www.facebook.com/solnclub" data-width="300" data-height="290" data-show-faces="false" data-stream="false" data-show-border="true" data-header="false"></div>
			</div>
			
    		<div class="slogan">Самые яркие события <br/> в <span>Солнечном</span></div>
    	</div>
    </div>
	<?php $this->load->view("guests_interface/includes/scripts");?>
	<?php $this->load->view("guests_interface/includes/metrika");?>
</body>
</html>
