<?php

session_start();
$_SESSION['sandip'] = null;
header("location: index.php?message=0");


?>