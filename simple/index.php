<?php
session_start();
if(isset($_GET['exit'])==true){
    session_destroy();
    session_start();
}
elseif(isset($_POST['user']) and isset($_POST['pass']) ){
    $user = $_POST['user'];
    $password = $_POST['pass'];
    if($user=="admin" and $password=="1234"){
        $_SESSION['log'] = "1";
    }
}   
?>
<html>
    <head>
        
    </head>
    <body>
<?php
if(isset($_SESSION['log'])==false){
?>
        <form action="index.php" method="post">
            user:    <br><input type="text" id="user" name="user"><br>
            password:<br><input type="text" id="pass" name="pass"><br>
            <input type="submit" value="Log">
        </form>    
    </body>
    <?php
} else {
    echo "hiii,<a href='index.php?exit=1'>logout</a>";
}
    ?>
</html>

