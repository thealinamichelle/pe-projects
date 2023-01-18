<?php include("header.php") ?>
<?php include("functions.php") ?>


			<?php


/*ROUTER*/

$page = "home";


if ( isset($_GET["page"]) ) {

	$page = $_GET["page"];
}
// else {
// 	$page = "home";
//}



?>



<?php include("site-menu.php") ?>
</header>

<section class="page-content">
	<div class="inner-column">
<?php



	if ($page == "home") {
	include ('home.php');
	}

	if ($page == "list") {
	include ('trails.php');
	}

	if ($page == "details") {
	include ('details.php');
	}

	if ($page == null) {
	include ('home.php');
	}


?>



		</header>


<section>
	<div>


	</div>
</section>	





<?php include("footer.php") ?>