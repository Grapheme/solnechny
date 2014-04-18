<?php require_once(PATH_PAGE_VARIABLE);
if($this->uri->uri_string() == ''):
	$uri = 'home';
else:
	$uri = to_underscore($this->uri->uri_string());
endif;?>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?=(isset($head_variable[$uri]['title']))?$head_variable[$uri]['title']:'Личный кабинет';?></title>
<meta name="description" content="<?=(isset($head_variable[$uri]['description']))?$head_variable[$uri]['description']:'';?>" />
<meta name="viewport" content="width=device-width" />
<meta name="google-site-verification" content="4YfiNOC87LhIWmxWGRXDVdmjbPLVNbgP6tQ0RBxz4m4" />
<link rel="icon" type="image/png" href="<?=site_url('favicon.png');?>" />
<link rel="stylesheet" href="<?=site_url('css/normalize.css');?>" />
<link rel="stylesheet" href="<?=site_url('css/main.css');?>" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script src="<?=site_url('js/vendor/modernizr-2.6.2.min.js');?>"></script>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?87"></script>
<script type="text/javascript">VK.init({apiId:3538377,onlyWidgets:true});</script>