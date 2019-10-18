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


if (isset($_POST['submit_product'])){
    
    $target_dir = "uploads/"; // where the file will be uploaded
    $target_file =  basename($_FILES["p_image"]["name"]);
    $file_extension = pathinfo($target_file); // to get the extension
    
    
    
    $_pid = filter_input(INPUT_POST, '_pid');    
    $pname = filter_input(INPUT_POST, 'pname'); 
    $pdesc = filter_input(INPUT_POST, 'pdesc');
    $p_image_extension =  $file_extension['extension'];
    $pCategory  = filter_input(INPUT_POST, 'pCategory');
    $pQuantity = filter_input(INPUT_POST, 'pQuantity');
    $pModDate = filter_input(INPUT_POST, 'pModDate');
    $pBuyingPrice = filter_input(INPUT_POST, 'pBuyingPrice');
    $pPrice = filter_input(INPUT_POST, 'pPrice');
    $pDiscount = filter_input(INPUT_POST, 'pDiscount');
    
    $myProduct = new Product($_pid,$pname,$pdesc,$p_image_extension,$pCategory, $pQuantity, $pBuyingPrice, $pPrice, $pDiscount);
    
    $upload_directory = $target_dir .$_pid . "." . $file_extension['extension'];
    
    $myProduct->insertData();
    
    if (move_uploaded_file($_FILES["p_image"]["tmp_name"], $upload_directory)){
     echo "SUCCESSFUL";   
    }
    
    
  
}
