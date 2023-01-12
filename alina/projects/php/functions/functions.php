<?php 
?>




<?php 

	// function can-be-any-name() {
	// 	echo 2+2;
	// }
// the () will tell it to run the code

?>







<ol class="monster-list">



<?php foreach ($monsters as $monster) {?>

<?php

	 	$name = $monster["name"];
	 	$id = $monster["id"];
	 	$portrait = $monster["portrait"];
	 	$status = $monster["adoption status"];
	 	$color = $monster["color"];
	 	$story = "I am " . $monster["age"] . " years old. I love to eat " . $monster["favoritefood"] . ".";

	 	// set human readable status message
	 	if ($status == 1) {
	 		$status = "<span>Adopted!</span>";
	 	} else {
	 		$status = "Needs a home!";
	 	}

	 ?> 



	<li class="monster">
		<monster-card id="<?=$id?>">
			<picture class="portrait">
				<img src="<?=$portrait?>" width='200'>
			</picture>

				<h2 class="name"><?=$name?></h2>

				<p class="story"><?=$story?></p>
				<p class="status"><?=$status?></p>
		
		</monster-card>
	</li>



<?php } ?>

</ol>