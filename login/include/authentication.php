<?php
	// verificam daca avem pornita vreo sesiune
	// in caz negativ, redirectam spre pagina de login
	//session_register("UserID");
	
	if (empty($_SESSION['UserID']))
		redirect("../index.php");	
?>