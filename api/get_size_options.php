<?php
// Assume you have database connection and functions ready
require_once "../connection/ShoppingCart.php";

$shoppingCart = new ShoppingCart();
$compatibility = $_GET['compatibility'];
$code =  $_GET['code'];
$product_size_array = $shoppingCart->getProductAvailSizeSpecification($code, $compatibility);

// Prepare an array to store color options
$sizeOptions = array();

if (!empty($product_size_array)) {
    foreach ($product_size_array as $keyVariant => $productSize) {
        $sizeOptions[] = array(
            'value' => $productSize['size'],
            'label' => $productSize['size']
        );
    }
}

// Return the color options as JSON
header('Content-Type: application/json');
echo json_encode($sizeOptions);
?>