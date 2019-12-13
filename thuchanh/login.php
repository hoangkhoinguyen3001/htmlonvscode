<?php
session_start();
require "index.php";
$conn = conn_db();
$__user = "";
$__pass =  md5(""); 
$mgs = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['user'];
    $pass = $_POST['pass'];
    }
    if($username == $__user && $__pass == md5($pass)) {
        header("Location: http://localhost:8080/vscodehtml/htmlonvscode/thuchanh/dashboard.php");
        
    } else {
        $mgs = "Username or password is wrong";
    }
}

?>

<?=$mgs?>
<form action="login.php" method="post">
    username: <input type="text" name="user" id="">
    <br>
    passwords: <input type="password" name="pass" id="">
    <br>
    <input type="submit" value="login">
</form>