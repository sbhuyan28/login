


<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<style type="text/css">
	
		
		div.sandy {
			 			position: fixed;
    					bottom: 200px;
    					right: 550px;
    					top: 200px;
   						width: 200px;
   						height: 300px;
    					
    					padding-left: 10px;
    					padding-top: 10px;
    					
					}	
	</style>
</head>
<body >
<div>

<img src="/user/Joker-Wallpaper-35.jpg" style="height: 100%;width: 100%">
	<div class="sandy">
		

			<form action="login.php" method="POST">
				<div style="color:green"><?php
					if (isset($_GET['message'])) {					
								echo "logged out successfully";

					}

					?></div><br>
				email: <br><input type="email" name="user" ><br><br>
				password:<br> <input type="password" name="pass" ><br><br>

  				
  				<br><br>
  				<input type="submit" name="submit" value="login">
  				<br>
  				<h5>if want to sign up</h5><br>
  				<a href="signup.php"><B>signup</B></a>
		

				<br><br>
			</form>



		

		
	</div>
</img>
</div>
</body>
</html>

