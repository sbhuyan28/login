

	<?php
		/**/
		if (isset($_POST["fname"]) &&isset($_POST["lname"]) &&isset($_POST["email"]) &&isset($_POST["num"]) &&isset($_POST["pass"]) &&isset($_POST["cpass"])) 
		{
			if (!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["email"]) && !empty($_POST["num"]) && !empty($_POST["pass"]) && !empty($_POST["cpass"]) ) 
			{
				require '../common/connect.php';
				$fname=$_POST["fname"];
				$lname=$_POST["lname"];
				$name=$fname.$lname;
				$email=$_POST["email"];
				$number=$_POST["num"];
				$pass1=$_POST["pass"];
				$pass2=$_POST["cpass"];
				if ($pass1==$pass2) 
				{
					$password=md5($pass1);
					echo"<br>";	
					$query="INSERT INTO users (name,email,phone,password) VALUES (?,?,?,?)";
					$stmt=$conn->prepare($query);
					$stmt->execute(array($name,$email,$number,$password));	
					header("location:signup.php?message=0");
				}
				else
				{
					header("location: signup2.html");
				}
				
			}
		}
		
						
 	
			
	?>
