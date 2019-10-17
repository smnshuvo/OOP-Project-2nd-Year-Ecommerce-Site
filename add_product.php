<?php

//	  C o p y r i g h t   S M N   S h u v o 
//	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   
class Product{
    var $_pid;
    var $pname;
    var $pdesc;
    var $p_image;
    var $pCategory;
    var $pQuantity;
    var $pModDate;
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

    function setPModDate($pModDate) {
        $this->pModDate = $pModDate;
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


    
}


if (isset($_POST['submit_product'])){
    
    $_pid = filter_input(INPUT_POST, '_pid');    
    $pname = filter_input(INPUT_POST, 'pname'); 
    $pdesc = filter_input(INPUT_POST, 'pdesc');
    $p_image = filter_input(INPUT_POST, 'p_image');
    $pCategory  = filter_input(INPUT_POST, 'pCategory');
    $pQuantity = filter_input(INPUT_POST, 'pQuantity');
    $pModDate = filter_input(INPUT_POST, 'pModDate');
    $pBuyingPrice = filter_input(INPUT_POST, 'pBuyingPrice');
    $pPrice = filter_input(INPUT_POST, 'pPrice');
    $pDiscount = filter_input(INPUT_POST, 'pDiscount');
    
    $myProduct = new Product($_pid,$pname,$pdesc,$p_image,$pCategory, $pQuantity, $pBuyingPrice, $pPrice, $pDiscount);
    
    
  
}
