<?php
	//require_once 'utils.php';

	define("TEMPLATES_DIR", dirname(__FILE__)."/templates/");

	function getTemplate($name, $search = false){
		if(!$search)
			return file_get_contents(TEMPLATES_DIR . $name . ".tpl");
		else{
			$text = file_get_contents(TEMPLATES_DIR . $name . ".tpl");
			foreach ($search as $key => $value) {
				$text = str_replace("<%{$key}%>", $value, $text);
			}
			return $text;
		}
	}
	function getHeaderTemplate(){
		return getTemplate('header', array('search_query' =>  @$_GET['query']));
	}
	function getCatalog($all_products = false){
		// print_var($all_products);
		if($all_products === false){
			include 'temp_db.php';
		}
		$products = getBalancedProducts($all_products);
		$text = "";
		for ($i = 0; $i < count($products); $i+=2) { 
			$text .= getCatalogPair(
				array(
					'first' => ($products[$i]) ? getCatalogProduct($products[$i]): "", 
					'second' => ($products[$i + 1]) ? getCatalogProduct($products[$i + 1]) : ""
					)
				);
		}
		
		return $text;
	}
	function getCatalogPair($array){
		return getTemplate('shop_product_pair', $array);
	}
	function getCatalogProduct($product){
		$product['stars'] = getStars($product['stars']);
		return getTemplate('shop_product', $product);
	}
	function getStars($num){
		$text = '';
		for ($i=0; $i < $num; $i++) { 
			$text .= getTemplate('shop_stars');
		}
		return $text;
	}
	function getBalancedProducts($products){
		if (!(count($products) % 2 == 0)){
			array_push($products, false);
			return $products;
		}
		return $products;
	}
?>