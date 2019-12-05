<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $status;
    $name = $_POST['name'];
    if(!is_numeric($_POST['name']) == true && !empty($_POST['name'])) {
        $status = 1;
        $msg = [
            "msg" => "submit form thanh cong"
        ];
    } else {
        $status = 0;
        $msg = [
            "msg" => "submit form that bai",
            "name" => "Name chi duoc nhap chu"
        ];
    }
}

?>

<html>
<body>
<?php 
if(isset($msg) && !empty($msg['msg'])) {
    echo $msg['msg'];
}
?>

<form action="http://localhost:8080/demo4/form_postatclass.php" method="post">
Name: <input type="text" name="name" value="">
<span><?=isset($msg) && !empty($msg['name']) ? $msg['name'] : "" ?></span>
<br>
<input type="submit">
</form>

</body>
</html>