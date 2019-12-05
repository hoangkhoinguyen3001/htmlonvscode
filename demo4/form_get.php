<?php
session_start();

if(!empty($_SESSION['msg'])) {
    $msg = $_SESSION['msg']; // khai báo biến hứng lại value lưu mess trong session
    unset($_SESSION['msg']); // xáo session mess
}
?>
<html>
<body>

<?php
if(isset($msg) && !empty($msg['alert_mess'])) {
    echo $msg['alert_mess'];
}
?>

<form action="http://localhost/demo_4/msg_get.php" method="get">
Name: <input type="text" name="name" value="<?=isset($_GET['name']) ? $_GET['name'] : ""?>">
<span><?=isset($msg['name']) ? $msg['name'] : "" ?></span>
<br>

E-mail: <input type="text" name="email" value="<?=isset($_GET['email']) ? $_GET['email'] : ""?>">
<span><?=isset($msg['email']) ? $msg['email'] : "" ?></span>
<br>
<input type="submit">
</form>

</body>
</html>