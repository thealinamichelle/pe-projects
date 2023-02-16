<?php include("header.php")?>
<?php include("sub-page-nav.php") ?>
<?php 

$sections = [
		[ 
		"heading" => " What do you want the visitors of your site to feel when they arrive?",
		"works" => [
			"I want them to be intriguided, ammused, feel joy and called to interaction with the page. I want the page to inspire exploration.",			
				]
		], 
				[ 
		"heading" => "What do you want them to think about you as a designer/developer?",
		"works" => [
			"I want to convey I am a lighthearted, humorous, creative capable of breaking down big concepts into fun visual narratives.",			
				]
		], 
				[ 
		"heading" => "What type of person are you and what type of problems are you interested in solving",
		"works" => [
			"I am naturally interested in solving visual questions, and simplifying tasks into systems. ",			
				]
		], 
				[ 
		"heading" => "Coming up with the words is hard. But try and come up with 3-5 adjectives?",
		"works" => [
			"about the page: fun, colorful, tactile, unique-discoveries, skillful",	
			"about myself: friendly, approachable, well-rounded",		
				]
		], 

	];

?>

<section class="goals inner-column">

<h1> style guide </h1>
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


<?php include("footer.php") ?>


