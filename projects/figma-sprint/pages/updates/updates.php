<?php 

	$json = file_get_contents('data/updates.json'); 
	$updateData = json_decode($json, true); 
?>

<updates>


<?php 

	foreach($updateData as $h) {

		$type = $h['type'];
		$pname = $h['page-name'];
		$file = $h['file-name'];

	 include("$type/$pname/$file");
	}


?>

Here I am!
</updates>


<?php include('modules/hero/hero.php')?>