<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("admin_interface/includes/head");?>
<link href="<?=site_url('css/main.css');?>" rel="stylesheet" />
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
						<li class="active">Бронирование лежаков</li>
					</ul>
				</div>
			</div>
			<div class="plan-con pattern">
				<div class="div-operation">
					<button class="btn btn-medium set-free-sunbeds-statuses">Освободить лежаки</button>
					<button class="btn btn-medium set-engaged-sunbeds-statuses">Занять лежаки</button><br/>
					Выбирите дату: 
					<input type="text" class="input-small datepicker" readonly="readonly" name="date" value="<?=($this->input->get('date') != FALSE)?$this->input->get('date'):date("d.m.Y");?>">
				</div>
				<div class="server-response"></div>
				<div class="wait-request hidden"></div>
				<div class="plan-div pool-schema">
					<div class="sunbed" id="sunbed-16">16</div>
					<div class="sunbed" id="sunbed-17">17</div>
					<div class="sunbed" id="sunbed-18">18</div>
					<div class="sunbed" id="sunbed-19">19</div>
					<img class="plan-photo schema" src="<?=site_url('img/schema.png');?>" alt="">
				</div>
			</div>
		</div>
		<div id="push"></div>
	</div>
	<?php $this->load->view("admin_interface/includes/footer");?>
	<?php $this->load->view("admin_interface/includes/scripts");?>
	
	<script type="text/javascript" src="<?=site_url('js/bron.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.core.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.datepicker-ru.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.widget.js');?>"></script>
	<script type="text/javascript" src="<?=site_url('js/datepicker/jquery.ui.datepicker.js');?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("input.datepicker").datepicker({
				minDate: "31.05.2013",
				maxDate: '+1D',
				onClose:function(){mt.redirect(mt.baseURL+'admin/booking?date='+$("input.datepicker").val())}
			});
		});
	</script>
</body>
</html>