<?php include("header.php")?>
<?php 

$sections = [
		[ 
		"heading" => "Skills",
		"works" => [
			"detail",//"name of employer",
			"detail",//"years",
			"detail",//"job title",
			"detail",//"accomplishments" - your strongest, most relevant accomplishments.
			"detail",//Lead with strong action verbs and follow with an accomplishment rather than a task
			"detail",//Employers are interested in what you’ve achieved, not just the tasks you’ve done. When possible, use numbers to measure your success.
				]
		], 
				[ 
		"heading" => "Education",
		"works" => [
			"detail",//"name of employer",
			"detail",//"years",
			"detail",//"job title",
			"detail",//"accomplishments" - your strongest, most relevant accomplishments.
			"detail",//Lead with strong action verbs and follow with an accomplishment rather than a task
			"detail",//Employers are interested in what you’ve achieved, not just the tasks you’ve done. When possible, use numbers to measure your success.
				]
		], 
				[ 
		"heading" => "Employment History",
		"works" => [
			"detail",//"name of employer",
			"detail",//"years",
			"detail",//"job title",
			"detail",//"accomplishments" - your strongest, most relevant accomplishments.
			"detail",//Lead with strong action verbs and follow with an accomplishment rather than a task
			"detail",//Employers are interested in what you’ve achieved, not just the tasks you’ve done. When possible, use numbers to measure your success.
				]
		], 

	];

?>

<section class="goals inner-column">


<?php foreach($sections as $section) { ?>
	<div class="goal-card">
	<h2 class="goal-title"> 
		<?=$section["heading"]?>
	</h2>

	<ol class="goal-tasks">
		<?php foreach($section["works"] as $work) {?>
		
		<li> <?=$work?>
		</li>
	<?php }?>
	</ol>
</div>

<?php } ?>

</section>

<!-- 

		 
 
			

		 

		 
























<?php include("footer.php")?>


