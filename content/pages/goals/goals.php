<?php 

	$json = file_get_contents('content/data/goals.json'); 
		//passes in the json data
	$goalsData = json_decode($json, true); 
		//do you want this to be an associative array?
?>

<inner-column>


<?php foreach($goalsData as $section) { ?>
	<div class="card">
	<h2 class="attention-voice"> 
		<?=$section["heading"]?>
	</h2>

	<ol class="details">
		<?php foreach($section["tasks"] as $task) {?>
			<li><?=$task?></li>
	<?php }?>
	</ol>
</div>

<?php } ?>