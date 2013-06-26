<div class="row">
	<div class="span9">
		<h2>Добавление мероприятия</h2>
		<?=form_open_multipart('admin/event/insert',array('id'=>'insert-event-form')); ?>
			<div class="control-group">
				<input type="text" name="title" class="span6 valid-required" value="" placeholder="Название" <?=TOOLTIP_FIELD_BLANK;?> />
				<input type="text" class="pull-right valid-required span3" name="date_begin" placeholder="Время начала" <?=TOOLTIP_FIELD_BLANK;?> value="">
				<input type="text" class="input-small valid-required" name="booking" placeholder="Стоимость" <?=TOOLTIP_FIELD_BLANK;?> value="">
				<input type="text" readonly="readonly" class="pull-right valid-required input-small datepicker" name="date" <?=TOOLTIP_FIELD_BLANK;?> value="<?=date("d.m.Y")?>">
			</div>
			<div class="clear"></div>
			<div class="control-group">
				<textarea rows="3" class="span9 valid-required" placeholder="Анонс" <?=TOOLTIP_FIELD_BLANK;?> name="announce"></textarea>
			</div>
			<div class="clear"></div>
			<label for="photo" class="control-label">Фотография: </label>
			<div class="controls">
				<input type="file" class="valid-required" autocomplete="off" name="photo" <?=TOOLTIP_FIELD_BLANK;?> size="52">
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
				<textarea rows="6" class="span9 ckeditor" name="content"></textarea>
			</div>
			<button type="submit" id="btn-submit-event" value="" name="submit" class="btn btn-primary btn-large btn-block">Создать мероприятие</button>
			<div class="wait-request hidden"></div>
		<?= form_close(); ?>
	</div>
</div>