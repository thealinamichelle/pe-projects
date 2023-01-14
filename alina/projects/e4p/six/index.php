<?php include("header.php") ?>

<section class="">
	<div class="inner-column">

<h1>
	Madlib
</h1>

<p>Some text</p>
	</div>
	</section>	


<section class="">
	<div class="inner-column">

<?php 


$message = null;
$noun1 = null;
$noun2 = null;
$noun3 = null;
$adjective1 = null;
$adjective2 = null;
$verb = null;
$title = null;
$adverb = null;
$noun4 = null;
$name = null;
$professor = null;





if ( isset($_POST["submit"]) ){

	if ( isset($_POST["noun1"]) ){
		$noun1 = ucfirst($_POST["noun1"]);
	}
	if ( isset($_POST["noun2"]) ){
		$noun2 = $_POST["noun2"];
	}
	if ( isset($_POST["noun3"]) ){
		$noun3 = $_POST["noun3"];
	}
	if ( isset($_POST["noun4"]) ){
		$noun4 = $_POST["noun4"];
	}
	if ( isset($_POST["verb"]) ){
		$verb = $_POST["verb"];
	}
	if ( isset($_POST["adjective1"]) ){
		$adjective1 = $_POST["adjective1"];
	}
	if ( isset($_POST["adjective2"]) ){
		$adjective2 = $_POST["adjective2"];
	}
	if ( isset($_POST["adverb"]) ){
		$adverb = $_POST["adverb"];
	}
	if ( isset($_POST["name"]) ){
		$name = $_POST["name"];
	}
	if ( isset($_POST["professor"]) ){
		$professor = $_POST["professor"];
	}

$message = "$noun1, $noun2, and everything $adjective1. These were the ingredients chosen to create the $adjective2 little {$noun3}. But $professor $name $adverb added an extra ingredient to the concoction--
Chemical $noun4.";
//$verb

}

?>


<form method="POST">
	<label for="noun1">noun</label><input type="text" name="noun1" value="<?=$noun1?>" required>

	<label for="noun2">noun</label><input type="text" name="noun2" value="<?=$noun2?>" required>

	<label for="noun3">plural noun</label><input type="text" name="noun3" value="<?=$noun3?>" required>

	<label for="noun4">noun</label><input type="text" name="noun4" value="<?=$noun4?>" required>

	<label for="verb">verb</label><input type="text" name="verb" value="<?=$verb?>" required>

	<label for="adjective1">adjective</label><input type="text" name="adjective1" value="<?=$adjective1?>" required>

	<label for="adjective2">adjective</label><input type="text" name="adjective2" value="<?=$adjective2?>" required>

	<label for="adverb">adverb</label><input type="text" name="adverb" value="<?=$adverb?>" required>

	<label for="professor">title</label><input type="text" name="professor" value="<?=$professor?>" required>

	<label for="name">name</label><input type="text" name="name" value="<?=$name?>" required>

	<button name="submit" type="submit">Submit</button>

</form>


<p class="story" style="font-size: 40px"><?=$message?></p>


<!--
// $noun1, $noun2, and everything $adjective
// These were the ingredients chosen
// To $verb the $adjective2 little $noun3
// But $title $name $adverb
// Added an extra ingredient to the concoction--
// Chemical $noun4.



// Thus, The Powerpuff Girls were born
// Using their ultra-super powers
// Blossom, Bubbles, and Buttercup
// Have dedicated their lives to fighting crime
// And the forces of evil

// Sugar, spice, and everything nice
// These were the ingredients chosen
// To create the perfect little girls
// But Professor Utonium accidentally
// Added an extra ingredients to the concoction--
// Chemical X
// Thus, The Powerpuff Girls were born
// Using their ultra-super powers
// Blossom, Bubbles, and Buttercup
// Have dedicated their lives to fighting crime
// And the forces of evil



// missed input:
// display requested input message
// missed same input space after initiating submit equal to or greater than 3 times:
// - store filled inputs somewhere
// - retrieve snarky madlib file about impatient users
// - display snarky madlib
// - display large prompt to go back to users stored madlib.
// reset submit count
// leaves before end of madlib -
// (previous) store each madlib input entry somewhere immediately
// Display filled madlib when user returns
// Analysis
// Input:
// a noun, a verb, an adverb, and an adjective
// Output:
// story with strings
// Process:
// inserting strings into story
// Pre-Storage: Story with spaces for noun, verb, adjective, and adverbs.
// Separate databases for noun, verb, adjective, and adverb.
// Display request for a noun, verb, adjective, and adverb.
// As typed:
// 	Store verb input in verb section database. 
// 	Store adverb input in verb section database. 
// 	Store adjective input in verb section database. 
// 	Store noun input in verb section database. 
// Submit initiates: 
// 	Retrieve story. 
// 	Retrieve verb. 
// 	Retrieve adverb.
// 	Retrieve adjective.
// 	Retrieve noun.
// 	Insert noun into noun spaces. 
// 	Insert verb into verb  spaces. 
// 	Insert adjectives into adjectives spaces. 
// 	Insert adverb into adverb spaces. 
// 	Display new story.
-->


	</div>
</section>



<?php include("footer.php") ?>