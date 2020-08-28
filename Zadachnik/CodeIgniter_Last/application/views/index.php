<html>
<head>
	<meta charset="UTF-8">
	<style type="text/css">

		table{
			border: 1px solid #ccc;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<h1>Список задач</h1>
<table border="1" cellpadding="5">
	<tr>
		<th>Имя пользователя</th>
		<th>E-mail</th>
		<th>Текст задачи</th>
	</tr>
	<?php foreach ($list as $one): ?>
		<tr>
			<td><?php echo $one['id_User']; ?></td>
			<td><?php echo anchor('show_order' . $one['id'], $one['title']); ?></td>
			<td><?php echo $one['order_text']; ?></td>
			<td><?php echo anchor('main/del_order/' . $one['id'], 'Удалить'); ?></td>
			<td><?php echo anchor('edit_order' . $one['id'], 'Изменить'); ?></td>
		</tr>
	<?php endforeach ?>
</table>
<p><?php echo anchor('add_order', 'Добавить новые задачи'); ?></p>
</body>
</html>
