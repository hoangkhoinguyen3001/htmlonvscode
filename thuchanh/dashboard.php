<?php
    require"index.php";
    $conn = conn_db();
    $sql = "SELECT id,name,quanlity, status FROM product";
    $result = mysqli_query($conn, $sql);
    $_data = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $_data[] = $row;
            
        }
    }
    mysqli_close($conn);
?>
<button><a href="create.php">ADD</a></button>
<style>
    tr,th,td{border: 1px solid black};
</style>
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
        <td><?=$value['status'] == 1 ? "active" : "deactive"?></td>
        <td><a href="<?="view.php?id={$value['id']}"?>">view</a>||
        <a href="<?="update.php?id={$value['id']}"?>">edit</a>||
        <a href="<?="delete.php?id={$value['id']}"?>">delete</a>
        </td>
    </tr>
    <?php endforeach?>
</table>
