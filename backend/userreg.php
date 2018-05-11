<?php
require_once('database_connect.php');
if (isset($_POST['uname']))
{
	$name=trim($_POST['uname']);
	$email=trim($_POST['uemail']);
	$phone=trim($_POST['uphone']);
	$age=trim($_POST['uage']);
	$zip=trim($_POST['uzip']);
	$pass=trim($_POST['upass']);
	$query="select * from patient where email=?";
	$stmt=mysqli_prepare($connect, $query);
	mysqli_stmt_bind_param($stmt,'s',$email);
	$check=mysqli_stmt_execute($stmt);
	$stmt->store_result();
	if ($stmt->num_rows>0)
	{
		header('Location:../userRegistration.php?msg="username already exists"');
		die();
	}
echo "working";
	$query="INSERT INTO patient (name,mobile,email,age,zipcode,password) VALUES (?,?,?,?,?,?)";
	$statement=mysqli_prepare($connect, $query);
	mysqli_stmt_bind_param($statement,'sssiss',$name,$phone,$email,$age,$zip,$pass);
	$result=mysqli_stmt_execute($statement);
	if ($result)
	{
		header('Location:../index.php');
		// header('Location:../registered_successfull.php');
	}
	else
	{
		echo "<h1 align='center'> Registration Failed !! </h1>";
	}
}
else
{
	echo "redirecting";
}


?>