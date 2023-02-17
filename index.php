<?php include("header.php") ?>

 <nav-yellow-index>

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

</nav-yellow-index>

<?php include("footer-index.php") ?>