<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("admin_interface/includes/head");?>
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
						<li class="active">Мероприятия</li>
					</ul>
					<a href="<?=site_url('admin/events/add')?>" class="btn btn-medium btn-info">Добавить мероприятие</a>
				<?php if($events):?>
					<table class="table table-hover">
						<thead>
							<tr>
								<th class="span1">&nbsp;</th>
								<th class="span4">Название</th>
								<th class="span1">Архив</th>
								<th class="span1">Дата</th>
								<th class="span2"></th>
							</tr>
						</thead>
						<tbody>
						<?php for($i=0;$i<count($events);$i++):?>
							<tr>
								<td>
									<img class="img-polaroid" width="80" src="<?=site_url('loadimage/events/'.$events[$i]['id']);?>" />
								</td>
								<td><?=$events[$i]['title'];?></td>
								<td><?=getStatus($events[$i]['id'],$events[$i]['arhive']);?></td>
								<td><?=swap_dot_date_without_time($events[$i]['date']);?></td>
								<td>
									<a href="<?=site_url(ADMIN_START_PAGE.'/edit/'.$events[$i]['id'])?>" class="btn">Редак.</a>
									<a href="<?=site_url(ADMIN_START_PAGE.'/delete/'.$events[$i]['id'])?>" class="btn btn-inverse disabled none">Удал.</a>
								</td>
							</tr>
						<?php endfor;?>
						</tbody>
					</table>
					<?=$pagination;?>
				<?php else:?>
					<h3>Список пуст</h3>
				<?php endif;?>
				</div>
			</div>
		</div>
		<div id="push"></div>
	</div>
	<?php $this->load->view("admin_interface/includes/footer");?>
	<?php $this->load->view("admin_interface/includes/scripts");?>
</body>
</html>