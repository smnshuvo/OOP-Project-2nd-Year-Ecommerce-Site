<?php

//	  C o p y r i g h t   S M N   S h u v o 
//	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   
class product{
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
?>