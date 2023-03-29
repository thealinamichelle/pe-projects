<?php 

	$json = file_get_contents('data/home.json'); 
	$homeData = json_decode($json, true); 
?>




<?php 

	foreach($homeData as $h) {

		$type = $h['type'];
		$pname = $h['page-name'];
		$file = $h['file-name'];

	 include("$type/$pname/$file");
	}


?>
