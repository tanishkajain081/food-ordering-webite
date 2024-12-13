<?php
$hostname='localhost';
$username='root';
$password='';
$database='khaana';

$conn= mysqli_connect($hostname, $username, $password, $database);
if ($conn){
    mysqli_select_db($conn, $database);
}
else{
    echo mysql_error();
}
?>