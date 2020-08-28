<div class="container">
	<h2>Регистрация</h2>

	<!-- Сообщение -->
	<?php
	if(!empty($success_msg)){
		echo '<p class="status-msg success">'.$success_msg.'</p>';
	}elseif(!empty($error_msg)){
		echo '<p class="status-msg error">'.$error_msg.'</p>';
	}
	?>

	<!-- Форма регистрации -->
	<div class="regisFrm">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="text" name="first_name" placeholder="Имя" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
				<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="text" name="last_name" placeholder="Фамилия" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
				<?php echo form_error('last_name','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="email" name="email" placeholder="Почта" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
				<?php echo form_error('email','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Пароль" required>
				<?php echo form_error('password','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="password" name="conf_password" placeholder="Повторите пароль" required>
				<?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<label>Пол: </label>
				<?php
				if(!empty($user['gender']) && $user['gender'] == 'Женский'){
					$fcheck = 'checked="checked"';
					$mcheck = '';
				}else{
					$mcheck = 'checked="checked"';
					$fcheck = '';
				}
				?>
				<div class="radio">
					<label>
						<input type="radio" name="gender" value="Мужской" <?php echo $mcheck; ?>>
						Мужской
					</label>
					<label>
						<input type="radio" name="gender" value="Женский" <?php echo $fcheck; ?>>
						Женский
					</label>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="phone" placeholder="Номер телефона" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
				<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<label>Фото профиля:</label>
				<input class="form-control" type="file" name="picture" />
			</div>
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="Зарегистрироваться">
			</div>
		</form>
		<p>У вас есть аккаунт? <a href="login">Войдите!</a></p>
	</div>
</div>
