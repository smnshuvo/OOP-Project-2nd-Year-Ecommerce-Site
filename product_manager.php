<!DOCTYPE html>

<!--	  C o p y r i g h t   S M N   S h u v o 
          2 n d   Y e a r   C a p s t o n e   P r o j e c t   
-->
<html>
    <head>
        <meta charset="UTF-16le">
        <title> SMN Tech | HOME</title>
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/product_bar.css">
    </head>

    <body>
        <div class="top_nav">
            <div id='logo'>
                <a href=""> SMN TECH</a>
            </div>            
            <ul>
                <li> <a href="emp_login.php"> Sign in </a> </li>
                <li> <a href=""> Messages </a> </li>
                <li class="active"> <a href="product_manager.php"> Products </a> </li>
                <li > <a href="manage_orders.php"> Orders </a> </li>
                <li > <a href="emp_homepage.php"> Home </a> </li>                    
            </ul>
        </div>
        <div class="add_product">
            <?php
            session_start();


            include 'session_manager.php';
            if (session_is_active()) {
                ?>
            <form action="add_product.php" id="add_product" method="POST" enctype="multipart/form-data">
                <!-- enc type is for file upload -->
                <table>
                    <tr>
                        <td> Product ID </td>
                        <td> <input type="text" name="_pid" value="" size="30" required/> </td>
                    </tr>
                    <tr>
                        <td> Product Name </td>
                        <td> <input type="text" name="pname" value="" size="30" required/> </td>
                    </tr>
                    <tr>
                        <td> Product Description </td>
                        <td> 
                            <textarea rows="5" cols="29" name="pdesc" form="add_product" required></textarea> 
                        </td>
                    </tr>
                    <tr>
                        <td> Product Image </td>
                        <td> <input type="file" name="p_image" width="30" required /> </td>
                    </tr>
                     <tr>
                        <td> Category </td>
                        <td> <select name="pCategory" >
                                <option value="RAM"> RAM </option>
                                <option value="Storage Drive"> Storage Drive</option>
                                <option value="Monitor"> Monitor </option>
                                <option value="Motherboard"> Motherboard </option>
                                <option value="Chassis"> Chassis </option>
                                <option value="Accessories"> Accessories </option>
                                <option value="PSU"> Power Supply Unit </option>
                                <option value="Processor"> Processor </option>
                                <option value="Laptop"> Laptop </option>
                                    
                                </select> </td>
                    </tr>
                     <tr>
                        <td> Quantity </td>
                        <td> <input type="text" name="pQuantity" value="" size="30" required/> </td>
                    </tr>
                     <tr>
                        <td> Last Modification Date </td>
                        <td> <input type="text" name="pModDate" value="Today" size="30" required disabled/> </td>
                    </tr>
                     <tr>
                        <td> Buying Price </td>
                        <td> <input type="text" name="pBuyingPrice" value="" size="30" required/> </td>
                    </tr>
                     <tr>
                        <td> Selling Price </td>
                        <td> <input type="text" name="pPrice" value="" size="30" required/> </td>
                    </tr>
                     <tr>
                        <td> Discount </td>
                        <td> <input type="text" name="pDiscount" value="0" size="30"  required/> </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> <input type="submit" value="Add Product" name="submit_product" /> </td>
                    </tr>
                    
                </table>
            </form>
            
                <?php
            } else {
                echo "<h1> YOU ARE NOT <i> logged in </i> <br> Please follow <a href='emp_login.php'> this link </a> to login </h1>";
            }
            ?>
    </body>
</html>
