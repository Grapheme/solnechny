<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

	<!-- Fotorama -->
	<!-- Please, do not hotlink to theese files! -->
	<!-- Download your copy at http://fotoramajs.com/download/ -->
	<link rel="stylesheet" href="http://fotoramajs.com/fotorama/jsfiddle/fotorama.css">
	<script src="http://fotoramajs.com/fotorama/jsfiddle/fotorama.js"></script>
	<!-- Please, do not hotlink to theese files! -->
	
	<title>Загородный клуб Солнечный</title>
</head>
<body>

  	<!--
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<link  href="http://fotorama.s3.amazonaws.com/fotorama.css" rel="stylesheet">
	<script src="http://fotorama.s3.amazonaws.com/fotorama.js"></script>
	
	<div class="fotorama" data-fullscreen="true" data-hash="true" data-nav="none" data-background="#111" data-minWidth="640px">	
		<img src="<?=site_url('images/reception/DMF_7991.jpg');?>" >
	</div>
	-->

	<div class="fotorama" data-fullscreen="true" data-hash="true" data-nav="none" data-background="#111" data-minWidth="640px" data-autoplay="true">
		
	<?php
	// open the current directory
	$dhandle = opendir('./images/reception');
	// define an array to hold the files
	$files = array();
	
	if ($dhandle) {
	   // loop through all of the files
	   while (false !== ($fname = readdir($dhandle))) {
	      // if the file is not this file, and does not start with a '.' or '..',
	      // then store it for later display
	      if (($fname != '.') && ($fname != '..') &&
	          ($fname != basename($_SERVER['PHP_SELF']))) {
	          // store the filename
	          $files[] = (is_dir( "./$fname" )) ? "(Dir) {$fname}" : $fname;
	      }
	   }
	   // close the directory
	   closedir($dhandle);
	}
	
	// Now loop through the files, echoing out a new select option for each one
	foreach( $files as $fname )
	{
	   echo '<img src="'. site_url('images/reception/'.$fname) .'" >';
	}
	?>

	</div>
	
</body>
</html>
