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
        <form method="POST">
            <th> Create a shop <th/> 
            
            <br/>
            
            Code:<input type="text" name="codeText"><br/>
            
            Name:<input type="text" name="nameText">
            
            <input type="submit" name="submitButton" value="Create">
        </form>
        
        
    <?php
        {
             require_once 'add.php';
             require_once 'shop.php';
             session_start();
             if(isset($_POST['save']))
             {
                 $product = new product($_POST['codeText'], $_POST['nameText']);
                 /* @var $shop Shop */
                 $shop = $_SESSION['shop'];
                 echo $shop->add_
             
             }
        }
                 
         }
    
        ?>
    </body>
</html>
