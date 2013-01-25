<?php
        // Database conection parameters (need to be global)
        $Host = "localhost";
        $Database = "responder";
        $User     = "responder";
        $Password = "local";

	// URL of usubscribe script (without parameters)
	$SelfPath = "http://www.yoursite.com/responder";
	$SiteName = "AlstraSoft Autoresponder Pro";

    $_SESSION['UserID'] = (isset($_SESSION['UserID'])?$_SESSION['UserID']:'');

    if (isset($_REQUEST)) {
        foreach ($_REQUEST as $var => $value) {
            ${$var} = $value;
        }
    }
?>