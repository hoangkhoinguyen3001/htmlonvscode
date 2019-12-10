<?php
//change my.ini in mysql(wamp) to increase timeout and set shocket in this file to open file
//max_allowed_packet = 10M
//[mysqldump]
//quick
//max_allowed_packet = 10M


function conn_db(){
    //ini_set('mysql.connect_timeout', 300);
    //ini_set('default_socket_timeout', 300);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo6";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }    
    return $conn;
}
conn_db();
//mysqli_close($conn);
?>