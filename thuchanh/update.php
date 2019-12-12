<?php
require "./index.php";
$conn = conn_db();
$sql_err ="";
$nameErr = $numberErr = $statusErr = "";
$name = $number = $status = "";
if($_SERVER ["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["name"]) && !empty($_POST["name"])) {
        $name = $_POST["name"];
    } else {
        $nameErr = "Name is required";
    }

    if(isset($_POST["quanlity"]) && !empty($_POST["quanlity"])) {
        $number = $_POST["quanlity"];
    } else {
        $numberErr = "quanlity is required";
    }

    if(isset($_POST["status"]) && in_array($_POST["status"], [1,0])) {
        $status = $_POST["status"];
    } else {
        $statusErr = "status is required";
    }

    // xu ly add vao mysql
    if(empty($nameErr) && empty($numberErr) && empty($statusErr)) {
        $sql = "UPDATE product SET product.name='{$name}',product.quanlity={$number},product.`status`={$status} WHERE id={$_POST['id']}";

        if (mysqli_query($conn, $sql)) {
            header("Location: http://localhost:8080/vscodehtml/htmlonvscode/thuchanh/dashboard.php");
            
        } else {
            var_dump(mysqli_error($conn));
            die("false");
        }
        $name = $number = $status = "";
    }
}
// check logic
$id = 0;
$row = "";
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // viet cau sql
    $sql = "SELECT * FROM product WHERE id = {$_GET['id']}";
    // chay sql => lay record
    $result = mysqli_query($conn, $sql);

    // check logic co ton tai 1 record
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        var_dump($row);

    } else {
        // khong tim thay record
        header("Location: http://www.google.com/");
        die();
    }
    // dong ket voi mysql
} else {
    // die();
    header("Location: google.com");
}


mysqli_close($conn);
?>
<form method="POST" action="update.php?id=<?=$row['id']?>">
    NAME:<input type="text" name="name" value="<?=$row['name']?>"><span><?=''?></span>
    <br>
    Quanlity<input type="number" name="quanlity" value="<?=$row['quanlity']?>" id=""><span><?=''?></span>
    <br>
    Status<select name="status" id="">
        <option value="1" <?=$row['status'] == 1 ? "selected" : "" ?> >Active</option>
        <option value="0" <?=$row['status'] == 0 ? "selected" : "" ?>>Deactive</option>
    </select><span><?=''?></span>
    <br>
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <input type="submit" value="submit">
</form>