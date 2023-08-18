<?php
require_once "DBController.php";

class ShoppingCart extends DBController
{

    function getAllProduct()
    {
        $query = "SELECT TP.id, TP.name, TP.code, MIN(TPIP.price)  AS price, TPIP.image, TP.category
        FROM tbl_product TP
        LEFT JOIN tbl_product_info TPI ON TP.id = TPI.pid
        LEFT JOIN tbl_product_info_price TPIP ON TPI.vcode = TPIP.vcode
        GROUP BY TP.id, TP.name";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }


    function getAllCategoryProduct($category) 
    {
        $query = "SELECT TP.id, TP.name, TP.code, MIN(TPIP.price)  AS price, TPIP.image, TP.category
        FROM tbl_product TP
        LEFT JOIN tbl_product_info TPI ON TP.id = TPI.pid
        LEFT JOIN tbl_product_info_price TPIP ON TPI.vcode = TPIP.vcode WHERE TP.category = ?
        GROUP BY TP.id, TP.name";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $category
            )
        );

        $productVariantImage = $this->getDBResult($query, $params);
        return $productVariantImage;
    }



    function getGroupCategory()
    {
        $query = "SELECT category FROM tbl_product GROUP BY category";
        
        $productCategory = $this->getDBResult($query);
        return $productCategory;
    }


    function getProductVariantImage($code)
    {
        $query = "SELECT TP.code, TPIP.image FROM tbl_product TP LEFT JOIN tbl_product_info TPI ON TP.id = TPI.pid LEFT JOIN tbl_product_info_price TPIP ON TPI.vcode = TPIP.vcode WHERE TP.code = ? LIMIT 5";
        
  

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $code
            )
        );
        
        $productVariantImage = $this->getDBResult($query, $params);
        return $productVariantImage;
    }

    
    function getProduct($code)
    {
        $query = "SELECT * FROM tbl_product WHERE code = ?";
        
  

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $code
            )
        );
        
        $productDetails = $this->getDBResult($query, $params);
        return $productDetails;
    }

    function getProductVariantDetails($code)
    {
        $query = "SELECT TP.name,TP.category,TPI.color,TPI.size,TPI.compatibility,TPIP.price,TPIP.image,TPI.vcode FROM tbl_product TP LEFT JOIN tbl_product_info TPI ON TP.id = TPI.pid LEFT JOIN tbl_product_info_price TPIP ON TPI.vcode = TPIP.vcode  WHERE TP.code  = ?";
        
  

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $code
            )
        );
        
        $productDetails = $this->getDBResult($query, $params);
        return $productDetails;
    }


    function getProductCompatibilitySpecification($code)
    {
        $query = "SELECT TP.code, TPI.compatibility
        FROM tbl_product TP LEFT JOIN tbl_product_info TPI ON TP.id = TPI.pid LEFT JOIN tbl_product_info_price TPIP ON TPI.vcode = TPIP.vcode WHERE TP.code = ? GROUP BY TPI.compatibility";
  

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $code
            )
        );
        
        $productVarianSpecificationCompatibility = $this->getDBResult($query, $params);
        return $productVarianSpecificationCompatibility;
    }

    

    function getProductAvailSizeSpecification($code, $compatibility)
    {
        $query = "SELECT TP.code, TPI.size, TPIP.price
        FROM tbl_product TP LEFT JOIN tbl_product_info TPI ON TP.id = TPI.pid LEFT JOIN tbl_product_info_price TPIP ON TPI.vcode = TPIP.vcode WHERE TP.code = ? AND TPI.compatibility = ? GROUP BY TPI.size";
  

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => $compatibility
            )
        );
        
        $productVarianSpecificationSize = $this->getDBResult($query, $params);
        return $productVarianSpecificationSize;
    }


    
    function getProductAvailColorSpecification($code, $compatibility)
    {
        $query = "SELECT TP.code, TPI.color
        FROM tbl_product TP LEFT JOIN tbl_product_info TPI ON TP.id = TPI.pid LEFT JOIN tbl_product_info_price TPIP ON TPI.vcode = TPIP.vcode WHERE TP.code = ? AND TPI.compatibility = ? GROUP BY TPI.color";
  

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => $compatibility
            )
        );
        
        $productVarianSpecificationColor = $this->getDBResult($query, $params);
        return $productVarianSpecificationColor;
    }

    function getProductPriceSpecification($code, $compatibility, $size, $color)
    {
        $query = "SELECT TP.code, TPIP.price
        FROM tbl_product TP LEFT JOIN tbl_product_info TPI ON TP.id = TPI.pid LEFT JOIN tbl_product_info_price TPIP ON TPI.vcode = TPIP.vcode WHERE TP.code = ? AND TPI.compatibility = ? AND TPI.size = ? AND TPI.color = ? GROUP BY TPIP.price";
  

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => $compatibility
            ),
            array(
                "param_type" => "s",
                "param_value" => $size
            ),
            array(
                "param_type" => "s",
                "param_value" => $color
            )
        );
        
        $productVarianPrice = $this->getDBResult($query, $params);
        return $productVarianPrice;
    }

    function productWholeInfoReveal($code, $compatibility, $size, $price)
    {
        $query = "SELECT * FROM tbl_product TP 
        LEFT JOIN tbl_product_info TPI ON TP.id = TPI.pid 
        LEFT JOIN tbl_product_info_price TPIP ON TPI.vcode = TPIP.vcode
        WHERE TP.code = ? AND TPI.compatibility = ? AND TPI.size = ? AND TPIP.price = ?";
  

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => $compatibility
            ),
            array(
                "param_type" => "s",
                "param_value" => $size
            ),
            array(
                "param_type" => "s",
                "param_value" => $price
            )
        );
        
        $productWholeInfo = $this->getDBResult($query, $params);
        return $productWholeInfo;
    }


  
    function getMemberCartItem($member_id)
    {
        $query = "SELECT TP.id, TP.name,TP.code,TPI.vcode,TPI.size,TPI.compatibility,TPI.color,TPIP.price,TPIP.image,TC.id as cart_id, TC.quantity,TC.member_id FROM tbl_product TP,tbl_product_info TPI,tbl_product_info_price TPIP,tbl_cart TC WHERE TP.id = TPI.pid AND TPI.vcode = TPIP.vcode AND TP.code = TC.code AND TC.color = TPI.color AND TC.size = TPI.size AND TC.member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function getProductByCode($code, $size, $compatibility, $color)
    {
        $query = "SELECT TP.id,TP.name,TP.code,TPI.size,TPI.color,TPI.vcode,TPI.compatibility,TPIP.price,TPIP.image FROM tbl_product TP LEFT JOIN tbl_product_info TPI ON TP.id = TPI.pid LEFT JOIN tbl_product_info_price TPIP ON TPI.vcode = TPIP.vcode
         WHERE TP.code = ? AND TPI.size = ? AND TPI.compatibility = ? AND TPI.color = ?";
        
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => $size
            ),
            array(
                "param_type" => "s",
                "param_value" => $compatibility
            ),
            array(
                "param_type" => "s",
                "param_value" => $color
            )
        );
        
        $productResult = $this->getDBResult($query, $params);
        return $productResult;
    }

    function getCartItemByProduct($product_id, $code, $compatibility, $size, $color,  $member_id)
    {
        $query = "SELECT * FROM tbl_cart WHERE product_id = ? AND code = ? AND compatibility = ? AND size = ? AND color =  ? AND member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "s",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => $compatibility
            ),
            array(
                "param_type" => "s",
                "param_value" => $size
            ),
            array(
                "param_type" => "s",
                "param_value" => $color
            ),
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function addComment($pid, $rating, $comment, $email, $name)
    {
        $query = "INSERT INTO tbl_product_comment (pid,rating, comment,email,name,date_commented) VALUES (?, ?, ?, ?, ?, ?)";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $pid
            ),
            array(
                "param_type" => "i",
                "param_value" => $rating
            ),
            array(
                "param_type" => "s",
                "param_value" => $comment
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $name
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            )
        );
        
        $this->insertDB($query, $params);
    }

      
    function getCommentCreated($pid)
    {
        $query = "SELECT * FROM tbl_product_comment  WHERE pid = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $pid
            )
        );
        
        $commentResult = $this->getDBResult($query, $params);
        return $commentResult;
    }
    
    
    function addToCart($product_id, $quantity, $code, $compatibility, $size, $color, $member_id)
    {
        $query = "INSERT INTO tbl_cart (product_id,quantity,code,compatibility,size,color,member_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            array(
                "param_type" => "s",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => $compatibility
            ),
            array(
                "param_type" => "s",
                "param_value" => $size
            ),
            array(
                "param_type" => "s",
                "param_value" => $color
            ),
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->insertDB($query, $params);
    }

    function updateCartQuantity($quantity, $product_id, $cart_id, $code, $compatibility, $size, $color, $member_id)
    {
        $query = "UPDATE tbl_cart SET  quantity = ? WHERE product_id = ? AND id= ? AND code = ? AND compatibility = ? AND size = ? AND color = ? AND member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            ),
            array(
                "param_type" => "s",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => $compatibility
            ),
            array(
                "param_type" => "s",
                "param_value" => $size
            ),
            array(
                "param_type" => "s",
                "param_value" => $color
            ),
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function deleteCartItem($cart_id)
    {
        $query = "DELETE FROM tbl_cart WHERE id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function emptyCart($member_id)
    {
        $query = "DELETE FROM tbl_cart WHERE member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->updateDB($query, $params);
    }
    
    function insertOrder($member_id, $amount, $name, $phone, $email, $region, $province, $city, $barangay, $street_address, $payment_type)
    {
        $query = "INSERT INTO tbl_order (customer_id, amount, name, phone, email, region, province, city, barangay, street_address, payment_type, order_status, order_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $amount
            ),
            array(
                "param_type" => "s",
                "param_value" => $name
            ),
            array(
                "param_type" => "s",
                "param_value" => $phone
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $region
            ),
            array(
                "param_type" => "s",
                "param_value" => $province
            ),
            array(
                "param_type" => "s",
                "param_value" => $city
            ),
            array(
                "param_type" => "s",
                "param_value" => $barangay
            ),
            array(
                "param_type" => "s",
                "param_value" => $street_address
            ),
            array(
                "param_type" => "s",
                "param_value" => $payment_type
            ),
            array(
                "param_type" => "s",
                "param_value" => "PENDING"
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d H:i:s")
            )
        );
        
        $order_id = $this->insertDB($query, $params);
        return $order_id;
    }


        function insertOrderItem($order, $product_id, $code, $compatibility, $size, $color, $price, $quantity)
        {
            $query = "INSERT INTO `tbl_order_item` (`order_id`, `product_id`, `code`, `compatibility`, `size`, `color`, `item_price`, `quantity`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $params = array(
                array(
                    "param_type" => "i",
                    "param_value" => $order
                ),
                array(
                    "param_type" => "i",
                    "param_value" => $product_id
                ),
                array(
                    "param_type" => "s",
                    "param_value" => $code
                ),
                array(
                    "param_type" => "s",
                    "param_value" => $compatibility
                ),
                array(
                    "param_type" => "s",
                    "param_value" => $size
                ),
                array(
                    "param_type" => "s",
                    "param_value" => $color
                ),
                array(
                    "param_type" => "i",
                    "param_value" => $price
                ),
                array(
                    "param_type" => "i",
                    "param_value" => $quantity
                )
            );
            
            $this->insertDB($query, $params);
        }

    
    function insertPayment($order, $payment_status, $payment_response)
    {
        $query = "INSERT INTO tbl_payment(order_id, payment_status, payment_response) VALUES (?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $order
            ),
            array(
                "param_type" => "s",
                "param_value" => $payment_status
            ),
            array(
                "param_type" => "s",
                "param_value" => $payment_response
            )
        );
        
        $this->insertDB($query, $params);
    }

    function validationUser($code){

        $query = "SELECT * FROM tbl_user WHERE code = ?"; 

        $params = array(
            array(
                "param_type" => "i", 
                "param_value" => $code
            )
        );

        $validationResult = $this->getDBResult($query, $params);
        return $validationResult;
    }


    function validateExistence($username){
        $query = "SELECT * FROM tbl_user WHERE username = ?"; 

        $params = array(
            array(
                "param_type" => "s", 
                "param_value" => $username
            )
        );

        $validationExistenceResult = $this->getDBResult($query, $params);
        return $validationExistenceResult;
    }


    function registerUser($username, $password, $code, $status) {

        $query = "INSERT INTO `tbl_users` (`email`, `password`, `code`, `status`, `date_created`) VALUES (?, ?, ?, ?, ?)";
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $username
            ),
            array(
                "param_type" => "s",
                "param_value" => $password
            ),
            array(
                "param_type" => "i",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            )
        );

        $this->insertDB($query, $params);
          
    }
    
    function paymentStatusChange($order, $status) {
        $query = "UPDATE tbl_order SET  order_status = ? WHERE id= ?";
        
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "i",
                "param_value" => $order
            )
        );
        
        $this->updateDB($query, $params);
    }
}
