	<?php 

//figure out what page the user requested
//load the json data for that page
//loop over that data and show the right modules
	 

		//ROUTER
		$page = "home";
		$class = "home";

		$json = file_get_contents("data/$page.json"); 
		$pageData = json_decode($json, true);

		if ( isset($_GET["page"]) ) {

			$page =$_GET["page"];
			$class = $page;
		}

	?>


<?php include("header.php") ?>

<?php 	
	$json = file_get_contents("data/$page.json"); 
	$pageData = json_decode($json, true); 
?>




<?php 

	foreach($pageData as $module) {

		$modName = $module['module'];

		foreach($module["contents"] as $m) {

			$folder = $m['type'];
			$file = $m['file-name'];
			$heading = $m["heading"] ?? "$modName heading goes here";
			$teaser = $m["teaser"] ?? "teaser goes here";
			$innerStyle = $m["inner-style"] ?? "inner style goes here";
			$eyebrow = $m["eyebrow"] ?? "the eyebrow is missing";
			$beard = $m["beard"] ?? "the beard is missing";
			$mustache = $m["mustache"] ?? "the mustache is missing";
			$picture = $m["picture"] ?? "the picture is missing";

			
			if(isset($m["module-style"]) ) {
				$style = $m["module-style"];

				echo "<section class='$modName $style'>";
					include("$folder/$modName/$file");
				echo "</section>";
			}
			else {
				echo "<section class='$modName'>";
					include("$folder/$modName/$file");
				echo "</section>";
			}
		}
	}

?>




<?php include("footer.php");?>

