<?php
require "./index.php";
$conn = conn_db();
// neu submit form thi vao if
$sql_err ="";
$nameErr = $numberErr = $statusErr = "";
$name = $number = $status = "";
if($_SERVER ["REQUEST_METHOD"] == "POST"){
    //var_dump($_POST);
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
        /// viet sql
        $sql = "UPDATE product SET product.name='{$name}',product.quanlity={$number},product.`status`={$status} WHERE id={$_POST['id']}";

        if (mysqli_query($conn, $sql)) {
            header("Location: http://localhost/vscodehtml/htmlonvscode/demo6/dashboard.php");
            // $last_id = mysqli_insert_id($conn);
            // $sql_err = "Add successed <a href='view.php?id={$last_id}' target='_blank'>new item</a>";
        } else {
            var_dump(mysqli_error($conn));
            die("false");
            // header("Location: http://localhost/demo_5/update.php?id=1");
            // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            // $sql_err = "Add Fail";
        }
        //set back variable in null to next add
        $name = $number = $status = "";
    }
}
// check logic
// $_REQUEST['id'];
$id = 0;
$row = "";
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // lay data voi id = ?

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
<?php //echo $sql_err?>
}
//var_dump($_SERVER)
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