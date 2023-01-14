<?php include("header.php") ?>

<section class="">
	<div class="inner-column">

<h1>
	Character Counting
</h1>
	</div>
	</section>	


<section class="">
	<div class="inner-column">


<!-- Requirements:
Create a program that prompts for an input string and displays output that shows the input string and the number of characters the string contains.
Analysis
Input: string
Output: display output of string and number of characters it contains
Process: initiating counting, counting numbers in string
Testing
inputs
numbers - proceed
special characters - proceed
nothing - displays a message that “nothing is the number count, but that it’s something is better than nothing. So there should be something in the input”.
max number of characters? - max number based off of 10% under max computing power.
Displays a request for input of garbledygook of letters/words/numbers and a start switch.
Name is stored somewhere.
Start switch initiates:
Read the garbledygook.
Count the individual characters in garbledygook. 
Displays number of characters. 
 -->

<?php


$theString = null;
$message = null;



if ( isset($_POST["submit"]) ) {
	if ( isset($_POST["theString"]) ) {
		$theString = $_POST["theString"];
	}

		if ( isset($_POST["theString"]) ) {
		$theString = $_POST["theString"];
	}
	
	$charactercount = iconv_strlen($theString);
	$stringLength = strlen($theString);
	$message = 'You entered "' .  $theString . '." The string length is ' . $stringLength . '. and the character count is ' . $charactercount . '.';
}
?>



<form method="POST">


<label>
	<p>Enter a string</p>
<input type="text" name="theString" value=""> 
</label>



<button type="submit" name="submit">Submit</button>

</form>

<p>
<?=$message?>
</p>


	</div>
</section>



<?php include("footer.php") ?>
