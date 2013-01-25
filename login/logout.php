<?php
	require("../include/functions.php");
	
	session_start();
	session_destroy();
	redirect("../signin.php");
?>