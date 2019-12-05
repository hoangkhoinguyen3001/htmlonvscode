<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == "GET") {
    // biến được dùng để chỉ việc xử lý form có đc thành công hay thất bại
    // ở đây khai bảo is_successed = true
    // nghĩa là xử lý form thành công đã thành công là giá trị mặc định
    $is_successed = true;
    $msg = array();
    if(empty($_GET['name'])) { // name rỗng
        $msg["name"] = "name không được rỗng";
        $is_successed = false; // false => form validate(kiểm tra) bị lỗi thất bại
    } else if(is_numeric($_GET['name']) == true) { // name là số
        $msg["name"] = "Name không được nhập số";
        $is_successed = false; // false => form validate(kiểm tra) bị lỗi thất bại
    }

    if(empty($_GET['email'])) { // email rỗng
        $msg["email"] = "email không được rỗng";
        $is_successed = false; // false => form validate(kiểm tra) bị lỗi thất bại
    }

    if($is_successed == false) {
        $msg['alert_status'] = $is_successed;
        $msg['alert_mess'] = "Xử lý form thất bại";
        $_SESSION['msg'] = $msg;
        $query_string = http_build_query($_GET);
        header("Location: http://localhost/demo_4/form_get.php?{$query_string}");
        die();
    } else {
        $msg['alert_status'] = $is_successed;
        $msg['alert_mess'] = "Xử lý form thành công";
        header("Location: http://localhost/demo_4/form_get.php");
    }
}

?>