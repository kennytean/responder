<?php
	// verificam daca avem pornita vreo sesiune
	// in caz negativ, redirectam spre pagina de login
//	session_register("Administrator");
    $_SESSION['Administrator'];
//    echo "<pre>admin: " . $_SESSION['Administrator'] . "</pre>";
//    echo "<pre>authentication.php</pre>";
//    exit;

	
	if (empty($_SESSION['Administrator']))
		redirect("index.php");	
?>