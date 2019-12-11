<?php
require "./index.php";

$conn = conn_db();

$id = @$_GET['id'];

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $sql = "SELECT * FROM product WHERE id = {$id}";

    $result = mysqli_query($conn, $sql);

    // check logic co ton tai 1 record
    if (mysqli_num_rows($result) > 0) {
        // viet cau sql xoa record
        // sql to delete a record
        $sql = "DELETE FROM product WHERE id={$id}";
        if (mysqli_query($conn, $sql)) {
            header("Location:http://localhost/vscodehtml/htmlonvscode/demo6/dashboard.php");
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }

    } else {
        // khong tim thay record
        header("Location: http://www.google.com/");
        die();
    }
}

// $sql = "SELECT * FROM product WHERE id = {$id}";
// $result = mysqli_query($conn, $sql);
// lay id => check co data

// neu co => xoa

// quay ve dashboard
?>