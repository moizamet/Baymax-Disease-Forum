<?php
require_once('database_connect.php');
echo $_POST['reg'];
if (isset($_POST['reg']))
{
	$name=trim($_POST['name']);
	$email=trim($_POST['uemail']);
	$uname=trim($_POST['uname']);
	$pass=trim($_POST['upass']);
	$category=trim($_POST['ucat']);
	$organization=trim($_POST['uorg']);
	$prof=$_FILES['prof']['tmp_name'];

		$tmpname=$_FILES['prof']['tmp_name'];
		$tmpname=substr($tmpname,strpos($tmpname, '/')+1);
		$tmpname=substr($tmpname,strpos($tmpname, '/')+1);
		
		$cthumb=$tmpname.$_FILES['prof']['name'];



	$query="select * from nuser where uname=?";
	$stmt=mysqli_prepare($connect, $query);
	mysqli_stmt_bind_param($stmt,'s',$uname);
	$check=mysqli_stmt_execute($stmt);
	$stmt->store_result();
	if ($stmt->num_rows>0)
	{
		header('Location:../userRegistration.php?msg="username already exists"');
		die();
	}
		move_uploaded_file($_FILES['prof']['tmp_name'],'../dp/'.$cthumb);

	$query="INSERT INTO nuser (name,email,uname,password,category,organization,profile) VALUES (?,?,?,?,?,?,?)";
	$statement=mysqli_prepare($connect, $query);
	mysqli_stmt_bind_param($statement,'sssssss',$name,$email,$uname,$pass,$category,$organization,$cthumb);
	$result=mysqli_stmt_execute($statement);
	if ($result)
	{
		header('Location:../registered_successfull.php');
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