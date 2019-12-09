<?php
$nameErr = $numberErr = "";
$name = $number = $status = "";
if($_SERVER ["REQUEST_METHOD"] == "POST"){
    //var_dump($_POST);
    if(isset($_POST['name']) && !emty($_POST['name'])){
        $name
    }
}
//var_dump($_SERVER)
?>
<form method ="POST" action ="create.php">
    NAME :<input type="text" name ="name" id ="" required> <span><?=$nameErr?></span>
    <br>
    Quanlity :<input type="number" name ="quanlity" id ="" required>
    <br>
    Status<select name="status" id="">
        <option value="1">active</option>
        <option value="0">deactive</option>
    </select>
    <input type="submit" value="submit">
</form>