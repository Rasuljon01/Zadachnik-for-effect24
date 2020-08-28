<div class="container">
	<h2>Вы вошли как: <?php echo $user['first_name']; ?>!</h2>
	<a href="logout" class="btn btn-common" style="margin-top: 10px">Выйти</a>
	<div class="regisFrm">
		<p><b>Имя: </b><?php echo $user['first_name'].' '.$user['last_name']; ?></p>
		<p><b>Эл. почта: </b><?php echo $user['email']; ?></p>
		<p><b>Телефон: </b><?php echo $user['phone']; ?></p>
		<p><b>Пол: </b><?php echo $user['gender']; ?></p>
		<p><b>Фото профиля:</b></p><br>
		<img src="uploads/images/<?=$user['picture'] ?>">
	</div>
</div>
