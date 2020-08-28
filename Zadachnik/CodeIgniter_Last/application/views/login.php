<div class="container">
	<h2>Авторизация</h2>


	<?php
	if(!empty($success_msg)){
		echo '<p class="status-msg success">'.$success_msg.'</p>';
	}elseif(!empty($error_msg)){
		echo '<p class="status-msg error">'.$error_msg.'</p>';
	}
	?>


	<div class="regisFrm">
		<form action="" method="post">
			<div class="form-group">
				<input type="email" name="email" placeholder="Почта" required="">
				<?php echo form_error('email','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Пароль" required="">
				<?php echo form_error('password','<p class="help-block">','</p>'); ?>
			</div>
			<div class="send-button">
				<input type="submit" class="btn btn-common" style="margin-top: 10px" name="loginSubmit" value="Войти">
			</div>
		</form>
		<p>Вы еще не с нами? <a href="registration">Зарегистрируйтесь</a></p>
	</div>
</div>
