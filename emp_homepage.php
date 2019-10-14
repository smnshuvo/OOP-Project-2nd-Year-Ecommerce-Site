<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-16le">
        <title> SMN Tech | HOME</title>
        <link rel="stylesheet" href="css/navbar.css">
    </head>
    
    <body>
        <div class="top_nav">
            <div id='logo'>
                <a href=""> SMN TECH</a>
            </div>            
            <ul>
                <li> <a href="emp_login.php"> Sign in </a> </li>
                 <li> <a href=""> Messages </a> </li>
                  <li> <a href=""> Products </a> </li>
                   <li> <a href=""> Orders </a> </li>
                   <li class="active"> <a href="emp_homepage.php"> Home </a> </li>                    
            </ul>
        </div>
        <div>
            <?php
            session_start();


            include 'session_manager.php';
        if (session_is_active()){
   
         echo '<h1> Welcome user :: ' . $_SESSION['user_id'] . '</h1>';
        } else {
            echo "<h1> YOU ARE NOT <i> logged in </i> <br> Please follow <a href='emp_login.php'> this link </a> to login </h1>";
        }
?>
        </div>
    </body>
 
</html>