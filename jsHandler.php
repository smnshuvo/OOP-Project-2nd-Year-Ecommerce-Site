<?php

//	  C o p y r i g h t   S M N   S h u v o 
//	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   

function showAlert($message){
    echo '<script type="text/javascript">'.
                    "alert('$message')".
                    '</script>';
}

function redirectToHome(){
echo "<script type='text/javascript'>".
                    "window.location.href = 'emp_homepage.php';".
                    "</script>";    
}