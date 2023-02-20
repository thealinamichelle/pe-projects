
<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>

<?php
/*ROUTER*/
	$page = "home";

	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
		$footerNav = "";
		$line = "border-bottom: var(--yellow) 1px solid; flex-flow: row-reverse wrap;";
	}
	else {
		$page = "home";
	}
	if ($page == "home") {
		$line = "border-top: var(--yellow) 1px solid; flex-flow: row wrap;";
	}
?>
<body>
	
	<main>
<?php 
if ($page !== "home") {
	include ("content/modules/navigation/navigation.php");
}

?>

	