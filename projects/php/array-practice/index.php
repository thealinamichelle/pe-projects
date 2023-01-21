<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width">
	<meta name="viewport" content="width=device-width, intial-scale=1">

	<title>Array and String Practice</title>
	<meta name="description" content="[[insert description]]">
	<meta property="og:image" content="images/default.png">

	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="inner-column">

		<header>
			<h1>ArrayStuff</h1>
		</header>

		<section class="notes">
			<h2>Notes on Arrays</h2>
			<?php


// this is the program:
			$price = 34;
			$tax = $price * .10;
			$total = $price + $tax;
// this is what is printed, shoing only the total
			echo "<h1>" . $total . "</h1>";


// if (when the condition is starting and ending) {where the code is starting and ending}

			$percent = 30;



			echo "<h2>Percent tip:" . $percent . "%</h2>";

			if ($percent > 20) {
				echo "Wowza - what a tippa!";
			}

			$tip = $total * ($percent/100);

			$total = $total + $tip;

			echo "<p> $" . $total . "</p>";
			echo "<p> // the right side operators will happen first. So the total on the right are parsed by the parser first? Why is is the right side first?</p>

			<p>// - Derrick says to think of it as how javascrip works: </p>
			<p> // Doing stuff to get it ready </p>
			<p>// Creates the reference </p>
			<p>// then pointing the reference to the new value. </p>
			<p>// that's how it works in Javascript, even if that's not how it works in PHP</p>

			<p>// Why isn't a semicolon required after the curly brackets?</p>"


// NORMAL ARRAYS

		// $thing = [1, true, "dog", "cat"];


// ASSOCIATIVE ARRAYS
// $object = [ 
			// "id" => " term", 
			// "key" => "value?" ,
			// "example" => numbers,
			// "second_example" => true,
			// "third_example" => 120,
			// "another_array_within_an_array" => ["another" , "don't forget the commas"],
	// ]
// 	one set of brackets determines an array. Arrays that build key associations are called associative arrays. The "=>" shows a key value pairs/	


// With normal arrays we can find associations by installing a [number] next to the variable like so: $newidea[2]
































			?>
		</section>




		<section class="testing">
			<h2>Testing Area</h2>
			<?php

		// I am not sure why this isn't working



// $services = ["nothing", "test", "walks"];




			$services = [
				"test" => 15,
				"walks" => [
				
					[
					"walk duration" => 15,
					"price" => 20,
					],
					[
						"15 minutes" => 30,
						"20 minutes" => 30,
					],					
 
				],
			];

			echo $services["walks"][1]["20 minutes"];
$array = ["Cow", 165];

echo $array[0] . " " . $array[1] . "°";
			$cocktail = [
				"name" => "Screwdriver",
				"temp" => 165,
				"ingredients" => [
					[
						"name" => "Vodka",
						"ratio" => 1,
					], 
					[
						"name" => "Orange",
						"ratio" => 2,
					],
				],
			];

			 echo "<pre>";
			 echo "<code>";
			 print_r($cocktail);
			 echo "</pre>";
			 echo "</code>";

echo $cocktail["ingredients"][0]["name"];


// "visits" => [				
			// 	"30 mins" =>  30,
			// 	"60 mins" => 50,
			// 	],

			// 	"walks" => [
			// 		"15 mins" = 20, 
			// 		"30 mins" = 24,
			// 		"45 mins" = 28,
			// 		"60 mins" = 30, 
			// 	], 
			// 	[
			// 	"visits" => [
			// 	"30 mins" =>  30,
			// 	"60 mins" => 50,]
			// 	]
			// ]; 




					
				// "15 mins" = 20, 
				// "30 mins" = 24,
				// "45 mins" = 28,
				// "60 mins" = 30, 
			// 		[
			// 			"walks" => [
			// 				"15" => "$20",
			// 				"30" => "$24",
			// 				"45" => "$28",
			// 				"60" => "$30",
			// 			],
			// 		],

			// 		[
			// 			"Visits" => [
			// 				[
			// 					"30" =>  "$30",
			// 					"60" => "$50",
			// 				],
			// 			],
			// 		],
			// 		[
			// 			"Boarding" => "$70",
			// 			"Daycare"=>"$35",
			// 			"Dog Training" => "$80",
			// 			"Other Fees" => [
			// 				[
			// 					"Holiday Fee" => "1$0",
			// 					"Local Travel Fee" => "$10",
			// 					"Travel Fee" => "$25",
			// 				],
							
			// 			],

			// 		],
			// 	],
			// ]; 


			// echo "<pre>";
			// echo "<code>";
			// print_r($array);
			// echo "</pre>";
			// echo "</code>";
?>

		</section>



		<section class="worked">
			<h2>Working Area</h2>
			<?php 

			$itemArray = ["15 minute walk"
			, "30 minute walk"
			, "45 minute walk"
			, "60 minute walk"
			, "Boarding"
			, "Pet Visit 1 hour"
			, "Daycare"
			, "Dog Training"
			, "Holiday Fee "
			, "Local Travel Fee"
			, "Travel Fee"];



			$unitpriceArray = ["$20", "$24", "$28", "$30", "$70", "$30", "$35", "$80", "$10", "$10", "$25"
		];



		echo "services due:" . " for " .  date("F d Y") . "<br>" . $itemArray[1] . " = " . $unitpriceArray[1] ;

		?>

		<br><br>

		<?php

		echo "services due:" . " for " .  date("F d Y") . "<br>" . $itemArray[6] . " = " . $unitpriceArray[6] ;
		?>
	</section>
</div>
</div>

</body>
</html>




















