<?php
echo session_status();
session_start();
if (session_status() == PHP_SESSION_ACTIVE){
    
   echo '<h1> Welcome user :: ' . $_SESSION['user_id'] . '</h1>';
} else {
    echo "<h1> Please follow <a href='emp_login.php'> this link </a> to login </h1>";
}

