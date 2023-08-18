<?php
// Assume you have database connection and functions ready
// require_once "../connection/ShoppingCart.php";

// $shoppingCart = new ShoppingCart();

// $product_id = 1;
// $compatibility = 'IPHONE 13 PRO MAX';
//  $color =  'Iridescent';
// // $color =  'Green';
// $size = '6.1';
// $amount = '325.00';
// $quantity = 20;
// $code =  'J2W1';
// $member_id = 2;

// $product_image = $shoppingCart->getProductVariantImage($code);
// // $code = "i3285411922-s16606952933";
// var_dump($productResult)
// echo '<br />';
// $cartResult = $shoppingCart->getCartItemByProduct($product_id, $code, $compatibility, $size, $color,  $member_id);
//  print_r($cartResult);
//  echo '<br />';

//  if(!empty($cartResult)){
//     if($cartResult > 0){
//         echo 'Match <br />';
//         $newQuantity = $cartResult[0]["quantity"] + $quantity;
//         // function updateCartQuantity($quantity, $product_id, $cart_id, $code, $compatibility, $size, $color, $member_id)
//         $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]["product_id"], $cartResult[0]["id"], 
//         $cartResult[0]["code"],$cartResult[0]["compatibility"], $cartResult[0]["size"],$cartResult[0]["color"],$cartResult[0]["member_id"]);
//     }else{
//         echo 'Quite a Match <br />';
//         // addToCart($product_id, $quantity, $code, $compatibility, $size, $color, $member_id)
//         $shoppingCart->addToCart($productResult[0]["id"], $_POST["quantity"], $productResult[0]["vcode"], $productResult[0]["compatibility"], $productResult[0]["size"], $productResult[0]["color"], $member_id);    
//     }

// } else {
//     echo 'No Match <br />';
//     // Add to cart table
//     $shoppingCart->addToCart($productResult[0]["id"], $quantity, $productResult[0]["code"], $productResult[0]["compatibility"], $productResult[0]["size"], $productResult[0]["color"], $member_id); 
// }
// $member_id = 2;

// $cartItem = $shoppingCart->getMemberCartItem($member_id);
// echo $item_to_purchase = count($cartItem);

// if (!empty($productResult)) {
//     // Access product details
//     $productName = $productResult[0]["name"];
//     $productSize = $productResult[0]["size"];
//     $productColor = $productResult[0]["color"];
//     // ... and so on
// } else {
//     echo 'Hello';
//     // Product not found
// }

// $shoppingCart = new ShoppingCart();
// $code =  $_GET['code'];
// $product_info_array = $shoppingCart->getProductByCode($code);

// // Prepare an array to store color options
// $productInformation = array();

// if (!empty($product_info_array)) {
//     foreach ($product_info_array as $keyVariant => $productInfo) {
//         $productInformation[] = array(
//             'Id' => $productInfo['id'],
//             'Name' => $productInfo['name'],
//             'Code' => $productInfo['code'],
//             'Size' => $productInfo['size'],
//             'Color' => $productInfo['color'],
//             'Vcode' => $productInfo['vcode'],
//             'Compatibility' => $productInfo['compatibility'],
//             'Price' => $productInfo['price'],
//             'Image' => $productInfo['image']


//         );
//     }
// }
// // http://localhost/JUAN2/TEMPLATE/api/get_product_info.php?compatibility=IPHONE%2011&code=J2W24&size=6.1&price=310.00
// // Return the color options as JSON
// header('Content-Type: application/json');
// echo json_encode($productInformation);


?>


<?php

// $url = "https://lbcapigateway.lbcapps.com/prod/prodv1/api/CODCOP/CalculatePriceV2";
// $curl = curl_init($url);

// curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// # Request headers
// $headers = array(
//     'token: 257283ec43071ac87fcba53314f30c7727011eb93c04aa8e04aec92fc7448ad436bf68dfcef01b27aa971806233df0f4d76645eef61e6a0c1d4735ffe6c5fdf2',
//     'Content-Type: application/json',
//     'Cache-Control: no-cache',);
// curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// # Request body
// $request_body = '{
//     "OriginCityId": "1",
//     "DestinationCityId": "1",
//     "IdProduct": "1",
//     "IdServiceType": "1",
//     "Weight": "1",
//     "DeclaredValue": "1",
//     "SoShopTier": "Basic"
// }';
// curl_setopt($curl, CURLOPT_POSTFIELDS, $request_body);

// $resp = curl_exec($curl);
// curl_close($curl);
// var_dump($resp);
require_once "../connection/ShoppingCart.php";
$member_id = 2;
$shoppingCart = new ShoppingCart();

$username = 'revcoreitsolution@gmail.com'; 
$password = md5('admin'); 
$code = rand(6666,9999); 
$status = 'INVALID';

$shoppingCart->registerUser($username, $password, $code, $status);

// $item_quantity = 0;
// $item_price = 0;
// $item_to_purchase = 0;

//     if (! empty($cartItem)) {
//         $item_to_purchase = count($cartItem);
//         foreach ($cartItem as $item) {
//             $item_quantity = $item_quantity + $item["quantity"];
//             $item_price = $item_price + ($item["price"] * $item["quantity"]);
//         }
//     }

// if (! empty($_GET["action"])) {
// switch ($_GET["action"]) {

//         case "proceed":

//         $name = 'Gerald Mico Facistol';
//         $phone = '0916653189';
//         $email = 'Tricore012@gmail.com';
//         $region = 'Region XIII (Caraga)';
//         $province = 'Agusan Del Sur';
//         $city = 'Santa Josefa';
//         $barangay = 'Angas';
//         $street_address = '10 U206 TARRAVILLE SUBDIVISION';

//         if (!empty($name) && !empty($phone) && !empty($email) && !empty($region) && !empty($province) && !empty($city) && !empty($barangay) && !empty($street_address)) {
//             // Able to insert into database
//             $order = $shoppingCart->insertOrder($member_id, $item_price, $name, $phone, $email, $region, $province, $city, $barangay, $street_address);

//             if (!empty($order)) {
//                 foreach ($cartItem as $item) {
//                     $shoppingCart->insertOrderItem($order, $item["id"], $item["code"], $item["compatibility"], $item["size"], $item["color"], $item["price"], $item["quantity"]);
//                 }
//             }
//         }
//        break;
//    }
// }
?>