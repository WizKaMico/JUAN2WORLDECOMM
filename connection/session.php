<?php
require_once "connection/ShoppingCart.php";

$member_id = 1; // you can your integerate authentication module here to get logged in member


$shoppingCart = new ShoppingCart();

if(!empty($_GET['code'])){
    $code = $_GET['code'];
    $productResultPrimary = $shoppingCart->getProduct($code);
    $productResult =  $shoppingCart->getProductVariantDetails($code);
    $pid = $productResultPrimary[0]["id"];
    $category = $productResultPrimary[0]["category"];
    $product_comment =  $shoppingCart->getCommentCreated($pid);
    $product_related =  $shoppingCart->getAllCategoryProduct($category);
    
}

$cartItem = $shoppingCart->getMemberCartItem($member_id);

$item_quantity = 0;
$item_price = 0;
$item_to_purchase = 0;

    if (! empty($cartItem)) {
        $item_to_purchase = count($cartItem);
        foreach ($cartItem as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            $item_price = $item_price + ($item["price"] * $item["quantity"]);
        }
    }



if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {
           
                $productResult = $shoppingCart->getProductByCode($_GET["code"],$_POST["size"],$_POST["compatibility"],$_POST["color"]);

                $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["id"],$productResult[0]["code"],$productResult[0]["compatibility"],$productResult[0]["size"], $productResult[0]["color"], $member_id);

                if (!empty($cartResult)) {

                    if($cartResult > 0){
                    // Update cart item quantity in database
                    $newQuantity = $cartResult[0]["quantity"] + $_POST["quantity"];
                    // Array ( [0] => Array ( [id] => 1 [product_id] => 1 [quantity] => 11 [code] => i3285536515-s16607486967 [compatibility] => IPHONE 13 PRO [size] => 6.1 
                    // [color] => Green [member_id] => 2 ) ) Hello

                    $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]['product_id'], $cartResult[0]["id"], $cartResult[0]["code"], $cartResult[0]['compatibility'], $cartResult[0]['size'], $cartResult[0]['color'], $member_id);
                    } else {
                    $shoppingCart->addToCart($productResult[0]["id"], $_POST["quantity"], $productResult[0]["code"], $_POST['compatibility'], $_POST['size'], $_POST['color'], $member_id);    
                    }
               
                } else {
                    // Add to cart table
                    $shoppingCart->addToCart($productResult[0]["id"], $_POST["quantity"], $productResult[0]["code"], $_POST['compatibility'], $_POST['size'], $_POST['color'], $member_id);
                }

            }
            break;
        case "remove":
            // Delete single entry from the cart
            $shoppingCart->deleteCartItem($_GET["id"]);
            break;
        case "empty":
            // Empty cart
            $shoppingCart->emptyCart($member_id);
            break;

        case "proceed":
               if(isset($_POST['proceed_payment'])){
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $region = $_POST['region_text'];
                    $province = $_POST['province_text'];
                    $city = $_POST['city_text'];
                    $barangay = $_POST['barangay_text'];
                    $street_address = $_POST['street_address'];
                    $payment_type = $_POST['payment_type'];
                    $order = 0;
                    if (!empty($name) && !empty($phone) && !empty($email) && !empty($region) && !empty($province) && !empty($city) && !empty($barangay) && !empty($street_address)  && !empty($payment_type)) {
                        // Able to insert into database
                        $order = $shoppingCart->insertOrder($member_id, $item_price, $name, $phone, $email, $region, $province, $city, $barangay, $street_address, $payment_type);
            
                        if (!empty($order)) {
                            foreach ($cartItem as $item) {
                                $shoppingCart->insertOrderItem($order, $item["id"], $item["code"], $item["compatibility"], $item["size"], $item["color"], $item["price"], $item["quantity"]);
                            }

                        }
                    }
                }
                
             break;

        case "comment":
            if(isset($_POST['proceed_comment'])){
              $pid = $_POST['pid']; 
              $comment = $_POST['comment']; 
              $email = $_POST['email']; 
              $name = $_POST['name']; 
              $rating = $_POST['rating'];

              if (!empty($pid) && !empty($comment) && !empty($email)  && !empty($rating)) {

                $shoppingCart->addComment($pid, $rating, $comment, $email, $name);

              }
            }
            break;

         case "register":
            if(isset($_POST['register'])){
                 $username = $_POST['email']; 
                 $password = md5($_POST['password']);
                 $code = rand(6666,9999);
                 $status = 'INVALID';


                 if (!empty($username) && !empty($password) && !empty($code) && !empty($status)) {
                 $userExist = $shoppingCart->validateExistence($username);
                 if(!empty($userExist)){
                 $username = $userExist[0]["email"]; 

                 header('Location: api/mailsend/register.php?username='.$username.'&password='.$password.'&code='.$code);
                 }else{
                 $shoppingCart->registerUser($username, $password, $code, $status);
                 header('Location: api/mailsend/register.php?username='.$username.'&password='.$password.'&code='.$code);
                 }
               }
            }
            break;
            
    }
}




?>