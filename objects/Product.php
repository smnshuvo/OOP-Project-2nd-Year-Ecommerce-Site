<?php

//	  C o p y r i g h t   S M N   S h u v o 
//	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   

/**
 * Description of Product
 *
 * @author smnsh
 */

class Product {
    var $_pid;
    var $pname;
    var $pdesc;
    var $p_image;
    var $pCategory;
    var $pQuantity;
    var $pBuyingPrice;
    var $pPrice;
    var $pDiscount;
    
    function __construct($_pid, $pname, $pdesc, $p_image, $pCategory, $pQuantity, $pBuyingPrice, $pPrice, $pDiscount) {
        $this->_pid = $_pid;
        $this->pname = $pname;
        $this->pdesc = $pdesc;
        $this->p_image = $p_image;
        $this->pCategory = $pCategory;
        $this->pQuantity = $pQuantity;
        $this->pBuyingPrice = $pBuyingPrice;
        $this->pPrice = $pPrice;
        $this->pDiscount = $pDiscount;
    }
    
    function get_pid() {
        return $this->_pid;
    }

    function getPname() {
        return $this->pname;
    }

    function getPdesc() {
        return $this->pdesc;
    }

    function getP_image() {
        return $this->p_image;
    }

    function getPCategory() {
        return $this->pCategory;
    }

    function getPQuantity() {
        return $this->pQuantity;
    }

    function getPBuyingPrice() {
        return $this->pBuyingPrice;
    }

    function getPPrice() {
        return $this->pPrice;
    }

    function getPDiscount() {
        return $this->pDiscount;
    }

    function set_pid($_pid) {
        $this->_pid = $_pid;
    }

    function setPname($pname) {
        $this->pname = $pname;
    }

    function setPdesc($pdesc) {
        $this->pdesc = $pdesc;
    }

    function setP_image($p_image) {
        $this->p_image = $p_image;
    }

    function setPCategory($pCategory) {
        $this->pCategory = $pCategory;
    }

    function setPQuantity($pQuantity) {
        $this->pQuantity = $pQuantity;
    }

    function setPBuyingPrice($pBuyingPrice) {
        $this->pBuyingPrice = $pBuyingPrice;
    }

    function setPPrice($pPrice) {
        $this->pPrice = $pPrice;
    }

    function setPDiscount($pDiscount) {
        $this->pDiscount = $pDiscount;
    }



        public function insertData(){
        include ('connect.php');
        if ($cnct){      
        $SQL = "INSERT INTO `product_info` VALUES ('$this->_pid', '$this->pname' , '$this->pdesc', '$this->p_image' ,'$this->pCategory', $this->pQuantity , NULL"
                . ",$this->pBuyingPrice, $this->pPrice, $this->pDiscount)";
        
        if(mysqli_query($cnct, $SQL)){
            echo 'succesful';
        } else {
            echo $cnct->error;
        }
        
        }
    }
    
    
}
