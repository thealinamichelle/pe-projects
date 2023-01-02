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
<inner-column>
<h1>Monsters</h1>



	<div class="adoption">

		
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
	</div>
</div>
</inner-column>

</body>
</html>




















