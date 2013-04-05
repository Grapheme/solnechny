<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("admin_interface/includes/head");?>
<link rel="stylesheet" href="<?=site_url('css/jquery-ui/jquery.ui.all.css');?>" />
</head>
<body>
	<div id="wrap">
		<?php $this->load->view("admin_interface/includes/header");?>
		<div class="container">
			<div class="row">
				<?php $this->load->view("admin_interface/includes/sidebar");?>
				<div class="span9">
					<ul class="breadcrumb">
						<li><a class="none muted" href="<?=site_url(uri_string());?>">Панель администрирования</a> <span class="divider">/</span></li>
						<li><a href="<?=site_url(ADMIN_START_PAGE);?>">Мероприятия</a> <span class="divider">/</span></li>
						<li class="active">Добавление</li>
					</ul>
					<div id="div-insert-item">
					<?=$this->load->view('admin_interface/forms/insert-event')?>
					</div>
					<div id="form-request"></div>
				</div>
			</div>
		</div>
		<div id="push"></div>
	</div>
	<?php $this->load->view("admin_interface/includes/footer");?>
	<?php $this->load->view("admin_interface/includes/scripts");?>
	<script type="text/javascript" src="<?=site_url('ckeditor/ckeditor.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.core.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.datepicker-ru.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.widget.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.datepicker.js');?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){$(".datepicker").datepicker($.datepicker.regional['ru']);});
	</script>
</body>
</html>