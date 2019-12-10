<?php
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

    if(isset($_POST["status"]) && !empty($_POST["status"]) && in_array($_POST["status"], [1,0])) {
        $status = $_POST["status"];
    } else {
        $statusErr = "status is required";
    }

    // xu ly add vao mysql
    if(empty($nameErr) && empty($numberErr) && empty($statusErr)) {
        require "./index.php";
        $conn = conn_db();
        /// viet sql
        $sql = "INSERT INTO product (name, quanlity, status)
        VALUES ('{$name}', {$number}, {$status})";

        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            $sql_err = "Add successed <a href='view.php?id={$last_id}' target='_blank'>new item</a>";
        } else {
            // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $sql_err = "Add Fail";
        }
        ///
        mysqli_close($conn);
        //set back variable in null to next add
        $name = $number = $status = "";
    }
}

?>
<?=$sql_err?>
}
//var_dump($_SERVER)
?>
<form method ="POST" action ="create.php">
    NAME :<input type="text" name ="name" id ="<?=$name?>" required> <span><?=$nameErr?></span>
    <br>
    Quanlity :<input type="number" name ="quanlity" id ="" required><span><?=$numberErr?></span>
    <br>
    Status<select name="status" id="">
        <option value="1">active</option>
        <option value="0">deactive</option>
    </select><span><?=$statusErr?></span>
    <br>
    <input type="submit" value="submit">
</form>