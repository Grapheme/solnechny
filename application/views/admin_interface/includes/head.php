<meta charset="utf-8" />
<title>Администрирование</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="Graphema" />
<link href="<?=site_url('css/bootstrap.css');?>" rel="stylesheet" />
<link href="<?=site_url('css/bootstrap-responsive.css');?>" rel="stylesheet" />
<!--[if lt IE 9]>
	<script src="<?=site_url('js/libs/html5shiv.js');?>"></script>
<![endif]-->
<link rel="shortcut icon" href="<?=site_url('ico/favicon.ico');?>" />
<link rel="stylesheet" href="<?=site_url('css/css-patch.css');?>" />
<style type="text/css">
	.sunbed { background-color: #91806f; width: 44px; height: 19px; color: #fff; text-align: center; line-height: 19px; font-size: 12px; opacity: 0.8; position: absolute; cursor: default; }
	.sunbed.current { background-color: #51c1da; }
	.sunbed.engaged { background-color: #e96b16; }
	.sunbed.current.engaged { background-color: #51c1da; }
	
	#sunbed-1 { top: 23.54em; right: 5.2em; width: 55px; height: 70px; line-height: 70px; }
	#sunbed-2 { top: 37.04em; right: 5.2em; width: 55px; height: 70px; line-height: 70px; }
	#sunbed-3 { top: 69em; right: 5.2em; width: 55px; height: 70px; line-height: 70px; }
	#sunbed-4 { top: 80.5em; right: 5.2em; width: 55px; height: 70px; line-height: 70px; }
	#sunbed-5 { top: 92em; right: 5.2em; width: 55px; height: 70px; line-height: 70px; }
	#sunbed-6 { top: 103.34em; right: 7.8em; width: 55px; height: 70px; line-height: 70px; transform:rotate(45deg);  -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); }
	#sunbed-7 { top: 96.84em; right: 16.3em; width: 70px; height: 55px; line-height: 55px; }
	#sunbed-8 { top: 105.14em; right: 20.3em; width: 70px; height: 55px; line-height: 55px; }
	#sunbed-9 { top: 105.14em; right: 34.4em; width: 70px; height: 55px; line-height: 55px; }
	#sunbed-10 { top: 105.14em; right: 49em; width: 70px; height: 55px; line-height: 55px; }
	
	#sunbed-12 { top: 27.94em; right: 20.2em; }
	#sunbed-13 { top: 29.94em; right: 20.2em; }
	#sunbed-14 { top: 31.94em; right: 20.2em; }
	#sunbed-15 { top: 33.94em; right: 20.2em; }
	#sunbed-16 { top: 36.94em; right: 20.2em; }
	#sunbed-17 { top: 39.94em; right: 20.2em; }
	#sunbed-18 { top: 41.94em; right: 20.2em; }
	#sunbed-19 { top: 44.94em; right: 20.2em; }
	#sunbed-20 { top: 46.94em; right: 20.2em; }
	#sunbed-21 { top: 49.94em; right: 20.2em; }
	#sunbed-22 { top: 53.94em; right: 20.2em; }
	#sunbed-23 { top: 56.94em; right: 20.2em; }
	#sunbed-24 { top: 58.94em; right: 20.2em; }
	#sunbed-25 { top: 60.94em; right: 20.2em; }
	#sunbed-26 { top: 62.94em; right: 20.2em; }
	#sunbed-27 { top: 65.94em; right: 20.2em; }
	#sunbed-28 { top: 67.94em; right: 20.2em; }
	#sunbed-29 { top: 70.94em; right: 20.2em; }
	#sunbed-30 { top: 73.94em; right: 20.2em; }
	#sunbed-31 { top: 76.94em; right: 20.2em; }
	#sunbed-32 { top: 78.94em; right: 20.2em; }
	#sunbed-33 { top: 81.94em; right: 20.2em; }
	#sunbed-34 { top: 27.94em; right: 20.2em; }
	#sunbed-35 { top: 27.94em; right: 20.2em; }
	#sunbed-36 { top: 27.94em; right: 20.2em; }
	#sunbed-37 { top: 27.94em; right: 20.2em; }
	#sunbed-38 { top: 27.94em; right: 20.2em; }
	#sunbed-39 { top: 27.94em; right: 20.2em; }
	#sunbed-40 { top: 27.94em; right: 20.2em; }
	#sunbed-41 { top: 27.94em; right: 20.2em; }
	#sunbed-42 { top: 27.94em; right: 20.2em; }
	#sunbed-43 { top: 27.94em; right: 20.2em; }
	#sunbed-44 { top: 27.94em; right: 20.2em; }
	#sunbed-45 { top: 27.94em; right: 20.2em; }
	#sunbed-46 { top: 27.94em; right: 20.2em; }
	#sunbed-47 { top: 27.94em; right: 20.2em; }
	#sunbed-48 { top: 27.94em; right: 20.2em; }
	#sunbed-49 { top: 27.94em; right: 20.2em; }
	#sunbed-50 { top: 27.94em; right: 20.2em; }
	#sunbed-51 { top: 27.94em; right: 20.2em; }
	#sunbed-52 { top: 27.94em; right: 20.2em; }
	#sunbed-53 { top: 27.94em; right: 20.2em; }
	
	
	#sunbed-86 { top: 27.94em; right: 71em; }
	#sunbed-85 { top: 29.94em; right: 71em; }
	#sunbed-84 { top: 31.94em; right: 71em; }
	#sunbed-83 { top: 33.94em; right: 71em; }
	#sunbed-82 { top: 36.94em; right: 71em; }
	#sunbed-81 { top: 39.94em; right: 71em; }
	#sunbed-80 { top: 41.94em; right: 71em; }
	#sunbed-79 { top: 44.94em; right: 71em; }
	#sunbed-78 { top: 46.94em; right: 71em; }
	#sunbed-77 { top: 49.94em; right: 71em; }
	#sunbed-76 { top: 53.94em; right: 71em; }
	#sunbed-75 { top: 56.94em; right: 71em; }
	#sunbed-74 { top: 58.94em; right: 71em; }
	#sunbed-73 { top: 60.94em; right: 71em; }
	#sunbed-72 { top: 62.94em; right: 71em; }
	#sunbed-71 { top: 65.94em; right: 71em; }
	#sunbed-70 { top: 67.94em; right: 71em; }
	#sunbed-69 { top: 70.94em; right: 71em; }
	#sunbed-68 { top: 73.94em; right: 71em; }
	#sunbed-67 { top: 76.94em; right: 71em; }
	#sunbed-66 { top: 78.94em; right: 71em; }
	#sunbed-65 { top: 81.94em; right: 71em; }
	
	#sunbed-112 { top: 14em; right: 59em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-113 { top: 14em; right: 61.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-114 { top: 14em; right: 65em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-115 { top: 14em; right: 67.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-116 { top: 14em; right: 71em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-117 { top: 14em; right: 73.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-118 { top: 14em; right: 77em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-119 { top: 14em; right: 79.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	
	#sunbed-58 { top: 96.5em; right: 28.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-59 { top: 96.5em; right: 31em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-60 { top: 96.5em; right: 38.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-61 { top: 96.5em; right: 41em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-62 { top: 96.5em; right: 47.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-63 { top: 96.5em; right: 50em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	
	#sunbed-38 { top: 87.4em; right: 29em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-39 { top: 87.4em; right: 31.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-42 { top: 87.4em; right: 37em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-43 { top: 87.4em; right: 39.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-46 { top: 87.4em; right: 44em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-47 { top: 87.4em; right: 46.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-50 { top: 87.4em; right: 51.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-51 { top: 87.4em; right: 54em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-54 { top: 87.4em; right: 59.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-55 { top: 87.4em; right: 62em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	
	#sunbed-108 { top: 21.6em; right: 29em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-107 { top: 21.6em; right: 31.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-104 { top: 21.6em; right: 37em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-103 { top: 21.6em; right: 39.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-100 { top: 21.6em; right: 44em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-99 { top: 21.6em; right: 46.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-96 { top: 21.6em; right: 51.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-95 { top: 21.6em; right: 54em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-92 { top: 21.6em; right: 59.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-91 { top: 21.6em; right: 62em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	
	#sunbed-40 { top: 82.4em; right: 33em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-41 { top: 82.4em; right: 35.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-44 { top: 82.4em; right: 41em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-45 { top: 82.4em; right: 43.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-48 { top: 82.4em; right: 48em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-49 { top: 82.4em; right: 50.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-52 { top: 82.4em; right: 55.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-53 { top: 82.4em; right: 58em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	
	#sunbed-106 { top: 26.6em; right: 33em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-105 { top: 26.6em; right: 35.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-102 { top: 26.6em; right: 41em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-101 { top: 26.6em; right: 43.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-98 { top: 26.6em; right: 48em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-97 { top: 26.6em; right: 50.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-94 { top: 26.6em; right: 55.5em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	#sunbed-93 { top: 26.6em; right: 58em; transform:rotate(90deg);  -ms-transform:rotate(90deg); -webkit-transform:rotate(90deg); }
	
	#sunbed-34 { top: 84.8em; right: 21.2em; transform:rotate(30deg);  -ms-transform:rotate(30deg); -webkit-transform:rotate(30deg); }
	#sunbed-35 { top: 86.8em; right: 22.4em; transform:rotate(30deg);  -ms-transform:rotate(30deg); -webkit-transform:rotate(30deg); }
	#sunbed-36 { top: 82em; right: 25.4em; transform:rotate(75deg);  -ms-transform:rotate(75deg); -webkit-transform:rotate(75deg); }
	#sunbed-37 { top: 82.6em; right: 27.5em; transform:rotate(75deg);  -ms-transform:rotate(75deg); -webkit-transform:rotate(75deg); }
	#sunbed-64 { top: 84.8em; right: 70.5em; transform:rotate(-30deg);  -ms-transform:rotate(-30deg); -webkit-transform:rotate(-30deg); }
	#sunbed-120 { top: 86.8em; right: 69.4em; transform:rotate(-30deg);  -ms-transform:rotate(-30deg); -webkit-transform:rotate(-30deg); }
	#sunbed-57 { top: 82em; right: 65.4em; transform:rotate(-75deg);  -ms-transform:rotate(-75deg); -webkit-transform:rotate(-75deg); }
	#sunbed-56 { top: 82.6em; right: 63.3em; transform:rotate(-75deg);  -ms-transform:rotate(-75deg); -webkit-transform:rotate(-75deg); }
	
	#sunbed-11 { top: 24.9em; right: 21em; transform:rotate(-30deg);  -ms-transform:rotate(-30deg); -webkit-transform:rotate(-30deg); }
	#sunbed-111 { top: 23em; right: 22em; transform:rotate(-30deg);  -ms-transform:rotate(-30deg); -webkit-transform:rotate(-30deg); }
	#sunbed-110 { top: 26.9em; right: 25.4em; transform:rotate(-75deg);  -ms-transform:rotate(-75deg); -webkit-transform:rotate(-75deg); }
	#sunbed-109 { top: 26.3em; right: 27.5em; transform:rotate(-75deg);  -ms-transform:rotate(-75deg); -webkit-transform:rotate(-75deg); }
	#sunbed-87 { top: 24.9em; right: 70.5em; transform:rotate(30deg);  -ms-transform:rotate(30deg); -webkit-transform:rotate(30deg); }
	#sunbed-88 { top: 23em; right: 69.4em; transform:rotate(30deg);  -ms-transform:rotate(30deg); -webkit-transform:rotate(30deg); }
	#sunbed-89 { top: 26.9em; right: 65.4em; transform:rotate(75deg);  -ms-transform:rotate(75deg); -webkit-transform:rotate(75deg); }
	#sunbed-90 { top: 26.3em; right: 63.3em; transform:rotate(75deg);  -ms-transform:rotate(75deg); -webkit-transform:rotate(75deg); }
	
	.plan-div { position: relative; margin-left: -480px; width: 960px; left: 54.5%; }
	.plan-div .pool-schema { position: relative; }
	.plan-con { width:100%; overflow-x: auto; }
	.plan-con.pattern { background: url('../img/schema-pattern.jpg') repeat; padding: 3em 0 6em; margin: 0 0 3em; }
	.div-operation { margin: 0 0 3em 5em; }
	input[disabled], select[disabled], textarea[disabled], input[readonly], select[readonly], textarea[readonly] { cursor: default; margin: 0 1em 0 0.5em; }
</style>

