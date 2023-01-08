<?php include("header.php")?>
<?php 

$sections = [
	

		[ 
		"heading" => "5 Year Plus Plan",
		"tasks" => [
			"Own a home in Los Angeles or Long Beach",
			"Either be a parent or in the process of becoming a parent.",
			"Employed in a job that is creative and collaborative.",
			"Working for a company that supports healthy work-life balance through:" . 
				"<ul>" . 
					"<li>" . "unlimited PTO" . 
					"<li>" . "working from home" . 
					"<li>" . "support systems for nuerodivergent employees." .
				"</ul>",
			"Learn how to make a quilt.",
			"built a fun mobile game."

				]

		], 


		[ 
		"heading" => "1 Year Steps towards Self Actualisation",
		"tasks" => [
			"Accepted a job in relevant field earning more than $50,000",
			"Build robust healthy habits such as daily exercise (running, hiking, strength training)",
			"Provide pet boarding once every six months and cease all dog walking.",
			"Gifted three friends handmade dolls.",
			"Feel confident in spending time with family and friend's small children",
			"Worked with an ADHD coach to help navigate social and professional environments.",
			"continue to learn other coding language or get more indepth with php and javascript"
		] 
	],

	[ 
		"heading" => "End of the course ",
		"tasks" => [
			"a website that demonstrates creativity, strong sense of design and engage hiring managers",
			"a set of creative design/coding projects to work on",
			"a portfolio with a collection of well drawn and executed svg animations", 
			"confidence in my coding and design skills",
			"a plan to continue to build on those skills",
		] 
	],

	[ 
		"heading" => "90 Day Plan",
		"tasks" => [
			"build a system to better identify project priority",
			"redesign my site so it's more professional",
			"work on svg animations",
			"enough knowledge to fix my invoice generator's tendency to delete rows of text.", 
			"confidence in strengths as a person, friend, student and classmate",
			"offer assistance on some back end PE stuff"
		] 
	],

			[ 
		"heading" => "Coursework Daily Goals",
		"tasks" => [
			"Set Up Journal",
			"Stand Up",
			"Mondays: 30 minutes in Substack",
			"Post Visual Inspiration",
			"Current Lesson",
			"Post One a Day Drawing",
			"Milestones or document them in TickTick",
			"Review Features",
			"Sync in Transmit",
			"Commit the days work",
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
		<?php foreach($section["tasks"] as $task) {?>
		
		<li> <?=$task?>


				<ol class="goal-subtask"> 

					
					<?php foreach($section["tasks"][$subtasks] as $subtask) {?>

						<li> <?=$subtask?></li>
						<?php }?>
				</ol>
				
		</li>

	<?php }?>
	</ol>
</div>

<?php } ?>



