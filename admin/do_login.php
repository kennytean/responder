<?php
	require("../include/globals.php");
	require("../include/db_mysql.php");
	require("../include/template.php");
	require("../include/functions.php");
	require("../include/validation.php");
	
	$db = new DB_Sql;

//    $password = $_REQUEST['password'];
	// obtinem variabilele de login
	if (! isset($password))
		$password = "";

	$md5password = md5($password);
//echo "<pre>password: ". $password . "</pre>";
//echo "<pre>md5password: ". $md5password . "</pre>";

	$query = "SELECT * 
				FROM settings
				WHERE settings_name = 'administrator_password' AND settings_value = '$md5password'";
	$db->query($query);

//echo "<pre>rows: " . $db->num_rows() . "</pre>";

	if ($db->num_rows() != 1)
	{
//        echo "<pre>index.php</pre>";
//        exit;
		// utilizator invalid
		// redirectare catre formularul de login
		redirect("index.php");
	}
	else
	{
		// utilizator valid
		// incepem o sesiune si inregistram variabile de sesiune
		session_start();
		$db->next_record();

//		session_register("Administrator");
		$_SESSION['Administrator'] = true;
//        echo "<pre>"; print_r($db->next_record()); echo "</pre>";
//        echo "<pre>admin: " . $_SESSION['Administrator'] . "</pre>";
//        echo "<pre>main.php</pre>";
//        exit;

		// redirectare catre pagina principala (de lucru)
		redirect("main.php");
	}
?>