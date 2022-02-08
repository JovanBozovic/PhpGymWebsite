<?php
	//$mysqli = new mysqli( "localhost", "root", "", "onlinefitnes") or die($mysqli->error);
//	$conn = mysqli_connect("localhost", "root", "", "onlinefitnes");
$servername="localhost";
$dbname="onlinefitnes";
$username="root";
$password="";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password) or die("Database co
nnection problem.");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
function executeQuery($query){
    global $conn;
    return $conn->query($query)->fetchAll();
}
?>
