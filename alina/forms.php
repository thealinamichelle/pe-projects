<?php include("header.php")?>
<?php include("sub-page-nav.php") ?>
<?php 

$sections = [//A
		[ //B
		"heading" => "Retirement Calculator",
		"url" =>"projects/e4p/one/index.php",
		"works" => [//C
			"<picture><img src='https://peprojects.dev/images/square.jpg'></picture>",
			"project description",			
				]//C
		], //B
				[ //D
		"heading" => "Area of a Rectangular Room",
		"url" =>"projects/e4p/two/index.php",
		"works" => [//E
			"<picture><img src='https://peprojects.dev/images/square.jpg'></picture>",
			"project description",			
				]//E
		],//D

		[ //Dthree
		"heading" => "Hello There",
		"url" =>"projects/e4p/two/index.php",
		"works" => [//E
			"<picture><img src='https://peprojects.dev/images/square.jpg'></picture>",
			"project description",			
				]//E
		],//D


		[ //Dfour
		"heading" => "Character Counting",
		"url" =>"projects/e4p/two/index.php",
		"works" => [//E
			"<picture><img src='https://peprojects.dev/images/square.jpg'></picture>",
			"project description",			
				]//E
		],//D


		[ //Dfive
		"heading" => "Printing Quotes",
		"url" =>"projects/e4p/five/index.php",
		"works" => [//E
			"<picture><img src='https://peprojects.dev/images/square.jpg'></picture>",
			"project description",			
				]//E
		],//D

	];//A
?>

<section class="projects-page inner-column">


<?php foreach($sections as $section) { ?>
	<a href="<?=$section["url"]?>"><div class="project-card">
	<h2 class="project-title"> 
		<?=$section["heading"]?>
	</h2>

	<ol class="project-details">
		<?php foreach($section["works"] as $work) {?>
		
		<li> <?=$work?>
		</li>
	<?php }?>
	</ol>
</div>
</a>

<?php } ?>

</section>


<?php include("footer.php") ?>


