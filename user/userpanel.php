<?php

	require '../common/portal.php';
	if(loggedin())
	{
			
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>home page</title>
	<!--for responsive  work -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<!--header starts here-->
	<header id="masthead" class="site-header" role="banner">
		
		<div class="middle-header-wrapper clearfix">
			<div class="tg-container">
			    <div class="logo-wrapper clearfix">
				 
					<div class="site-title-wrapper">
						<h1 id="site-title">
						<a href="http://sandip-sandipsandip.rhcloud.com/" title="helpdesk" rel="home">SANDIP</a>
						</h1>
						<p id="site-description">that you ll do say</p>
					</div>
				</div><!-- logo-end-->

				<div class="wishlist-cart-wrapper clearfix">
				</div>			
			</div>
		</div> <!-- middle-header-wrapper end -->

		<div class="bottom-header-wrapper clearfix">
			<div class="tg-container">

				
 			
				
			</div>
		 </div> <!-- bottom-header.wrapper end -->
	</header>		
	<!--header ends here-->
	<!-- nav bar starts here-->
	<nav class="navbar navbar-inverse" style="background-color: white;">
		<div class="container-fluid">
		    <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>                        
			    </button>
		      	  <a class="navbar-brand" href="#"><abbr><mark>WELCOME</mark></abbr></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		        <ul class="nav navbar-nav">
		            <li class="active" style="background-color: white;"><a href="homepage.html">Home</a></li>
		            <li class="dropdown">
		              <a class="dropdown-toggle" data-toggle="dropdown" href="#">socials <span class="caret"></span></a>
		              <ul class="dropdown-menu">
		                <li><a href="http://www.facebook.com" data-toggle="tooltip" title="facebook">facebook</a></li>
		                <li><a href="https://get.hike.in/" data-toggle="tooltip" title="hike">hike</a></li>
		                <li><a href="https://www.whatsapp.com/" data-toggle="tooltip" title="whatsapp">whatsapp</a></li>
		              </ul>
		            </li>
		            <li><a href="http://www.google.com" data-toggle="tooltip" title="google">google</a></li>
		            <li><a href="http://http://www.w3schools.com/" data-toggle="tooltip" title="w3schools">w3schools</a></li>
		        </ul>
		        <ul class="nav navbar-nav navbar-right">
		          	<li><a href="signup.html" data-toggle="tooltip" title="sign up"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
		          	<li><a href="index.html" data-toggle="tooltip" title="login" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		          	<li><a href="logout.php" data-toggle="tooltip" title="login" ><span class="glyphicon glyphicon-log-out"></span> logout</a></li>
		        </ul>
		    </div>
		 </div>
	</nav>
	<!-- nav bar ends here-->
	<!-- images -->
	<div class="container">
		<h2>WELCOME TO HELL</h2>
		            
		<div class="row">
		    <div class="col-md-4">
		      <a href="#" class="thumbnail" data-toggle="tooltip" title="image1">		          
		        <img src="bunty.jpg" class="img-circle" alt="Pulpit Rock" style="width:150px;height:150px">
		      </a>
		    </div>
		    <div class="col-md-4">
		      <a href="#" class="thumbnail" data-toggle="tooltip" title="image2">		        
		        <img src="sandy.jpg" class="img-circle" alt="Moustiers Sainte Marie" style="width:150px;height:150px">
		      </a>
		    </div>
		    <div class="col-md-4">
		      <a href="#" class="thumbnail" data-toggle="tooltip" title="image3">      
		        <img src="sandip.jpg" class="img-circle" alt="Cinque Terre" style="width:150px;height:150px">
		      </a>
		    </div>
		</div>
	</div>
	<!--end of  images-->

	<!-- footer starts here -->
	<footer id="colophon" style="text-align: center; height: 10px;width: 100%; background-color: black;">
		<div id="bottom-footer" class="clearfix">
			<div class="tg-container">
				<div class="copy-right">
					this page is by <a href="http://sandip-sandipsandip.rhcloud.com" rel="designer">sandip</a>.					
					<span class="sep"> | </span>
					sandip bhuyan <a href="https://facebook.com/" data-toggle="tooltip" title="@sandip">@sanidp</a>.				
				</div>
			</div>
		</div>
	 </footer>
	<!-- footer ends here-->
</body>
</html>

<?php

	}
	else{
		header('Location:index.php');
	}

?>

