<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regi1";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
 echo "connection ok";
}
else
{
 echo "connection failed." mysqli_connect_error();
}
?>