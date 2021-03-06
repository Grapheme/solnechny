<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<?php $config =&get_config();?>
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="stylesheet" href="<?=$config['base_url'];?>css/normalize.css">
	<link rel="stylesheet" href="<?=$config['base_url'];?>css/fotorama.css;?>">
	<link rel="stylesheet" href="<?=$config['base_url'];?>css/main.css">
	<script src="<?=$config['base_url'];?>js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div class="page p404">
    <div class="page-container">
        <header>
            <div class="logo">
                <a href="<?=$config['base_url'];?>"><img src="<?=$config['base_url'];?>img/logo404.png" style="width:220px;"></a>
            </div>
        </header>
        <div class="con-404">
            <img src="<?=$config['base_url'];?>img/404.png" alt="">
            <div class="afisha-title"><div class="title-line"></div>404<div class="title-line"></div></div>
            <div class="page-sub-text in404">Страница не найдена. Адрес набран неправильно или не существует.</div>
            <div class="p404-bottom">Перейти на <a href="<?=$config['base_url'];?>">главную страницу</a> сайта</div>
        </div>
    </div>
    <div class="push"></div>
</div>
<footer class="p404">
    <div class="top"></div>
    <div class="middle p404">
        <div class="footer-middle" style="padding-top: 45px;">
            &copy; 2013 Загородный клуб &laquo;Солнечный&raquo;
        </div>
    </div>
    <div class="bottom"></div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=$config['base_url'];?>js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
<script src="<?=$config['base_url'];?>js/plugins.js"></script>
<script src="<?=$config['base_url'];?>js/main.js"></script>
<script src="<?=$config['base_url'];?>js/fotorama.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter20814004 = new Ya.Metrika({id:20814004,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/20814004" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
