<?php
	if(isset($_GET['page'])){
		switch($_GET['page']){
			case "homepage";
				include("inicio.html");
				break;
			case "about";
				include("about.html");
				break;
			case "controller_inmo";
				include("module/inmo/controller/".$_GET['page'].".php");
				break;
			case "explore";
				include("explore.html");
				break;
			case "explore-details";
				include("explore-details.html");
				break;
			case "services";
				include("services.html");
				break;
			case "team";
				include("team.html");
				break;
			case "blog";
				include("blog.html");
				break;
			case "blog-single";
				include("blog-single.html");
				break;
			case "contact";
				include("contact.html");
				break;
			case "404";
				include("inc/error".$_GET['page'].".php");
				break;
			case "503";
				include("inc/error".$_GET['page'].".php");
				break;
			default;
				include("inicio.html");
				break;
		}
	}else{
		include("inicio.html");
	}
?>