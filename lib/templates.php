<?php
	define("TEMPLATES_DIR", dirname(__FILE__)."/templates/");

	function getTemplate($name){
		return file_get_contents(TEMPLATES_DIR . $name . ".tpl");
	}
	function getHeaderTemplate(){
		return getTemplate('header');
	}
?>