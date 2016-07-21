<?php
session_start();
if(isset($_SESSION['name'])==true){
    echo "val:".$_SESSION['name'];
    unset($_SESSION['name']);
}else{
        echo "NOT SET^";
}


