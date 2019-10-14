<?php
session_start();


include 'session_manager.php';
if (session_is_active()){
   
   echo '<h1> Welcome user :: ' . $_SESSION['user_id'] . '</h1>';
} else {
    echo "<h1> YOU ARE NOT <i> logged in </i> <br> Please follow <a href='emp_login.php'> this link </a> to login </h1>";
}

