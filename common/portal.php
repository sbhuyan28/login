<?php

session_start();
ob_start();

function loggedin()
{
	if(isset($_SESSION['sandip']))
	{	
		if (!empty($_SESSION['sandip']))
		{
			return true;
		}
	}
	else{
		return false;
	}
}




?>