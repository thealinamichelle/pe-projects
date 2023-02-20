
<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>

<?php
/*ROUTER*/
	$page = "home";

	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
		$footerNav = "";
		$line = "nav-top";
	}
	else {
		$page = "home";
	}
	if ($page == "home") {
		$line = "nav-bottom";
	}
?>
<body>
	
	<main>
<?php 
if ($page !== "home") {
	include ("content/modules/navigation/navigation.php");
}

?>

	