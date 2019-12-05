<?php
// Start the session
session_start();
?>

<?php

// Khởi tạo session
if(!isset($_SESSION["color"]) && empty($_SESSION["color"])) { // kiểm tra session có được khỏi tạo chưa va chua co gia tri
    $_SESSION["color"] = "green";
}
$_SESSION["animal"] = "cat";

// echo "Session đã được tạo.";
var_dump($_SESSION);

// session_unset(); //  == $_SESSION = array(); || clear data của session

session_destroy(); // xóa session trong 1 lần phiên khỏi tạo start
var_dump($_SESSION);




?>

</body>
</html>