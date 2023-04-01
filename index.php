<?php include("header.php") ?>


	<?php //echo "?" . queryString();?>

	<?php 

		//ROUTER
		$page = "home";
		$class = "home";
		if ( isset($_GET["page"]) ) {
			$page =$_GET["page"];
			$class = $page;
		}
		if ($page == "$page") {
			echo "<inner-column class='$class'>";
			include("content/pages/$page/$page.php");
			echo "</inner-column>";
		}
	?>

<?php include("footer.php");




?>
