<?php
// session_start();
if(!isset($_SESSION)) 
{ 
    session_start(); 
    unset($_SESSION['key']);
    session_destroy();
    header("Location: ./layout2.php");
} 
else{
    header("Location: ./layout2.php");
}

?>