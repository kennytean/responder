<?php
	require("include/everything.php");
	
	//session_register("UserID");

	$template = new Template("templates/prospects");
	$db = new DB_Sql;
	
	// gasim numele utilizatorului logat
    $UserID = $_SESSION['UserID'];
	$query = "SELECT *
				FROM users 
				WHERE users_id = '$UserID'";
	$db->query($query);
	$db->next_record();
	$name = $db->f("users_name");
	
	// cream pagina din template
	$template->set_file("tpl_prospects", "prospects.tpl");
	$template->set_var("USER_NAME", $name);

	// crearea output-ului propriu-zis
	$template->parse("content", "tpl_prospects");
	require("template_make.php");
?>
