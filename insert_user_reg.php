<?php
include('connectionI.php');
$email=$_GET['email'];
$number=$_GET['number'];
$name=$_GET['name'];
$height=$_GET['height'];
$weight=$_GET['weight'];
$age=$_GET['age'];
$password=$_GET['password'];


$response=array();
$sql="insert into registration(email,number,name,height,weight,age,password) values('$email','$number','$name','$height','$weight','$age','$password')";

$result=mysqli_query($con,$sql);
	$response['success']=true;

		mysqli_close($con);
echo json_encode($response)

?>