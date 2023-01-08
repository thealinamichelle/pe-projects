<?php
$pupswhohike = [
			"name" => "walkers",
			"years" => "years!",
			"job title" => "sad person",
			"accomplishments" => "I did stuff",
		];

		//"accomplishments" - your strongest, most relevant accomplishments.//Lead with strong action verbs and follow with an accomplishment rather than a task//Employers are interested in what you’ve achieved, not just the tasks you’ve done. When possible, use numbers to measure your success.

$doggiebliss = [
			"name" => "walkers1",
			"years" => "years!2",
			"job title" => "sad person3",
			"accomplishments" => "I did stuff4",
		];

		//"accomplishments" - your strongest, most relevant accomplishments.//Lead with strong action verbs and follow with an accomplishment rather than a task//Employers are interested in what you’ve achieved, not just the tasks you’ve done. When possible, use numbers to measure your success.

$employement = [$pupswhohike, $doggiebliss];


	foreach ($employement as $job) {

	 	$name = $job["name"];
	 	$years = $job["years"];
	 	$jtitle = $job["job title"];
	 	$jdone = $job["accomplishments"];



	 	?>


<section class="resume inner-column">
	<h2 class="resume-title, card-title">Employment</p>
	<div class="resume-card card">
<h3><?=$name?></h3>
	<ol class="resume-details">
		<li> <?=$years?>
		</li> 
		<li> <?=$jtitle?>
		</li> 
		<li> <?=$jdone?>
		</li> 
	</ol>
</div>

<?php } ?>

</section>

