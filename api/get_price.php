<?php
// Assume you have database connection and functions ready
require_once "../connection/ShoppingCart.php";

$shoppingCart = new ShoppingCart();
$compatibility = $_GET['compatibility'];
$code = $_GET['code'];
$size = $_GET['size']; 
$color = $_GET['color'];
$product_price = $shoppingCart->getProductPriceSpecification($code, $compatibility, $size, $color);

$priceOptions = array();

if (!empty($product_price)) {
    foreach ($product_price as $keyVariant => $productPrice) {
        // Make sure the price is stored as a numeric value
        $price = floatval($productPrice['price']);

        // Add price to the options array
        $priceOptions[] = array(
            'price' => $price
        );
    }
}

// Return the price options as JSON
header('Content-Type: application/json');
echo json_encode($priceOptions);

?>