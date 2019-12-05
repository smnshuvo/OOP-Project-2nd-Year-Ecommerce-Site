<?php

//	  C o p y r i g h t   S M N   S h u v o 
//	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   

/**
 * Description of OrderLine
 *
 * @author smnsh
 */
class OrderLine {
    var $item_array = array();
    
    function pushItemtoArray(Product $product, int $quantity) {
        array_push($this->item_array,  array(
                "Product" => $product,
                "Quantity" => $quantity,
                "Price" => $product->pPrice                
                ));
    }
    
    function getItem_array() {
        return $this->item_array;
    }




}
