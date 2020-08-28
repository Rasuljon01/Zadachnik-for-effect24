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
<?php echo form_open('edit_order'.$id);?>
<label for="title">Имя пользователя</label>
<input type="text" name="username" id="username" value="<?php echo $id_User ?>">
<label for="title">E-mail</label>
<input type="text" name="title" id="title" value="<?php echo $title ?>">
<label for="order_text">Текст задачи</label>
<textarea type="text" name="order_text" id="order_text"><?php echo $order_text ?></textarea><br><br>
<input type="submit" value="Изменить">
<?php echo form_close();?>
<?php echo validation_errors();?>
