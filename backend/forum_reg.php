<?php
require_once('database_connect.php');

if (isset($_POST['pres']))
{
	$pres=trim($_POST['pres']);
	$sid=trim($_POST['sid']);
	$pid=trim($_POST['pid']);
	$did=trim($_POST['did']);

	$query="INSERT INTO forum  VALUES (null,?,?,?,now(),?)";
	$statement=mysqli_prepare($connect, $query);
	mysqli_stmt_bind_param($statement,'iiis',$pid,$sid,$did,$pres);
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