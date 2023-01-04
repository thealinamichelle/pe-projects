<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width">
		<meta name="viewport" content="width=device-width, intial-scale=1">

		<title>[[insert title]]</title>
		<meta name="description" content="[[insert description]]">
		<meta property="og:image" content="images/default.png">

		<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<main>
	<header>
		<h1>Monsters</h1>
	</header>
<inner-column>
	<div class="adoption card">

		
		<?php $array = ["one", 1, "three", "cat", true, false];

		// id
		// name
		// favorite food
		// age
		// adoption status

		$dreamlu = [
			"id" => "4002",
			"name" => "Dreamlu",
			"favoritefood" => "wall boogers",
			"age" => "4",
			"adoption status" => true, 
		];

		echo "<p>" . "I have " . $array[0] . " " . $array[3] . "." . "</p>";


		// paragraph 
		// monster's name favorite food is 
		// They are years old
		// Give it an ID

		$story = $dreamlu["name"] . " is " . $dreamlu["age"] . " years old. Her favorite food is " . $dreamlu["favoritefood"] . ".";

		$template = "<p id=" . $dreamlu["id"] . ">" . $story . "</p>";

		echo $template;
?>

	</div>


<div class="fruit card">

<?php

	$fruits = ["apple", "banana", "carrot", "diakon", "eggplant", "grape", "fruit"];

	echo "<ol>";
	//  for each thing inside of fruit do as this codeblock says
	foreach ($fruits as $fruit){
		echo "<li>" . $fruit . "</li>";
	}

	echo "</ol>";
?>

</div>

<div class="testing-ground card">

<?php

	$civilizationSong = ["Don't want no bright lights, false teeth, doorbells, landlords, I make it clear.", "Don't want no penthouse, bathtub, streetcars, taxis, noise in my ear.", "Don't want no jailhouse, (shotgun) fish hooks (golf clubs) I got my spears."];

	echo "<ul>";
	foreach ($civilizationSong as $bingo){
		echo "<div><p> So bongo, bongo, bongo, I don't want to leave the congo, oh no no no no no Bingo, bangle, bungle, I'm so happy in the jungle, I refuse to go." .  "<span style='font-weight:600;'>" . $bingo . "</span> (So, no matter how they coax him) I'll stay right here." . "</p></div>";
	};

	echo "</ul>"
?>

</div>
</inner-column>
</main>
</body>
</html>




















