<?php
// Assume you have database connection and functions ready
require_once "../connection/ShoppingCart.php";

$shoppingCart = new ShoppingCart();
$compatibility = $_GET['compatibility'];
$code =  $_GET['code'];
$size = $_GET['size'];
$price = $_GET['price'];
$product_info_array = $shoppingCart->productWholeInfoReveal($code, $compatibility, $size, $price);

// Prepare an array to store color options
$productInformation = array();

if (!empty($product_info_array)) {
    foreach ($product_info_array as $keyVariant => $productInfo) {
        $productInformation[] = array(
            'Osvku' => $productInfo['vcode']
        );
    }
}
// http://localhost/JUAN2/TEMPLATE/api/get_product_info.php?compatibility=IPHONE%2011&code=J2W24&size=6.1&price=310.00
// Return the color options as JSON
header('Content-Type: application/json');
echo json_encode($productInformation);
?>