
<?php 



?>

<section class="goals inner-column">


<?php foreach($sections as $section) { ?>
	<div class="goal-card">
	<h2 class="goal-title"> 
		<?=$section["heading"]?>
	</h2>

	<ol class="goal-tasks">
		<?php foreach($section["tasks"] as $task) {?>
		
		<li> <?=$task?>
		</li>
	<?php }?>
	</ol>
</div>

<?php } ?>

</section>


<!--  -->
























