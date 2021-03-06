<?php

//	  C o p y r i g h t   S M N   S h u v o 
//	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   


include(__DIR__.'/objects/Product.php');


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
