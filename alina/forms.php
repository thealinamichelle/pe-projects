<?php include("header.php")?>
<?php include("sub-page-nav.php") ?>
<?php 

$sections = [//A
		[ //B
		"heading" => "Retirement Calculator",
		"url" =>"projects/e4p/retirement.php",
		"works" => [//C
		
			"Calculate how many years until retirement.",			
				]//C
		], //B
				[ //D
		"heading" => "Area of a Rectangular Room",
		"url" =>"projects/e4p/area-calc.php",
		"works" => [//E
		
			"project description",			
				]//E
		],//D

		[ //Dthree
		"heading" => "Hello There",
		"url" =>"projects/e4p/hello.php",
		"works" => [//E
		
			"a greeting from the browser",			
				]//E
		],//D


		[ //Dfour
		"heading" => "Character Counting",
		"url" =>"projects/e4p/character-counting.php",
		"works" => [//E
		
			"project description",			
				]//E
		],//D


		[ //Dfive
		"heading" => "Printing Quotes",
		"url" =>"projects/e4p/quotes.php",
		"works" => [//E
		
			"project description",			
				]//E
		],//D

		[ //Dsix
		"heading" => "Madlib",
		"url" =>"projects/e4p/madlib.php",
		"works" => [//E
		
			"project description",			
				]//E
		],//D

		[ //Dseven
		"heading" => "Simple Math",
		"url" =>"projects/e4p/simple-math.php",
		"works" => [//E
		
			"project description",			
				]//E
		],//D
		[ //Deight
		"heading" => "Pizza Party",
		"url" =>"projects/e4p/pizza-party.php",
		"works" => [//E
		
			"project description",			
				]//E
		],//D
		[ //nine
		"heading" => "Paint Calculator",
		"url" =>"projects/e4p/paint-calc.php",
		"works" => [//E
		
			"project description",			
				]//E
		],//D
		[ //ten
		"heading" => "Self Checkout",
		"url" =>"projects/e4p/self-checkout.php",
		"works" => [//E
		
			"project description",			
				]//E
		],//D

	]; //A
?>

<section class="projects-page inner-column">


<?php foreach($sections as $section) { ?>
	<!-- <div class="form-box"> -->
	<a href="<?=$section["url"]?>">
		<div class="project-card form-card">
			
			<h2 class="project-title"> 
				<?=$section["heading"]?>
			</h2>


		</div>
	</a>

<?php } ?>

</section>


<?php include("footer.php") ?>


