<?php include("header.php") ?>


	<?php //echo "?" . queryString();?>

	<?php 

		//ROUTER
		$page = "home";
		if ( isset($_GET["page"]) ) {
			$page =$_GET["page"];
		}
		if ($page == "$page") {
			include("content/pages/$page/$page.php");
		}
	?>




<?php include("footer.php") ?>