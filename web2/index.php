<?php
$host = 'db1';
$user = 'root';
$password = 'root';
$db = 'db1';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
	echo 'connection failed' . $conn->connect_error;
}
echo 'Successfully connected to MYSQL';

?>
