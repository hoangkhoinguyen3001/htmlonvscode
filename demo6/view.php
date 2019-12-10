<?php
require "./index.php";
$conn = conn_db();
if(isset($_GET['id'])&& $_GET['id'] > 0){
    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE id = {$id} and status = 1";
    $result = mysqli_query($conn, $sql);
    $row = '';
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        $row = mysqli_fetch_assoc($result);
    //while($row = mysqli_fetch_assoc($result)) {
        //$_data[] = $row;
        
    //}
        var_dump($row);
    } else{
        header("Location: http://www.google.com/");
        die();
    }
}else{
    header("Location: http://www.google.com/");
    die();
}
mysqli_close($conn);
?>