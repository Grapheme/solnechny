<div class="row">
	<div class="span9">
		<h2>Редактирование мероприятия</h2>
		<?=form_open('admin/event/update',array('id'=>'update-event-form')); ?>
			<div class="control-group">
				<input type="text" name="title" class="span6 valid-required" value="<?=$event['title'];?>" placeholder="Название" <?=TOOLTIP_FIELD_BLANK;?> />
				<input type="text" class="pull-right span3 valid-required" name="date_begin" placeholder="Время начала" value="<?=$event['date_begin'];?>">
				<input type="text" class="input-small valid-required" name="booking" placeholder="Стоимость" value="<?=$event['booking'];?>">
				<input type="text" class="pull-right input-small datepicker" readonly="readonly" name="date" value="<?=$event['date'];?>">
			</div>
			<div class="clear"></div>
			<div class="control-group">
				<textarea rows="3" class="span9 valid-required" placeholder="Анонс" name="announce"><?=$event['announce'];?></textarea>
			</div>
			<div class="controls">
				<img class="destination-photo img-polaroid" width="200" src="<?=site_url('loadimage/events/'.$event['id']);?>" />
			</div>
			<div class="clear"></div>
			<label for="photo" class="control-label">Фотография: </label>
			<div class="controls">
				<input type="file" class="input-select-photo" autocomplete="off" id="input-event-photo" name="photo" size="36">
				<button id="upload-event-photo" class="btn btn-small btn-info btn-upload hidden" <?=TOOLTIP_FIELD_IMAGE_UPLOAD;?>><i class="icon-upload icon-white"></i> Загрузить</button>
				<p class="help-block">Поддерживаются форматы: JPG,PNG,GIF</p>
				<div class="clear"></div>
				<div id="div-upload-photo" class="bar-file-upload hidden">
					<div class="span6 progress progress-info progress-striped active">
						<div class="bar" style="width: 54%"></div>
					</div>
					<span id="upload-photo-status">Загрузка</span>
				</div>
			</div>
			<div class="clear"></div>
			<div class="control-group">
				<textarea rows="6" class="span9 ckeditor" name="content"><?=$event['content'];?></textarea>
			</div>
			<button type="submit" id="btn-submit-event" value="" name="submit" class="btn btn-primary btn-large btn-block">Сохранить</button>
			<div class="wait-request hidden"><img src="<?=site_url('img/loading.gif');?>" alt="" /></div>
		<?= form_close(); ?>
	</div>
</div>