<?php require_once "lib/templates.php"; ?>
<?php require_once "lib/search_engine.php"; ?>
<?php 
	$product = (isset($_GET['id'])) ? getByIdFromTempDB($_GET['id']) : null;
?>
<html>
<head>

	<link rel="stylesheet" href="style/bootstrap.min.css">
	<link rel="stylesheet" href="style/my-style.css">
	<link rel="stylesheet" href="style/colors.css">
	<link rel="stylesheet" href="style/jquery.bxslider.css">
	<link rel="stylesheet" href="style/shop-style.css">
	<meta charset="utf-8">

	<!-- Optional theme -->
	<link rel="stylesheet" href="style/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/my-script.js"></script>

</head>

<body>
<?php echo getHeaderTemplate(); 
	if(!$product) exit("FUCK YOU, RETARDED ANTON");
?>

<div class="row nav-margin-top50">
	<div class="small-line"><strong>Главная</strong></div><div class="black-box"><strong>Продукт</strong></div>
</div>

<div class="container">
<div class="col-lg-5 nav-margin-top">

	<div class="slider bottom-slider">
			<ul id="bottom-slider" >
				<li><img src="image/dress-new.jpg"></li>
				<li><img src="image/dress-new.jpg"></li>
				<li><img src="image/dress-new.jpg"></li>
				<li><img src="image/dress-new.jpg"></li>
			</ul>
			<div class="slider-selectors">
				<span id="bottom-slider-left"></span>
				<span id="bottom-slider-right"></span>
			</div>
			<div id="bottom-slider-pager">
			  <a data-slide-index="0" href=""><img src="image/dress-new.jpg"></a>
			  <a data-slide-index="1" href=""><img src="image/dress-new.jpg"></a>
				<a data-slide-index="2" href=""><img src="image/dress-new.jpg"></a>
			  <a data-slide-index="3" href=""><img src="image/dress-new.jpg"></a>
			</div>
		</div>

</div>
<div class="col-lg-7">
	<div class="name-of-product nav-margin-top50" >
		<?php echo $product['name'];?>
	</div>
	<div class="my-prise">
		<span class="main-color-text"><?php echo $product['price'];?> грн</span>
		<span class="old-prise left-mar"><?php echo $product['last_price'];?> грн</span>
		<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
		<p><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
		<p class="mylatotext nav-margin-top30">A diffusion line of Franco Moschino's iconic Italian design house, Love Moschino creates a playful and irreverent collection injected with a sense of youthful cool. </p>
	</div>
	<div class="row left-mar">
		<div class="dropdown float-left full-width nav-margin-top30 text-center">
		  <div class="row">
		  <div class="col-lg-4">
			   <div><img src="image/dress-new.jpg" height="200px"></div>
			   <span class="label categories nav-margin-top"><img src="image/white-color.png" class="float-left-my" > Белый</span>
			   <button onclick="myColorFunction()" class="dropbtn nav-margin-top">Размеры<img src="image/arrow.png" class="let-mar top-mar-min"></button>
			  <div id="myDropdown" class="dropdown-content">
			    <a href="#">Черный</a>
			    <a href="#">Желтый</a>
			    <a href="#">Голубой</a>
			  </div>
			</div>
			<div class="col-lg-4">
			   <div><img src="image/dress-new.jpg" height="200px"></div>
			   <span class="label categories nav-margin-top"><img src="image/red.png" class="float-left-my" > Красный</span>
			   <button onclick="myColorFunction()" class="dropbtn nav-margin-top">Размеры<img src="image/arrow.png" class="let-mar top-mar-min"></button>
			  <div id="myDropdown" class="dropdown-content">
			    <a href="#">Черный</a>
			    <a href="#">Желтый</a>
			    <a href="#">Голубой</a>
			  </div>
			</div>
			<div class="col-lg-4">
			   <div><img src="image/dress-new.jpg" height="200px"></div>
			   <span class="label categories nav-margin-top"><img src="image/black-color.png" class="float-left-my" >Чёрный</span>
			   <button onclick="myColorFunction()" class="dropbtn nav-margin-top">Размеры<img src="image/arrow.png" class="let-mar top-mar-min"></button>
			  <div id="myDropdown" class="dropdown-content">
			    <a href="#">Черный</a>
			    <a href="#">Желтый</a>
			    <a href="#">Голубой</a>
			  </div>
			</div>
			</div>
		</div>
	</div>
	<div class="row nav-margin-top30">
		<div class="but-popular accent-color nav-margin-top text-center \">
			<img src="image/bug-white.png"> В корзину
		</div>
		<div class="but-popular main-color nav-margin-top text-center let-mar-inf">
			<img src="image/like.png"> Like!
		</div>
		<div class="but-popular accent-color nav-margin-top text-center let-mar-inf">
			<img src="image/communication.png"> Оставить отзыв
		</div>
	</div>
	<img src="image/Product-Information.png" width="100%" class="nav-margin-top">
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