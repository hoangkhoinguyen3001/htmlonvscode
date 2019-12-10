<?php
require "./index.php";
$conn = conn_db();
if(isset($_GET['id'])&& $_GET['id'] > 0){
    $id = $_GET['id'];
    $sql = "DELETE FROM product WHERE id = {$id} and status = 1";
    //$sql = "SELECT * FROM product WHERE id = {$id} and status = 1";
    //"DELETE FROM MyGuests WHERE id = {$id} and status = 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
        //var_dump($row);
}else{
    header("Location: http://www.google.com/");
    die();
}
mysqli_close($conn);
?>