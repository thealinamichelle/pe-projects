<?php include("header.php") ?>

<section class="">
	<div class="inner-column">

<h1>
	Quotes
</h1>


	</div>
	</section>	


<section class="">
	<div class="inner-column">



<!-- Example output:
What is the quote? These aren’t the droids you’re looking for. Who said it? Obi-Wan Kenobi Obi-Wan Kenobi says, “These aren’t the droids you’re looking for.”





Analysis
Input:
author
quote
Output:
author says “inputted string surrounded by quotes” 




Process:
insert author and quote with “says”,
surround string with quotes.
Testing:
Inputs
quotes - if quotes are detected at the beginning and end of the string
prompt user
to remove them.
ignore them
Print if user chooses the option to ignore.
Numbers - proceed as normal
No input - display request input message.
Display: What is the quote? 
Receive quote input.
Store quote input somewhere. 
Display Who said it?
Receive author input.
Store author input somewhere. 
Retrieve quote.
Read quote and look for "" at the start and end. 
- If detected ask user permission to remove. 
- - If yes remove start and end "" and proceed. 
- - If no ignore start and end "" 
Retrieve author.
Retrieve filler text ", says"
Ignore double quotes and display: author says , " quote input" 
Stop ignore double quotes.  -->


<?php

$author = null;
$quote = null;
$message = null;


	if ( isset($_POST["quotesSubmit"]) ){

		if ( isset($_POST["author"]) ){
			$author = $_POST["author"];
		}

		if ( isset($_POST["quote"]) ){
			$quote = $_POST["quote"];
		}

$message = $author . 'says , "' . $quote . '"';


	}




?>



<form method="POST">



<label for="quote">What is the quote?</label>
 <textarea name="quote" id="quote" rows="10" col="4"></textarea>

 <label>Who is the author? </label>
<input type="text" name="author">


<button type="submit" name="quotesSubmit">Submit</button>

</form>
<p> <?=$message?>
</p>

	</div>
</section>





<?php include("footer.php") ?>