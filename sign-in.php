<?php require_once 'lib/templates.php';?>
<html>
<head>

	<link rel="stylesheet" href="style/bootstrap.min.css">
	<link rel="stylesheet" href="style/my-style.css">
	<link rel="stylesheet" href="style/shop-style.css">
	<link rel="stylesheet" href="style/colors.css">
	<link rel="stylesheet" href="style/sign-in-style.css">
	<meta charset="utf-8">
	<!-- Optional theme -->
	<link rel="stylesheet" href="style/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/my-script.js"></script>
</head>

<body>
<?php echo getHeaderTemplate(); ?>
<div class="row nav-margin-top50">
	<img src="image/Breadcrumbs-sign-in.png" width="100%">
</div>

<div class="container">
	<div class="col-lg-offset-3 col-lg-6 nav-margin-top50 sign-in-form">
		<!-- <img src="image/Sign-In-Form.png" width="100%"> -->
		<h3>ВОЙТИ</h3>
		<h5>Войти через ВКонтакте</h5>
		<div class="vk-logo">
			<img src="./image/vk-disabled.png">
		</div>
		<br>
		<div class="or-block">
			<div class="left hr"></div>
			<div>или</div>
			<div class="right hr"></div>
		</div>
		<h5>Введите свой адресс</h5>
		<form action="auth.php" method="post">
			<h5>Email</h5>
			<input type="email" name='email'>
			<br>
			<br>
			<h5>Пароль</h5>
			<input type="password" name='email'>
			<div class="submit-container">
				<button class="submit-btn">Войти</button>
			</div>
		</form>
		<h5><a href="reset-pass.php">Забыли пароль?</a></h5>
	</div>

</div>
<div class="footer">
<div class="container">
	<div class="col-lg-3">
		<img src="image/white.png" width="90%">
	</div>
	<div class="col-lg-2">
		<p class="main-color-text">Компания</p>
		<p class="footer-color"><span class="main-color-text">-</span> Про нас</p>
		<p class="footer-color"><span class="main-color-text">-</span> Свяжись с нами</p>
		<p class="footer-color"><span class="main-color-text">-</span> Вакансии</p>
		<p class="footer-color"><span class="main-color-text">-</span> Наши правила</p>
	</div>
	<div class="col-lg-2">
		<p class="main-color-text">Вопросы?</p>
		<p class="footer-color"><span class="main-color-text">-</span> Помощь</p>
		<p class="footer-color"><span class="main-color-text">-</span> Обратная свзять</p>
		<p class="footer-color"><span class="main-color-text">-</span> ЧаВо</p>
		<p class="footer-color"><span class="main-color-text">-</span> Важная информация</p>
	</div>
	<div class="col-lg-2">
		<p class="main-color-text">Полезные ссылки</p>
		<p class="footer-color"><span class="main-color-text">-</span> Приват 24</p>
		<p class="footer-color"><span class="main-color-text">-</span> ЧаВо</p>
		<p class="footer-color"><span class="main-color-text">-</span> Ваш Аккаунт</p>
		<p class="footer-color"><span class="main-color-text">-</span> Наша группа</p>
	</div>
	<div class="col-lg-3">
	<p class="main-color-text">Подпишись на обновления</p>
		<input type="text" name="signin"><div class="block main-color">></div></input>
	</div>
</div>
</div>


</body>

</html>
