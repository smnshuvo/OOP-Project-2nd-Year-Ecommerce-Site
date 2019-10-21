<!DOCTYPE html>

<!--	  C o p y r i g h t   S M N   S h u v o 
	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   
-->
<html>
    <head>          
        <meta charset="UTF-16le">
        <title> SMN Tech | Log in</title>
       
        <link rel="stylesheet" href="css/navbar.css">   
        <link rel="stylesheet" href="css/productView.css"> <!-- How every product is displayed -->
    </head>
    <body>
        <div class="top_nav">
            <div id='logo'>
                <a href=""> SMN TECH</a>
            </div>            
            <ul>
                <li class="active"> <a href="emp_login.php"> Sign in </a> </li>
                 <li> <a href=""> Messages </a> </li>
                  <li> <a href="product_manager.php"> Products </a> </li>
                   <li> <a href="manage_orders.php"> Orders </a> </li>
                   <li> <a href="emp_homepage.php"> Home </a> </li>                    
            </ul>
        </div>
       
    
    
        <?php
        include ('connect.php');
        $table_name = "product_info";
        $SQL = "SELECT * FROM $table_name";
        $result = mysqli_query($cnct, $SQL);
        while ($product = mysqli_fetch_object($result)){  
            
            ?>
         <div class="productView">
            <div id="productImage">
                
                <img src="uploads/<?php  echo "$product->_pid.$product->p_image_extn"?>" height="120px" width="auto">
            </div>
                <div id="productDesc">
                    <p id="PrName"> <?php print $product->pname; ?> </p>
                <p id="PrDesc"> <?php print $product->pdesc; ?> </p>
                <!-- ৳ is Bangladesh's money symbol -->
                <p id="PrPrice"> ৳<?php $product->pPrice -= $product->pPrice * $product->pDiscount/100;
                print $product->pPrice; ?> <button> Buy </button>  </p>
                
               
                
            </div>
        </div>
         
        <?php
        }
        ?>
    </body>
</html>
