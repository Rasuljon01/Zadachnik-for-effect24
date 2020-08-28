<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<h1>Имя пользователя <?php echo $id_User; ?></h1>
<p>e-mail <?php echo $title; ?></p>
<p>Текст задачи: <?php echo $order_text; ?></p>
<p><?php echo anchor('list_orders', 'Назад'); ?></p>
</body>
</html>
