<?php include("header.php") ?>

	<?php 

		//ROUTER
		$page = "home";
		$class = "home";
		if ( isset($_GET["page"]) ) {
			$page =$_GET["page"];
			$class = $page;
		}
		if ($page == "$page") {
			include("templates/$page/$page.php");
		}
	?>

<?php include("footer.php");?>
