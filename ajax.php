<?php
	require_once 'lib/models/product.php';
    header('content-type: text/javascript');
    
    echo json_encode(Product::getSomeProducts());
?>