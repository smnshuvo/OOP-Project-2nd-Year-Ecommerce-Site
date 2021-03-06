<!DOCTYPE html>

<!--	  
         C o p y r i g h t   S M N   S h u v o 
	  2 n d   Y e a r   C a p s t o n e   P r o j e c t  
          
-->
<html>
    <head>
        <title><?php
        echo $pID = filter_input(INPUT_GET, 'pid');
        ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/productViewPage.css">
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
        $SQL = "SELECT * FROM $table_name WHERE _pid='$pID' LIMIT 1"; // this will save time
        $result = mysqli_query($cnct, $SQL);
        $product = mysqli_fetch_object($result);       
        
        ?>
                
    <div class="product">
        <div id="productImage">
            <img src="uploads/<?php echo $product->_pid. ".".$product->p_image_extn; ?>">
        </div>
        
             <div class="productInfo">
                 <p id="product-name">
                     <?php
                     echo $product->pname;
                     ?>
                 </p>
                 <p id="product-desc"> <?php echo $product->pdesc;?></p>
                 <p id="product-price"> <?php echo $product->pPrice; ?> Taka </p>
             </div>
             
                
        
    </div>
        
        <div class="product-info-table">            
            <table>
                <tr>
                    <td> Name </td>
                    <td> <?php echo $product->pname; ?> </td>
                </tr>
                <tr>
                    <td> ID </td>
                    <td> <?php echo $product->_pid; ?> </td>
                </tr>
                <tr>
                    <td> Description </td>
                    <td> <?php echo $product->pdesc;?> </td>
                </tr>
                <tr>
                    <td> Product Type </td>
                    <td> <?php echo $product->pCategory;?> </td>
                </tr>
                <tr>
                    <td> Updated on </td>
                    <td> <?php echo $product->pModDate;?> </td>
                </tr>
                <tr>
                    <td> Discount </td>
                    <td> <?php echo $product->pDiscount;?> % </td>
                </tr>
                <tr>
                    <td> Price</td>
                    <td> <?php echo $product->pPrice; ?> Taka </td>
                </tr>
                
            </table>
            <button type="button" onclick="addToCart()">
                Add to cart
            </button>
            
        </div>
        
        
    </body>
            <script type="text/javascript">
                function addToCart(){
                    var productID = "<?php echo $product->_pid;?>";
                    var xmlhttp = new XMLHttpRequest();                    
                    xmlhttp.open("POST", "index.php?q=" + productID , true);
                    xmlhttp.send();
                }

            </script>
</html>



