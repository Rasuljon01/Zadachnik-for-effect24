<header id="header">
	<div class="navbar navbar-inverse" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="main">
					<h1><img src="images/logo.png" alt="logo"></h1>
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="main">Главная</a></li>
					<li><a href="about">О Компании</a></li>
					<li><a href="portfolio">Редактирование задач </a></li>
					<li><a href="add_order">Создать задачу</a></li>
					<?php
					if ($this->isUserLoggedIn){
						echo "					<li class=\"active\"><a href=\"profile\">Аккаунт</a></li>
					<a href=\"logout\" class=\"btn btn-common\" style=\"margin-top: 10px\">Выйти</a>
					";
					}
					else{
						echo "<a href=\"login\" class=\"btn btn-common\" style=\"margin-top: 10px\">Войти</a>";
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</header>
