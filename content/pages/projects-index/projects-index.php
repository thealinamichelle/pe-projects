<?php 
	$json = file_get_contents('content/data/projects.json'); 
		//passes in the json data
	$projData = json_decode($json, true); 
		//do you want this to be an associative array?
	// $jsoncolor = file_get_contents('content/data/color.json'); 
	// $colorbook = json_decode($jsoncolor, true); 


?>

<?php /*function namesRainbow($colorbook) {
	$currentColor = 0;
		foreach ($colorbook as $color) {

			if ($currentColor >= count($color) - 1) {
				$currentColor = 0;
			} else {
				$currentColor = $currentColor + 1;
			}
	}
}*/
?>

<?php 




?>


	<?php foreach($projData as $section) {
		
		$projurl = $section["url"];
		$heading = $section["heading"];
		$image = 'content/images/project-preview/' . $section["image"];
		$details = $section["details"];
		$target= strtok($section["heading"], " ");



		if (file_exists($image)) {
		    $projPreview = 
		    			'<picture>
						<img src="' . $image . '">
						</picture>';
		} else {
		    //$projPreview = "The file $image does not exist";
				$projPreview = '<div class="photo-stand-in"></div>';
		}

		if ($target == "PHP") {
			$target = "";
			$queryString = "?page=";
		} else {
			$queryString = "";
		}
	?>






	<div class="card <?php //namesRainbow($colorbook)?>">
		<a href="<?=$queryString?><?=$projurl?>" target="<?=$target?>">
				<?=$projPreview?>

			<div class="details overlay">
				<h2 class="attention-voice">
					<?=$heading?>
				</h2>
				
				<p><?=$details?></p>
			</div>
		</a>
	</div>
<?php } ?>
