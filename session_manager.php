<?php

//	  C o p y r i g h t   S M N   S h u v o 
//	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   

// did some stackoverflow
// and fixed the issue

function start_session(){
    session_start();
    $_SESSION['is_active'] = true;
}

function close_session(){
    session_destroy();
    $_SESSION['is_active'] = false;
}

function session_is_active(){
    if(!isset($_SESSION['is_active'])){
        // if session variable is not present
        // I am setting it to false
        $_SESSION['is_active'] = false;
    }
    return $_SESSION['is_active'];
}