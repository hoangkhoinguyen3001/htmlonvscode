<?php
// not require that the system not notify error  
 require "./index.php";
 // the $conn will contain the value of conn_db function(check connect to database is true or false)
 $conn = conn_db();
 $sql = "SELECT id,name,quanlity, status FROM product";
 $result = mysqli_query($conn, $sql);
//var_dump($result);
$_data = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $_data[] = $row;
        
    }
    //var_dump($_data);
} 
mysqli_close($conn);
?>
<style>
    table, th, td{border: 1px solid black };
</style>
<button><a href="create.php">ADD</a></button>
<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>QUANLITY</th>
        <th>STATUS</th>
    </tr>
    <?php foreach ($_data as $key => $value) : ?>
    <tr>
        <td><?=$value['id']?></td>
        <td><?=$value['name']?></td>
        <td><?=$value['quanlity']?></td>
        <td><?=$value['status'] == 1 ?"active" : "deactive"?></td>
        <td><a href="<?="view.php?id={$value['id']}"?>">View</a>|| <a href="edit.php">Edit</a> || <a href="<?="update.php?id={$value['id']}"?>">Delete</a></td>
    </tr>
    <?php endforeach?>
</table>