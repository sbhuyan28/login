<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	<style type="text/css">
			div.sandy {
			 			position: fixed;
    					bottom: 200px;
    					right: 500px;
    					top: 150px;
   						width: 250px;
   						height: 400px;
    					
    					padding-left: 10px;
    					padding-top: 10px;
    					
					}	
	</style>
</head>
<body>
<div>

<img src="/user/Joker-Wallpaper-35.jpg" style="height: 100%;width: 100%">
	<div class="sandy">
		

			<form  method="POST" action="insert.php">
				firstname:<br><input type="text" name="fname" ><br><br>
				lastname:<br><input type="text" name="lname" ><br><br>
				email:<br><input type="email" name="email" ><br><br>
				phone no.:<br><input type="text" name="num" ><br><br>
				password: <br><input type="password" name="pass" ><br><br>
				confirm password:<br><input type="password" name="cpass" ><br><br>
					<div style="color:green"><?php
					if (isset($_GET['message'])) {					
								echo "Registeration Successful";

					}

					?></div><br>

  				<input type="submit" value="sign up" name="submit"></input><br>


  				<a href="index.php">login</a>
		

				<br><br>
			</form>



		

		
	</div>
</img>
</div>
</body>
</html>