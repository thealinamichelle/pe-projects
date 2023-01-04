<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Monster Adoption Agency</title>
	<meta name="description" content="[[insert description]]">
	<meta property="og:image" content="images/default.png">

	<link rel="stylesheet" href="css/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Shrikhand&display=swap" rel="stylesheet">

<style> @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Shrikhand&display=swap'); </style>

	<?php 

	// $overlays = ["#f5097d", "#f0769a", "#f36a65", "#be8adb", "#f1c547"];

	$dreamlu = [
		"id" => "4002",
		"name" => "Dreamlu",
		"favoritefood" => "wall boogers",
		"age" => "4",
		"adoption status" => true, 
		"portrait" => "images/dreamlu.jpg",
		"color" => "#f5097d",
	];


	$lima = [
		"id" => "4003",
		"name" => "Lima Bean",
		"favoritefood" => "lima beans",
		"age" => 9,
		"adoption status" => false, 
		"portrait" => "images/lima.jpg",
		"color" => "#f0769a",
	];

	$reads = [
		"id" => "4004",
		"name" => "Miss Readsalot",
		"favoritefood" => "the yummiest pages from Cook's Illustrated",
		"age" => 5,
		"adoption status" => false, 
		"portrait" => "images/reads.jpg",
		"color" => "#f36a65",
	];

	$fragoo = [
		"id" => "4005",
		"name" => "Fragoo",
		"favoritefood" => "rocks",
		"age" => 8,
		"adoption status" => false, 
		"portrait" => "images/fragoo.jpg",
		"color" => "#be8adb",
	];

	$codey = [
		"id" => "4006",
		"name" => "Codey",
		"favoritefood" => "Mountain Dew Code Red",
		"age" => 7,
		"adoption status" => false, 
		"portrait" => "images/codey.jpg",
		"color" => "#f1c547",
	];

	$banana = [
		"id" => "4007",
		"name" => "Mr. Banana",
		"favoritefood" => "tostones",
		"age" => 17,
		"adoption status" => false,
		"portrait" => "images/banana.jpg", 
		"color" => "#f5097d",
	];

	$grape = [
		"id" => "4007",
		"name" => "Grape",
		"favoritefood" => "Oysters",
		"age" => 2,
		"adoption status" => false,
		"portrait" => "images/grape.jpg",
		"color" => "#f0769a",
	];
	

	?>


</head>

<body>

	<main>
		<header>
			<h2>Monsters Available!</h2>
		</header>
		<inner-column>




		<?php

 	$monsters = [$dreamlu, $lima, $reads, $fragoo, $codey, $banana, $grape];

 

	foreach ($monsters as $monster) {
		// My attempt:
		// 	echo "<p id=" . $monster["id"] . ">Hi! My name is " . $monster["name"] . ". I am " . $monster["age"] . " years old. I love to eat " . $monster["favoritefood"] . "." . "</p>" ;
			


		// You can put individually into the system
			// $name = $monster["name"];
			// echo "<li class='monster'>" . $name . "</li>";

	 	$name = $monster["name"];
	 	$id = $monster["id"];
	 	$portrait = $monster["portrait"];
	 	$status = $monster["adoption status"];
	 	$color = $monster["color"];

// set human readable status message
	 	if ($status == 1) {
	 		$status = "<span>Adopted!</span>";
	 	} else {
	 		$status = "Needs a home!";
	 	}

// styling


	 	$story = "<p> I am " . $monster["age"] . " years old. I love to eat " . $monster["favoritefood"] . ". </p>"; 

	 	echo "<div class='monster' id='" . $id . "'>";


		echo "<adoption-card>".
					"<picture class='portrait'>" .   

					"<img src='" . $portrait . "' >" . "<div class='test' style='background-color:" . $color . ";'></div>" . "</picture>" . 

					"<div class='details'><h3 class='name'>" . $name . "</h3>" . 

					"<p class='story'>" . $story . "</p>" . 
					"<p class='status' style='background-color:". $color . ";'>" . $status . "</p>" . "</div></adoption-card>";


		echo "</div>";
}

	
?>






		</inner-column>
	</main>
</body>
</html>




















