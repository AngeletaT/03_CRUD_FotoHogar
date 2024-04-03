<?php
    if ((isset($_GET['page'])) && ($_GET['page']==="controller_inmo") ){
		include("inc/top_page_inmo.php");
	}else{
		include("inc/top_page.php");
	}
	session_start();

    include("inc/header.php");

	include("inc/pages.php"); 

	include("inc/footer.php");

    include("inc/bottom_page.php");
?>
