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
						<img class="star" src="<?=site_url('img/childl.png');?>">
						<div class="afisha-title"><div class="title-line"></div>СПА-ЗОНА<div class="title-line"> </div></div>
					</div>
					<div class="about-con" style="margin-top: 25px;">
						<img class="photo-left" src="<?=site_url('img/photo-left.png');?>">
						<div class="about-img-div">
							<div class="fotorama" data-arrows="false" data-width="100%" data-nav="dots" data-loop="true" data-autoplay="8000" data-cropToFit="true">
								<img src="<?=site_url('img/spa/1.jpg');?>">
								<img src="<?=site_url('img/spa/2.jpg');?>">
							</div>
						</div>
						<img class="photo-right" src="<?=site_url('img/photo-right.png');?>">
					</div>
					<div class="page-title">
						SPA-зона «Солнечного» предлагает разные виды оздоровительных и расслабляющих SPA-услуг. 

					</div>
					<div style="display: table">
						<div class="grid2 page-main-text clearfix">
							<div class="col text">
								<p>
									Посетите хамам и финскую сауну с эффектом русской бани. В массажном кабинете вы 
									сможете получить любой вид массажа и проработать проблемные зоны. 
									Гидропроцедуры, джакузи, а также различные обертывания и пилинги помогут 
									почувствовать себя полностью обновленным и полным сил. 
								</p>
							</div>
							<div class="col">
								<p>
									По окончании процедур гостям предлагается насладиться чаем в 
									комфортабельной комнате отдыха. При желании вы можете посетить SPA-зону 
									компанией до шести человек и разделить удовольствием с друзьями.
								</p>
							</div>							
						</div>
						<!--
						<div class="plan-title pool">
							Важно знать, что:
						</div>
						<div class="grid2 rules">
							<div class="col">
								<div class="rule"><span class="dot">•</span><div class="rule-text">Мы принимаем детей с 3 лет.</div></div>
								<div class="rule"><span class="dot">•</span>
									<div class="rule-text">
										В детском клубе «Солнечный» действует услуга «детский сад неполного дня». Если вам нужно уехать по делам, вы можете оставить 
										ребенка на 3 часа в любой  день недели.
									</div>
								</div>
							</div>
							<div class="col">
								<div class="rule"><span class="dot">•</span>
									<div class="rule-text">
										Детский бассейн оборудован подогревом, что позволяет постоянно поддерживать комфортную температуру.
									</div>
								</div>
							</div>
						</div>
						-->
					</div>
					<div class="work-time">
						<span class="wt-title">Задайте вопрос администратору по телефону: 8 (863) 210-19-03</span></br>
						<span class="wt-text">Мы ждем вас с 10:00 до 21:00, с 17 мая до 1 ноября</span><br>
						<img src="<?=site_url('img/spa.png');?>">
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