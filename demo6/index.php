<?php
//change my.ini in mysql(wamp) to increase timeout and set shocket in this file to open file
//max_allowed_packet = 10M
//[mysqldump]
//quick
//max_allowed_packet = 10M

ini_set('mysql.connect_timeout', 300);
ini_set('default_socket_timeout', 300);
// Create connection
$servername = "localhost:8080";
$username = "root";
$password = "";
$dbname = "demo6";
// Create connection
function conn_db($servername, $username, $password, $dbname){
    $conn = mysqli_connect();
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }    
    return $conn;
}
conn_db();
//mysqli_close($conn);
?>