<?php
// session_start();
if(!isset($_SESSION)) 
{ 
    session_start(); 
    unset($_SESSION['key']);
    session_destroy();
    header("Location: ./");
} 
else{
    header("Location: ./");
}

?>