<?php
function conn_db(){
    ini_set('mysql.connect_timeout', 300);
    ini_set('default_socket_timeout', 300);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="product_demo";

    // Create connection
    $conn = mysqli_connect("$servername", "$username", "$password", "$dbname");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
conn_db(); 
?>