<div class="container">
	<div class="row my-small-text accent-text-color nav-margin-top bot-line nav-padding">
		<ul class="flex-container">
		    <li class="flex-item"><img src="image/Black.png" width="85%"></li>


		    <li class="flex-item-search">
			  	<form action="shop.php" method='get' id='top-search-form' name="search">	
					<input type="text" id="top-searchbox" name='query' value="<%search_query%>">
					<input type='image' src="image/search.png" id="topsearch-btn">
				</form>	|<a href="my-order.php" class="but-nav-top accent-text-color">
					<strong>Моя корзина</strong>
				</a>
				<img src="image/shop_cart.png" width="20px">
			</li>


		    <li class="flex-item-pass"></li>


		    <li class="flex-item-search">
			  	<span class="float-right text-right">
					<a href="sign-in.php" class="but-nav-top accent-text-color">Войти</a>
					<a href="#" class="but-nav-top accent-text-color dropmy" onclick="myMoneyFunction()">UAH</a>
					<div id="Money" class="dropdown-content ">
						<a href="#">UAH 1грн=1грн</a>
					    <a href="#">USD 1грн=25дол.</a>
					    <a href="#">EUR 1грн=27евро</a>
					</div>
					<a href="#" class="but-nav-top accent-text-color dropmy" onclick="myLanguageFunction()">
						<img src="http://www.iconsearch.ru/ajax/download.php?icon_id=42915&size=1&format=ico" onclick="myLanguageFunction()">
					</a>
					<div id="Language" class="dropdown-content let-mar-prod-new">
					    <a href="#"><img src="http://www.iconsearch.ru/ajax/download.php?icon_id=42915&size=1&format=ico"> Русский</a>
					    <a href="#"><img src="http://abali.ru/wp-content/uploads/2010/12/united-states-flag-16x16.png"> English</a>
					    <a href="#"><img src="http://abali.ru/wp-content/uploads/2010/12/ukraine-flag-16x16.png"> Український</a>
					</div>
				</span>
		    </li>


		    <li class="flex-item-bot-menu">
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
			</li>
		</ul>
	</div>
</div>