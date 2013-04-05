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
	<div class="page bron">
		<div class="page-container">
		<?php $this->load->view("guests_interface/includes/header");?>
			<div class="white-div">
				<?php $this->load->view("guests_interface/includes/navigation");?>
				<article>
					<div class="page-top">
						<img class="star" src="img/bambr.png">
						<div class="afisha-title"><div class="title-line"></div>БРОНИРОВАНИЕ<div class="title-line"></div></div>
					</div>
					<div class="page-title">
						Чтобы любимый шезлонг или беседка были свободны в нужный день, <br/>забронируйте их заранее удобным для вас способом.
					</div>
					<div class="contacts">
						<div class="cont-text">Позвоните по телефону <b>8 (863) 295-51-11</b> и оплатите непосредственно в клубе, <br/>когда будет удобно.</div>
						<div class="cont-text">Забронируйте и оплатите места через сайт.</div>
					</div>
					<div class="page-title">
						Бронирование осуществляется не позднее, чем за сутки до посещения клуба.<br>Бронирование будет доступно ближе к открытию клуба.
					</div>
					<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p> <!-- temporary case -->
					<div class="pool-rent" style="margin-top: 0em;">
						Стоимость аренды простого лежака на целый день - <b>1500 руб.</b><br>
						Стоимость аренды VIP-беседки на 8 персон - <b>15000 руб.</b>, депозит - <b>3000 руб.</b>
					</div>
					<p>&nbsp;</p>
					<div class="bron-other step-1h" style="border-top:1px solid #d4d3d1;">
						<span class="date-step">шаг 1.</span> <span class="date-title">Выбор даты и места</span>
					</div>
					<div class="date-d step-1">
						<p><span class="date-step">шаг 1.</span> <span class="date-title">Выбор даты и места</span></p>
						<p><span class="date-date">Дата:</span> <input type="text" class="date bron-inp"></p>
					</div>
					<div class="bron-plan step-1">
						plan
					</div>
					<div class="bron-onebottom step-1">
						<div>Лежаки: <b>№ 1, 2</b></div>
						<div>Сумма: <b>3000 руб.</b></div>
						<div class="b-button"><input type="button" value="ДАЛЕЕ" class="sbutton"></div>
					</div>
					<div class="bron-other step-2h">
						<span class="date-step">шаг 2.</span> <span class="date-title">Личные данные</span>
					</div>
					<div class="bron-plan step-2">
						<p class="bron-con-title">Ваши контактные данные нужны клубу для связи с вами.</p>
						<div class="table" style="margin: 0 auto; margin-top:1.5em;">
							<div>
								<div><span class="date-date">Вас зовут:</span></div>
								<div><input type="text" class="bron-inp"></div>
							</div>
							<div>
								<div><span class="date-date">Телефон:</span></div>
								<div><input type="text" class="bron-inp"></div>
							</div>
							<div>
								<div><span class="date-date">Эл.Почта:</span></div>
								<div><input type="text" class="bron-inp"></div>
							</div>
						</div>
					</div>
					<div class="bron-other step-2">
						<a href="#" class="bron-cancel def" style="float:left; margin: 0 2em 0 2em;">Назад</a>
						<div class="b-button"><input type="button" value="ДАЛЕЕ" class="sbutton"></div>
					</div>
					<div class="bron-other step-3h">
						<span class="date-step">шаг 3.</span> <span class="date-title">Оплата</span>
					</div>
					<div class="bron-plan step-3">
						<div class="booked">
							<div class="left-dashed"></div>
							<div class="booked-left">
								<div class="table">
									<div>
										<div class="booked-title">Дата:</div><div class="booked-val">2012-07-29</div>
									</div>
									<div>
										<div class="booked-title">Лежаки:</div><div class="booked-val">№ 1, 2</div>
									</div>
									<div>
										<div class="booked-title">Сумма:</div><div class="booked-val"><b>3000 р.-</b></div>
									</div>
								</div>
							</div>
							<div class="booked-right">
								<div class="table">
									<div>
										<div class="booked-title">Вас зовут:</div><div class="booked-val">Екатерина</div>
									</div>
									<div>
										<div class="booked-title">Телефон:</div><div class="booked-val">89285500553</div>
									</div>
									<div>
										<div class="booked-title">Эл.Почта:</div><div class="booked-val"><b>mail@mail.com</b></div>
									</div>
								</div>
							</div>
						</div>
						<div class="pool-rent beg" style="margin-top: 1em;">
							Оплата производится на стороннем сервисе РОБОКАССА.<br>
							Пожалуйста, завершите оплату за 15 минут.
						</div>
						<div class="pool-rent end" style="margin-top: 1em; display: none;"><br>
							Оплата прошла удачно.<br>
							Спасибо, что выбрали наш клуб.<br>
							Ждем вас в гости!
						</div>
					</div>
					<div class="bron-other step-3 beg">
						<a href="#" class="bron-cancel def" style="float:left; margin: 0 2em 0 2em;">Назад</a>
						<div class="b-button"><input type="button" value="ДАЛЕЕ" class="sbutton"></div>
					</div>
					<div class="bron-other end" style="display:none;">
						<a href="#" class="bron-cancel def" style="margin: 0 2em 0 2em;">Распечатать</a>
					</div>
					<div class="pool-button"><input class="sbutton" type="button" value="ЗАБРОНИРОВАТЬ И ОПЛАТИТЬ"></div>
				
				</article>
			</div>
		</div>
		<div class="push"></div>
	<?php $this->load->view("guests_interface/includes/footer");?>
	<?php $this->load->view("guests_interface/includes/scripts");?>
	<?php $this->load->view("guests_interface/includes/metrika");?>
</body>
</html>
