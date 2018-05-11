<?php
require_once 'database_connect.php';
if (isset($_POST['dname']))
{
	$uname=trim($_POST['dname']);
	$upass=trim($_POST['dpass']);
	

	$query="SELECT did,name FROM doctor where email=? and password=?";
	$statement=mysqli_prepare($connect,$query);
	$statement->bind_param('ss',$uname,$upass);
	$result=$statement->execute();
	if ($result)
	{
		$statement->store_result();
		if ($statement->num_rows()==1)
		{
			$statement->bind_result($uid,$username);
			while($statement->fetch())
			{
				$_SESSION['uid']=$uid;
				$_SESSION['username']=$username;
				$_SESSION['doctor']="yes";
			}
			
			header('Location:../index.php');
		}
		else
		{

		$msg='invalid username or password';
		header('Location:../doc_login.php?msg='.$msg);
		}
	}
	else
	{
		echo "Database Error";
	}
}
else 
{
	echo 'Redirecting';
}
?>