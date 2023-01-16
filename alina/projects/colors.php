<?php

	function sayHiToAlina() {
		// one
		// two
		// three... stuff
		echo "Hi, Alina! <br>";
	}
	sayHiToAlina();
	sayHiToAlina();
	sayHiToAlina();
	sayHiToAlina();
	sayHiToAlina();
	sayHiToAlina();

	function greetUser($userName) {
		// one
		// two
		// three... stuff
		echo "Hi, $userName! <br>";
	}

	greetUser("Miguel");
	greetUser("Ash");

	echo "..... <br>";



	$database = [
	  	"colors" => ["red", "blue", "orange", "yellow"],
	  	"names" => ["Derek", "Miguel", "Ivy", "Alina", "Steve", "Valentine"],
	];

	foreach ($database['colors'] as $color) {
		echo $color . ",";
	}

	function namesRainbow($names, $colors) {
		$currentColor = 0;

		foreach ($names as $name) {
			include('name-card.php');

			if ($currentColor >= count($colors) - 1) {
				$currentColor = 0;
			} else {
				$currentColor = $currentColor + 1;
			}
		}
	}

	// in some page section
	namesRainbow($database["names"], $database["colors"]);


	$person = [
		"age" => 21, // change me!
	];

	function oldEnough($age) {
		if ($age >= 18) {
			return true;
		} else {
			return false;
		}
	}

	function renderMessage($age) {
		if ( oldEnough($age) ) {
			return "You are old enough to watch X and Pearl.";
		} else {
			return "You are NOT old enough to watch X and Pearl....";
		}
	}
	// you don't want this messaged rendered right here!!! but - instead
	// somewhere else (maybe you don't even know yet) - in the website somewhere!
	// this function might not even be in the same file !!! 
?>

<div style="
	background: <?namesRainbow($database["colors"])?>;
	">
<p>dljkf;klsajf;kdsjafkldjsa;fkjadsk;fj</p>
</div>

<!-- like down here -->
<section>
	<p><?=renderMessage( $person["age"] )?></p>
</section>