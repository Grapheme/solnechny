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
	<div class="page afisha">
		<div class="page-container">
		<?php $this->load->view("guests_interface/includes/header");?>
			<div class="white-div">
				<?php $this->load->view("guests_interface/includes/navigation");?>
				<article>
					<div class="main-content" style="display: table; width: 100%;">
						<div class="page-top">
							<img class="star" src="<?=site_url('img/star.png');?>">
							<div class="afisha-title"><div class="title-line"></div>АФИША<div class="title-line"></div></div>
							<div class="page-title">Каждую субботу специально для вас мы проводим концерты известных артистов и ди-джеев.</div>
							<!--
							<div class="about-links">
								<a class="about_link now" href="#">АНОНСЫ</a>
								<a class="about_link" href="#">АРХИВ</a>
							</div>
							-->
						</div>
						<div class="afisha-con">
							<div class="grid3">
							<?php for($i=0;$i<count($events);$i++):?>
								<div class="col">
									<div class="afisha-inside">
										<div class="afisha-date"><?=month_date_without_year($events[$i]['date']);?></div>
										<a href="<?=site_url('afisha/'.$events[$i]['translit'])?>">
											<img class="afisha-img" src="<?=site_url('loadimage/events/'.$events[$i]['id']);?>">
											<div class="afisha-text">
												<p><?=$events[$i]['title'];?></p>
												<?=$events[$i]['announce'];?>
											</div>
										</a>
									</div>
								</div>
							<?php endfor;?>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
		<div class="push"></div>
	</div>
	<?php $this->load->view("guests_interface/includes/footer");?>
	<?php $this->load->view("guests_interface/includes/scripts");?>
	<?php $this->load->view("guests_interface/includes/metrika");?>
</body>
</html>
