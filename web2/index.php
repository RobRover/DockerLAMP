<?php
$host = 'db1'; #database container name
$user = 'root'; #user name
$password = 'root'; #user password
$db = 'instance'; #database instance of the server

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
	echo 'connection failed' . $conn->connect_error;
}
echo 'Successfully connected to MYSQL';

?>
