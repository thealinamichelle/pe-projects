
<?php 

	$json = file_get_contents('content/data/goals.json'); 
		//passes in the json data
	$goalsData = json_decode($json, true); 
		//do you want this to be an associative array?
?>

<section class="goals inner-column">


<?php foreach($goalsData as $section) { ?>
	<div class="goal-card">
	<h2 class="goal-title"> 
		<?=$section["heading"]?>
	</h2>

	<ol class="goal-tasks">
		<?php foreach($section["tasks"] as $task) {?>
			<li><?=$task?></li>
	<?php }?>
	</ol>
</div>

<?php } ?>

</section>


<!--  -->
























