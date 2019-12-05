<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    // biến được dùng để chỉ việc xử lý form có đc thành công hay thất bại
    // ở đây khai bảo is_successed = true
    // nghĩa là xử lý form thành công đã thành công là giá trị mặc định
    $is_successed = true;
    $msg = array();
    if(empty($_POST['name'])) { // name rỗng
        $msg["name"] = "name không được rỗng";
        $is_successed = false; // false => form validate(kiểm tra) bị lỗi thất bại
    } else if(is_numeric($_POST['name']) == true) { // name là số
        $msg["name"] = "Name không được nhập số";
        $is_successed = false; // false => form validate(kiểm tra) bị lỗi thất bại
    }

    if(empty($_POST['email'])) { // email rỗng
        $msg["email"] = "email không được rỗng";
        $is_successed = false; // false => form validate(kiểm tra) bị lỗi thất bại
    }

    if($is_successed == false) {
        $msg['alert_status'] = $is_successed;
        $msg['alert_mess'] = "Xử lý form thất bại";
    } else {
        $msg['alert_status'] = $is_successed;
        $msg['alert_mess'] = "Xử lý form thành công";
    }
}

?>
<html>
<body>

<?php
if(isset($msg) && !empty($msg['alert_mess'])) {
    echo $msg['alert_mess'];
}
?>

<form action="http://localhost/demo_4/form_post.php" method="post">
Name: <input type="text" name="name" value="<?=isset($_POST['name']) ? $_POST['name'] : ""?>">
<span><?=isset($msg['name']) ? $msg['name'] : "" ?></span>
<br>

E-mail: <input type="text" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ""?>">
<span><?=isset($msg['email']) ? $msg['email'] : "" ?></span>
<br>
<input type="submit">
</form>

</body>
</html>