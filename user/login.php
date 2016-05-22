<?php

// coppy text in variable

if (isset($_POST['user'])&&isset($_POST['pass'])) 
{
	if (!empty($_POST['user'])&&!empty($_POST['pass'])) 
	{
		require '../common/connect.php';
		
		$query = "SELECT email, password FROM users WHERE email = ?";
		$stmt = $conn->prepare($query);
		$stmt->execute(array($_POST['user']));
		$rows=$stmt->fetch();

			if ($rows['email'] == $_POST['user'])
			{
				if ($rows['password'] == md5($_POST['pass']))
				{
					session_start();
					ob_start();
					header('Location:userpanel.php');
					$_SESSION['sandip']=md5($_POST['user']);
				}
				else
				{
					header('Location:index.php');
				}
			}
			else
			{
				header('Location:index.php');
			}
			
			
	
	}
}


?>  


