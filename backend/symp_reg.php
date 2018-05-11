<?php
require_once('database_connect.php');

if (isset($_POST['email']))
{
	$email=trim($_POST['email']);
	$fever=trim($_POST['fever']);
	$appitite=trim($_POST['appitite']);
	$head=trim($_POST['head']);
	$weak=trim($_POST['weak']);
	$body=trim($_POST['body']);
	$other=trim($_POST['other']);
	$extra=trim($_POST['extra']);
	$predict='Jaundice';

	$id=$_SESSION['uid'];
	echo "other";
	switch ($other) {
		case 'fatigue':$predict="jaundice";
			break;
		case 'yellow':$predict="jaundice";
			break;
		case 'rashes':$predict="jaundice";
			break;
		case 'cough':$predict="jaundice";
			break;
		case 'vomitting':$predict="jaundice";
			break;
		
		default:
			$predict="jaundice";
			break;
	}

	$query="INSERT INTO symptoms (pid,fever,appitite,head,weak,body,other,extra,predict,date) VALUES (?,?,?,?,?,?,?,?,?,now())";
	$statement=mysqli_prepare($connect, $query);
	mysqli_stmt_bind_param($statement,'issssssss',$id,$fever,$appitite,$head,$weak,$body,$other,$extra,$predict);
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