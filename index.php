<?php require_once "lib/templates.php"; ?>
<html>
<head>

	<link rel="stylesheet" href="style/bootstrap.min.css">
	<link rel="stylesheet" href="style/my-style.css">
	<link rel="stylesheet" href="style/colors.css">
	<link rel="stylesheet" href="style/jquery.bxslider.css">
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

<body onLoad="load()">

<?php echo getHeaderTemplate(); ?>

<div class="slider but-nav-top150">
	<ul id="top-slider">
		<li><img src="image/slider.jpg" height="100%" width="100%"></li>
		<li><img src="image/slider.jpg" height="100%" width="100%"></li>
		<li><img src="image/slider.jpg" height="100%" width="100%"></li>
		<li><img src="image/slider.jpg" height="100%" width="100%"></li>
	</ul>
	<div class="slider-selectors">
		<span id="top-slider-left"></span>
		<span id="top-slider-right"></span>
	</div>
</div>

<div class="container">
<div class="row nav-margin-top50">
	<div class="col-lg-4">
		<div class="block">
			<p class="block-big-text accent-text-color text-center">Новые платья</p>
			<p class="block-small-text main-color-text text-center">Купить</p>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="block">
			<p class="block-big-text accent-text-color text-center">Популярное</p>
			<p class="block-small-text main-color-text text-center">Купить</p>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="block">
			<p class="block-big-text accent-text-color text-center">Скидки</p>
			<p class="block-small-text main-color-text text-center">Купить</p>
		</div>
	</div>

</div>
</div>

<div class="container">
<div class="our-features nav-margin-top50">
<div class="my-tittle row text-center top-bot-line">
<div class="col-lg-5"></div>
	<div class="block-big-text accent-text-color text-center col-lg-1">Наши</div><div class="second-word text-center main-color-text col-lg-1">Особенности</div>
</div>
</div>
<div class="row">
<div class="col-lg-5">
	<div class="features-block nav-margin-top50">
	<p class="block-big-text accent-text-color">Быстрая доставка</p>
	<p class="myzigzag"><strong>/ \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ </strong></p>
	<p class="mylatotext">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
	</div>
</div>
<div class="col-lg-2">

</div>

<div class="col-lg-5">
	<div class="features-block nav-margin-top50">
	<p class="block-big-text accent-text-color">Качественные товары</p>
	<p class="myzigzag"><strong>/ \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ </strong></p>
	<p class="mylatotext">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
	</div>
</div>
</div>
<div class="row">
<div class="col-lg-3">

</div>
<div class="col-lg-6">
	<div class="features-block nav-margin-top50">
	<p class="block-big-text accent-text-color">Большой асортимент</p>
	<p class="myzigzag"><strong>/ \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ / \ </strong></p>
	<p class="mylatotext">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
	</div>
</div>
</div>
<div class="row">
<div class="col-lg-5">

</div>
<div class="col-lg-3">
	<div class="back-image">

	</div>
</div>
</div>
</div>

<div class="main-block">
<div class="container">
<div class="row">
	<div class="col-lg-3">

	<div class="block-big-text accent-text-color col-lg-1">Популярные товары</div>

	</div>
</div>
<div class="row">

	<ul class="flex-container">
		<li class="flex-item-slider">
		    <div class="carousel-container">
				<div id="carousel">
					<div class="slide"><img src="image/dress-new-mini.jpg" width="100%"></div>
					<div class="slide"><img src="image/dress-new-mini.jpg"></div>
					<div class="slide"><img src="image/dress-new-mini.jpg"></div>
					<div class="slide"><img src="image/dress-new-mini.jpg"></div>
					<div class="slide"><img src="image/dress-new-mini.jpg"></div>
					<div class="slide"><img src="image/dress-new-mini.jpg"></div>
					<div class="slide"><img src="image/dress-new-mini.jpg"></div>
					<div class="slide"><img src="image/dress-new-mini.jpg"></div>
				</div>
				<div class="carousel-controls">
					<span id="carousel-left"></span>
					<span id="carousel-right"></span>
				</div>
			</div>
		</li>
		<li class="flex-item-info">
		    <div class="name-of-product nav-margin-top50" >
				Bonded Strappy Doll Dress
			</div>
			<div class="my-prise">
				<span class="main-color-text">79,99 грн</span><span class="old-prise left-mar">89,00 грн</span>
				<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
				<p><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
				<p class="mylatotext nav-margin-top30">Диффузионная линия культового итальянского дома дизайна Франко Москино, Любовь Москино создает игривую и непочтительную коллекцию, строгую и в то же время с чувством юношеской прохлады. </p>
			</div>
				<div class="row left-mar">
					<div class="dropdown float-left full-width nav-margin-top30">
					<button onclick="myColorFunction()" class="dropbtn">Цвет  <img src="image/arrow.png" class="let-mar"></button>
					<div id="myDropdown" class="dropdown-content">
					    <a href="#">Черный</a>
					    <a href="#">Желтый</a>
					    <a href="#">Голубой</a>
					</div>
					</div>
					<div class="dropdown float-left full-width nav-margin-top">
					    <button onclick="mySizeFunction()" class="dropbtn">Размер <img src="image/arrow.png" class="let-mar"></button>
					<div id="Size" class="dropdown-content">
						<a href="#">Большой</a>
					    <a href="#">Средний</a>
					    <a href="#">Средний</a>
		         	</div>
				</div>
			</div>
			<div class="row nav-margin-top30">
				<div class="but-popular accent-color nav-margin-top text-center \">
					<img src="image/bug-white.png"> В Корзину
				</div>
				<div class="but-popular main-color nav-margin-top text-center let-mar-inf">
					<img src="image/like.png"> Like!
				</div>
			</div>
		</li>
		<li class="flex-item-info">
		    <div class="slider minus-margin bottom-slider">
			<ul id="bottom-slider" >
				<li><img src="image/dress-new.jpg" width="355px" height="385px"></li>
				<li><img src="image/dress-new.jpg" width="355px" height="385px"></li>
				<li><img src="image/dress-new.jpg" width="355px" height="385px"></li>
				<li><img src="image/dress-new.jpg" width="355px" height="385px"></li>
			</ul>
			<div class="slider-selectors">
				<span id="bottom-slider-left"></span>
				<span id="bottom-slider-right"></span>
			</div>
			<div id="bottom-slider-pager">
			  <a data-slide-index="0" href=""><img src="image/dress-new.jpg" width="355px" height="385px"></a>
			  <a data-slide-index="1" href=""><img src="image/dress-new.jpg" width="355px" height="385px"></a>
				<a data-slide-index="2" href=""><img src="image/dress-new.jpg" width="355px" height="385px"></a>
			  <a data-slide-index="3" href=""><img src="image/dress-new.jpg" width="355px" height="385px"></a>
			</div>
		</div>
		</li>
	</ul>
	
	
	<div class="col-lg-4">
		
		<!-- <img src="image/image.png" width="100%" class="minus-margin">
		<img src="image/mini-image.png" width="100%" class="margin-top"> -->
	</div>
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


<div id="modulBlock" class="devicesModal">
    	<div>
		    <h1>Choose device</h1>
		    <a href="#close" title="Закрыть" class="close">X</a>
		    <table class="table table-striped">
		        <tr class="head-table">
		            <th>number</th>
		            <th>id</th>
		            <th>name</th>
		            <th>type-device</th>
		        </tr>
			    <tr class="row-table" id="my-device-row7">
			        <td id="number">7</td>
			        <td id="id">12JK12498</td>
			        <td id="name">Meizu E3</td>
			        <td id="type-device">mobile</td>
			    </tr>
		    </table>
		    <a href="#close">
		      	<div class="check-ico"></div>
		    </a>
        </div>
    </div>



</body>

<script type="text/javascript">
	
function onLoad()
{
	evInd=0;
	var mainBut=document.getElementById('modulBlock');
	if(evInd==0){
		modulBlock.style.display = 'block';
		evInd=1;
	}else
	{
		
		modulBlock.style.display = 'none';
		evInd=0;
	}
}

</script>

</html>
