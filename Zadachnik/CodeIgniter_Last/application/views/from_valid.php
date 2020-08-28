<head>
	<meta charset="UTF-8">
	<style type="text/css">
		label{display: block;}
	</style>
</head>
<style>
	textarea {
		width: 50%;
		height: 200px;
		resize: none;
	}
</style>
<?php echo form_open('add_order');?>
<label for="title">Имя пользователя</label>
<input type="text" name="username" id="title" value="<?php echo set_value('title') ?>">
<label for="title">E-mail</label>
<input type="text" name="title" id="title" value="<?php echo set_value('title') ?>">
<label for="order_text">Текст задачи</label>
<textarea type="text" name="order_text" id="order_text" value="<?php echo set_value('order_text') ?>"></textarea><br><br>
<input type="submit" value="Создать">
<?php echo form_close();?>
<?php echo validation_errors();?>
