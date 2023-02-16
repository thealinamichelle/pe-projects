<?php include("header.php") ?>



 <!-- <nav-yellow-index> -->




	
<?php echo "?" . queryString();?>

<hr>

<?php 


	//ROUTER
		$page = "home";
		if ( isset($_GET["page"]) ) {
			$page =$_GET["page"];
		}

		if ($page == "home") {
			echo "home";
		}

		if ($page == "style-guide") {
			echo "style-guide";
		}

		if ($page == "resume") {
			echo "resume";
		}

		if ($page == "projects") {
			echo "work";
		}

		if ($page == "goals") {
			echo "goals";
		}

?>




 <?php //getpageparts($page); ?> 







<!-- </nav-yellow-index> there is styling here -->
<?php include("footer-index.php") ?>