<html>
<head>

	<link rel="stylesheet" href="style/bootstrap.min.css">
	<link rel="stylesheet" href="style/my-style.css">
	<link rel="stylesheet" href="style/shop-style.css">
	<link rel="stylesheet" href="style/colors.css">
	<link rel="stylesheet" href="style/nouislider.min.css">
	<meta charset="utf-8">

	<!-- Optional theme -->
	<link rel="stylesheet" href="style/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/shop.js"></script>
	<script src="js/my-script.js"></script>

</head>
<body>
<div class="container">
	<div class="row my-small-text accent-text-color nav-margin-top bot-line nav-padding">

<div class="col-lg-2">
		<img src="image/black.png" width="85%">
</div>
	<div class="col-lg-10">
		
		<div class="col-lg-10">
			<div class="row">

				<img src="image/search.png" width="24px"> | <a href="my-order.php" class="but-nav-top accent-text-color"><strong>Моя корзина</strong></a><img src="image/shop_cart.png" width="20px">

				<span class="float-right text-right">
				<a href="sign-in.php" class="but-nav-top accent-text-color">Войти</a>
				<a href="#" class="but-nav-top accent-text-color dropmy" onclick="myMoneyFunction()">UAH</a>
				<div id="Money" class="dropdown-content ">
				    <a href="#">UAH 1грн=1грн</a>
				    <a href="#">USD 1грн=25дол.</a>
				    <a href="#">EUR 1грн=27евро</a>
				</div>
				<a href="#" class="but-nav-top accent-text-color dropmy " onclick="myLanguageFunction()"><img src="http://www.iconsearch.ru/ajax/download.php?icon_id=42915&size=1&format=ico"></a>
				<div id="Language" class="dropdown-content let-mar-prod-new">
				    <a href="#"><img src="http://www.iconsearch.ru/ajax/download.php?icon_id=42915&size=1&format=ico"> Русский</a>
				    <a href="#"><img src="http://abali.ru/wp-content/uploads/2010/12/united-states-flag-16x16.png"> English</a>
				    <a href="#"><img src="http://abali.ru/wp-content/uploads/2010/12/ukraine-flag-16x16.png"> Український</a>
				</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-lg-2">
	</div>
	<div class="col-lg-10">
		<div class="my-middle-text accent-text-color my-nav">
				<ul class="menu">
			    <li><a href="index.php" class="but-nav-top40 accent-text-color"><strong>Главная</strong></a>
			    </li>
			    <li><a href="shop.php" class="but-nav-top40 accent-text-color"><strong>Каталог</strong></a>
			    </li>
			    <li><a href="shop.php" class="but-nav-top40 accent-text-color"><strong>Сотрудничество</strong></a>
			    </li>
			    <li><a href="#" class="but-nav-top40 accent-text-color"><strong>Контакты</strong></a>
			        
			    </li>
    <li><a href="#" class="but-nav-top40 accent-text-color"><strong>Помощь</strong></a>
        <ul class="submenu main-color">
            <li><a href=#>Доставка</a></li>
            <li><a href=#>Оплата</a></li>
            <li><a href=#>Контакты</a></li>
            <li><a href=#>Выбрать размер</a></li>
            <li><a href=#>Частые вопросы</a></li>
            <li><a href=#>О нас</a></li>
            <li><a href=#>Скачать</a></li>
            <li><a href=#>Условия опта</a></li>
        </ul>
    </li>
    </ul>
				</div>
		</div>
	</div>
</div>
</div>
<div class="row nav-margin-top50">
	<div class="small-line"><strong>Главная</strong></div><div class="black-box"><strong>Каталог</strong></div>
</div>
<div class="container">
	<div class="row nav-margin-top50">
		<div class="col-lg-2">
			<div class="row bot-line">
				<p class="title-cotolog first-title"><strong>КАТЕГОРИИ</strong><img src="image/arrow-down.png" class="float-right-arrow" ></p>
			</div>
			<div class="row nav-margin-top">
				<p class="catalog-punkt"><strong>Все платья</strong></p>
			</div>
			<div class="row nav-margin-top">
				<p class="categories mar-left-30">Топ продаж</p>
				<p class="categories mar-left-30">Новинки</p>
				<p class="categories mar-left-30">Платья</p>
				<p class="categories mar-left-30">Костюмы</p>
				<p class="categories mar-left-30">Кофточки</p>
				<p class="categories mar-left-30">Маечки</p>
				<p class="categories mar-left-30">Комбинезоны</p>
				<p class="categories mar-left-30">Шортики</p>
				<p class="categories mar-left-30">Худи и толстовки</p>
				<p class="categories mar-left-30">Пиджаки кардиганы</p>
				<p class="categories mar-left-30">Рубашки блузы</p>
				<p class="categories mar-left-30">Верхняя одежда</p>
				<p class="categories mar-left-30">Брюки</p>
				<p class="categories mar-left-30">Леггинсы</p>
				<p class="categories mar-left-30">Юбки</p>
			</div>

			<div class="row bot-line nav-margin-top">
				<p class="title-cotolog"><strong>РАЗМЕР</strong><img src="image/arrow-down.png" class="float-right-arrow" ></p>
			</div>
			<div class="row nav-margin-top">
				<label>
				<p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories">XS</span>
				</label></p>
				<p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories">SM</span>
				</label></p><p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories">MED</span>
				</label></p><p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories">LG</span>
				</label></p><p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories">XL</span>
				</label></p><p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories">XXL</span>
				</label></p>
				<p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories">S/M</span>
				</label></p><p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories">M/L</span>
				</label></p>
			</div>

			<div class="row bot-line nav-margin-top">
				<p class="title-cotolog"><strong>ЦВЕТ</strong></p>
			</div>
			<div class="row nav-margin-top">
				<p class="categories"><label>
				<input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories"><img src="image/white-color.png" class="float-left-my" > Белый</span>
				</label></p>
				<p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories"><img src="image/grey.png" class="float-left-my" > Серый</span>
				</label></p><p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories"><img src="image/red.png" class="float-left-my" > Красный</span>
				</label></p><p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories"><img src="image/green.png" class="float-left-my" >Зелённый</span>
				</label></p><p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories"><img src="image/blue.png" class="float-left-my" >Синий</span>
				</label></p><p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories"><img src="image/brown.png" class="float-left-my">Коричневый</span>
				</label></p>
				<p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories"><img src="image/black-color.png" class="float-left-my" >Чёрный</span>
				</label></p><p class="categories"><input class="checkbox" type="checkbox" name="checkbox-test">
				    <span class="checkbox-custom"></span>
				    <span class="label categories"><img src="image/pink.png" class="float-left-my" >Розовый</span>
				</label></p>
			</div>
			<div class="row bot-line">
				<p class="title-cotolog"><strong>ЦЕНА</strong><img src="image/arrow-down.png" class="float-right-arrow" ></p>
			</div>
			<div id="slider" class="prise-slider"></div>
			<div class="row bot-line">
				<p class="title-cotolog"><strong>СОРТИРОВАТЬ</strong><img src="image/arrow-down.png" class="float-right-arrow" ></p>
			</div>
				<div class="row nav-margin-top">
				<button onclick="myFunction()" class="dropbtn">White  <img src="image/arrow.png" class="let-mar"></button>
				  <div id="myDropdown" class="dropdown-content">
				    <a href="#">Black</a>
				    <a href="#">Yellow</a>
				    <a href="#">Blue</a>
				  </div>
				  </div>


		</div>
		<div class="col-lg-10">
		<img src="image/pagination.png" width="100%" class="bot-line padding-bot">
		<div class="row">
			<img src="image/grid.png" class="nav-margin-top25 float-left-my"><img src="image/list.png" class="nav-margin-top25 let-mar-inf float-left-my">
			<a href="drop.php"><div class="but-popular accent-color nav-margin-top text-center float-right-arrow"> Дроп Шоппинг
			</div></a>
			<div class="but-popular main-color nav-margin-top text-center float-right-arrow"> Скачать каталог
			</div>

		</div>
<a href="product.php">
			<div class="row products">
				<div class="col-lg-6 proguct">
					<div class="placeholder">
						<div class="row">
							<div class="like"></div>
							<div class="bag"></div>
						</div>
					</div>

					<div class="product-info">
						<div class="name-of-product nav-margin-top50" >
							Bonded Strappy Doll Dress
						</div>
						<div class="my-prise">
							<span class="main-color-text">$79,99</span>
							<span class="old-prise left-mar">$89,00</span>
							<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
							<p class="info-icons"><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
						</div>
					</div>

				</div>
				</a>
				<a href="product.php">
				<div class="col-lg-6 proguct">
					<div class="placeholder">
						<div class="row">
							<div class="like"></div>
							<div class="bag"></div>
						</div>
					</div>

					<div class="product-info">
						<div class="name-of-product nav-margin-top50" >
							Bonded Strappy Doll Dress
						</div>
						<div class="my-prise">
							<span class="main-color-text">$79,99</span>
							<span class="old-prise left-mar">$89,00</span>
							<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
							<p class="info-icons"><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
						</div>
					</div>
				</div>
				</a>
			</div>

			<div class="row products">
				<div class="col-lg-6 proguct">
					<div class="placeholder">
						<div class="row">
							<div class="like"></div>
							<div class="bag"></div>
						</div>
					</div>

					<div class="product-info">
						<div class="name-of-product nav-margin-top50" >
							Bonded Strappy Doll Dress
						</div>
						<div class="my-prise">
							<span class="main-color-text">$79,99</span>
							<span class="old-prise left-mar">$89,00</span>
							<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
							<p class="info-icons"><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
						</div>
					</div>

				</div>
				</a>
				<a href="product.php">
				<div class="col-lg-6 proguct">
					<div class="placeholder">
						<div class="row">
							<div class="like"></div>
							<div class="bag"></div>
						</div>
					</div>

					<div class="product-info">
						<div class="name-of-product nav-margin-top50" >
							Bonded Strappy Doll Dress
						</div>
						<div class="my-prise">
							<span class="main-color-text">$79,99</span>
							<span class="old-prise left-mar">$89,00</span>
							<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
							<p class="info-icons"><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="row products">
				<div class="col-lg-6 proguct">
					<div class="placeholder">
						<div class="row">
							<div class="like"></div>
							<div class="bag"></div>
						</div>
					</div>

					<div class="product-info">
						<div class="name-of-product nav-margin-top50" >
							Bonded Strappy Doll Dress
						</div>
						<div class="my-prise">
							<span class="main-color-text">$79,99</span>
							<span class="old-prise left-mar">$89,00</span>
							<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
							<p class="info-icons"><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
						</div>
					</div>

				</div>
				</a>
				<a href="product.php">
				<div class="col-lg-6 proguct">
					<div class="placeholder">
						<div class="row">
							<div class="like"></div>
							<div class="bag"></div>
						</div>
					</div>

					<div class="product-info">
						<div class="name-of-product nav-margin-top50" >
							Bonded Strappy Doll Dress
						</div>
						<div class="my-prise">
							<span class="main-color-text">$79,99</span>
							<span class="old-prise left-mar">$89,00</span>
							<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
							<p class="info-icons"><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="row products">
				<div class="col-lg-6 proguct">
					<div class="placeholder">
						<div class="row">
							<div class="like"></div>
							<div class="bag"></div>
						</div>
					</div>

					<div class="product-info">
						<div class="name-of-product nav-margin-top50" >
							Bonded Strappy Doll Dress
						</div>
						<div class="my-prise">
							<span class="main-color-text">$79,99</span>
							<span class="old-prise left-mar">$89,00</span>
							<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
							<p class="info-icons"><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
						</div>
					</div>

				</div>
				</a>
				<a href="product.php">
				<div class="col-lg-6 proguct">
					<div class="placeholder">
						<div class="row">
							<div class="like"></div>
							<div class="bag"></div>
						</div>
					</div>

					<div class="product-info">
						<div class="name-of-product nav-margin-top50" >
							Bonded Strappy Doll Dress
						</div>
						<div class="my-prise">
							<span class="main-color-text">$79,99</span>
							<span class="old-prise left-mar">$89,00</span>
							<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
							<p class="info-icons"><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div class="row products">
				<div class="col-lg-6 proguct">
					<div class="placeholder">
						<div class="row">
							<div class="like"></div>
							<div class="bag"></div>
						</div>
					</div>

					<div class="product-info">
						<div class="name-of-product nav-margin-top50" >
							Bonded Strappy Doll Dress
						</div>
						<div class="my-prise">
							<span class="main-color-text">$79,99</span>
							<span class="old-prise left-mar">$89,00</span>
							<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
							<p class="info-icons"><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
						</div>
					</div>

				</div>
				</a>
				<a href="product.php">
				<div class="col-lg-6 proguct">
					<div class="placeholder">
						<div class="row">
							<div class="like"></div>
							<div class="bag"></div>
						</div>
					</div>

					<div class="product-info">
						<div class="name-of-product nav-margin-top50" >
							Bonded Strappy Doll Dress
						</div>
						<div class="my-prise">
							<span class="main-color-text">$79,99</span>
							<span class="old-prise left-mar">$89,00</span>
							<p><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/full-star.png"><img src="image/star.png"><img src="image/star.png"></p>
							<p class="info-icons"><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
						</div>
					</div>
				</div>
				</a>
			</div>
			</div>
		</a>
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


</body>

</html>

