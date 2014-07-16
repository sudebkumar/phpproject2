<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of add
 *
 * @author bcc
 */
class Add {
    
     private $product_id;
    
    private $quantity;
          
   private $add;
    
    function __construct($product_id, $quantity) {
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->add= 0;
    }

    public function add ($amount)
    {
        $this->add += $amount;
        
        return 'added';
    
    
    
    
}

    }
