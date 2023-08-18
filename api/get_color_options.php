<?php
// Assume you have database connection and functions ready
require_once "../connection/ShoppingCart.php";

$shoppingCart = new ShoppingCart();
$compatibility = $_GET['compatibility'];
$code =  $_GET['code'];
$product_color_array = $shoppingCart->getProductAvailColorSpecification($code, $compatibility);

// Prepare an array to store color options
$colorOptions = array();

if (!empty($product_color_array)) {
    foreach ($product_color_array as $keyVariant => $productColor) {
        $colorOptions[] = array(
            'value' => $productColor['color'],
            'label' => $productColor['color']
        );
    }
}

// Return the color options as JSON
header('Content-Type: application/json');
echo json_encode($colorOptions);
?>