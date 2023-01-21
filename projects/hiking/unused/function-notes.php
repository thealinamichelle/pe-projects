<?php include("header.php") ?>
<?php include("functions.php") ?>


			<?php


/*ROUTER*/

$page = "home"; //default is home


if ( isset($_GET["page"]) ) {

	$page = $_GET["page"]; //url?page=string
}
else {
	$page = "home"; //default
}


function getpageparts($page){
	include($page . '.php'); //$page or other variable needs to be set in the query string with an 
	// $page = "home"; //default is home
	// if ( isset($_GET["page"]) ) {
	// 	$page = $_GET["page"]; //url?page=string
	// }
	// else {
	// 	$page = "home"; //default
	// 	}
}

?>



<?php include("site-menu.php") ?>
</header>

<section class="page-content">
	<div class="inner-column">
<?php



	if ($page == "home") {
	include ('home.php'); //if in the url query string "page=home" is present, then include the file home at this location in the html
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