<?php
session_start();
$_SESSION['name'] = "blahhh";
setcookie("Tony",$_SESSION['name'] , time()-3600);

