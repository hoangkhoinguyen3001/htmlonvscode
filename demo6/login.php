<?php
// https://www.ddth.com/showthread.php/54195-tutor-t%E1%BA%A1o-trang-%C4%91%C4%83ng-nh%E1%BA%ADp-ph%C3%A2n-quy%E1%BB%81n
session_start();
require "./index.php";
$conn = conn_db();
$__user = ""; // data cua recorde id = 1 user_name
$__pass =  md5(""); // data cua recorde id = 1 user_pass
$mgs = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['user'];
    $pass = $_POST['pass'];
    }
    if($username == $__user && $__pass == md5($pass)) {
        // login thanh cong => vao dashbord;
        header("Location: http://localhost:8080/vscodehtml/htmlonvscode/demo6/dashboard.php");
        
    } else {
        // false
        $mgs = "Username or password is wrong";
    }
    // ban user vao prodcut_demo.sql lay
    //$sql = "SELECT * FROM user WHERE user_name = {$username}";
    // // mysqli_num_rows == 0 ko co user
    // // mysqli_num_rows > 1 ton tai nhiu user co cung user_name
    // // mysqli_num_rows == 1 dang nhap thanh cong
    //if (mysqli_num_rows($result) == 1) {
    // $row = mysqli_fetch_assoc($result);
    //   if($row["user_pass"] == md5($pass)){
    //     // tao bien moi
    //    $session_user = [
    //         'id' => $row['id'],
    //         // luu data vao session de show tren client hoac admin
    //        'fullname' => $row['fullname'],
    //         'role' => $row['role']
    //     ];
    //     $_SESSION['user'] = $session_user;
    //    }
    //}
    
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