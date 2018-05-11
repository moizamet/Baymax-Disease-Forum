<?php
require_once('database_connect.php');
if (isset($_POST['dname']))
{
	$name=trim($_POST['dname']);
	$email=trim($_POST['demail']);
	$phone=trim($_POST['dphone']);
	$dcode=trim($_POST['drcode']);
	$special=trim($_POST['dspec']);
	$zip=trim($_POST['dzip']);
	$pass=trim($_POST['dpass']);
	
	$query="select * from doctor where email=?";
	$stmt=mysqli_prepare($connect, $query);
	mysqli_stmt_bind_param($stmt,'s',$email);
	$check=mysqli_stmt_execute($stmt);
	$stmt->store_result();
	if ($stmt->num_rows>0)
	{
		header('Location:../doc_registration.php?msg="username already exists"');
		die();
	}

	$query="INSERT INTO doctor (name,mobile,email,dcode,special,zipcode,password) VALUES (?,?,?,?,?,?,?)";
	$statement=mysqli_prepare($connect, $query);
	mysqli_stmt_bind_param($statement,'sssssss',$name,$phone,$email,$dcode,$special,$zip,$pass);
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