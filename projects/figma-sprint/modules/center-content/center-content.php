<inner-column>
<?php 
	myCheckandPrint($m, "a", "actions", "myLink");
	
?>


	<p class='<?=$m["eyebrow-class"]?>'><?=$m["eyebrow"]?></p>	
	<h1><?=$heading?></h1>
	<p class='<?=$m["beard-class"]?>'><?=$beard?></p>	
	
	<?php 
		if (isset($picture) ) {
			echo "<picture class='face'><img src='images/$picture' ></picture>"; 
		}

		myCheckandPrint($m, "a", "actions2", "myButton");
	?>
	
</inner-column>

