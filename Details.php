<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <?php
      
            require_once 'shop.php';
            require_once 'Add.php';            
            session_start();
           
            $shop = $_SESSION['shop'];
            echo $shop->get_code(). '<br/>';
            echo $shop->get_name(). '<br/>';
            echo $shop->get_id_of_product(). '<br/>';
            
            foreach ($shop->get_all_products() as $a_product) {
                echo $a_product->get_code(). ' '. $a_product->get_name(). ' '. $a_product->get_product_id_quantity(). '<br/>';
            }
                    
        
        
        ?>
    </body>
</html>
