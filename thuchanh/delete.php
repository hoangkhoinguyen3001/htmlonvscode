<?php
require "index.php";

$conn = conn_db();

$id = @$_GET['id'];

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $sql = "SELECT * FROM product WHERE id = {$id}";

    $result = mysqli_query($conn, $sql);

   
    if (mysqli_num_rows($result) > 0) {
        $sql = "DELETE FROM product WHERE id={$id}";
        if (mysqli_query($conn, $sql)) {
            header("Location:http://localhost:8080/vscodehtml/htmlonvscode/thuchanh/dashboard.php");
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }

    } else {
        header("Location: http://www.google.com/");
        die();
    }
}

?>