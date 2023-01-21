<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>

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

	<body class="<?=$page?>">
		<header>


