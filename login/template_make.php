<?php 
	$template->set_file("template_main", "../main.htm");
	$template->set_var("sitename",$SiteName);
	$template->set_var("path","../");
    $UserID = $_SESSION['UserID'];
	$query="select * from users where users_id='$UserID'";
	$db->query($query);
	$db->next_record();

	$template->set_var("campaign","Active campaign: ".$db->f("users_username")."@".$SiteName);
	$template->parse("main","template_main");
	$template->p("main");
?>