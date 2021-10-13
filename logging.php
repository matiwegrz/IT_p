<?php
	session_start();
	require_once "connect.php";
	
	$con = @new mysqli($host,$db_user,$db_password,$db_name);
	if($con->connect_errno!=0)
	{
		echo "Error:".$con->connect_errno."Description:".$con->connect_error;
	}
	else
	{
		$login = $_POST['login'];
		$pass = $_POST['pass'];	
		
		$sql="SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$pass'";
		
		if($result = @$con->query($sql))
		{
			$x=$result->num_rows;
			if($x==1)
			{
				$_SESSION['logged']=true;
				
				$row = $result->fetch_assoc();
				$_SESSION['id']=$row['id'];
				$_SESSION['user'] = $row['user'];
				
				$result->free_result();
				header('Location: weather.php');
			}else{
				$_SESSION['err'] = '<span style="color:red">Error login or password!</span>';
				header('Location: index.php');
			}
			
		}
		
		$con->close();
	
	}
	
	
	



?>