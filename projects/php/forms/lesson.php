
<?php

// $stuff = $_POST;
// print_r($stuff);
// var_dump($stuff);

$guests = "30";
$berries = "30";

// function to test if a variable is set. if the variable is set then we will show if submitted

if ( isset($_POST["sub"])) {
	// echo "<p class='feedback'>Thank you for submitting the form!</p>";

	if (isset($_POST["guests"])) {
		$guests = $_POST["guests"];
	}
	if (isset($_POST["berries"])) {
		$berries = $_POST["berries"];		
	}
}

$total = $guests * $berries;
	echo "<p>$total</p>";
?>


floatval(//take a number into a number with a decimal, turns it into a number)
<div>
<div>

	<!-- CSS with forms and ensuring naming? Needs a name in order to submit -->
	<form method="POST">
		<p>Calculating the Berries</p> 
		<div class="field">
		<label>number of guests</label>
		<input type="number" name="guests" value ="<?=$guests?>" min="0" required>
		<!-- //min="0" max="10" -->
		</div>

		<div class="field">
		<label>berries per guest</label>
		<input type="number" name="berries" value ="<?=$berries?>" min="0" required>
		</div>
<!-- why not a value of 0? -->
		<button type="submit" name="sub">
			Push me
		</button>
		<!--Super Global: behind the scenes data that is going to the server, there is a variable on the server that is storing that information
			see: php -->

	</form>
</div>


<style>
form {
	max-width: 400px;
}


label, input, button {

/*	border: 1px solid green;*/
}

.field {

/*	border: solid 1px blue;*/
	display:flex;
	flex-direction: column;
}


.field label {
	font-size: 20px;
	margin-bottom: 4px;
}

button[type="submit"], .field + .field {
	margin-top: 20px;
/*	border: orange solid 1px;*/
}

/*get request is from the server*
post is sending to the server/
*/ 
.feedback {
	
}

</style>


<div>
	<h2>  </h2>
	<forms>

	</forms>
</div>






<div>
	<h2>  </h2>
	<forms>

	</forms>
</div>




<!-- <div style="

display: flex;
flex-direction: column;
gap: 2rem;
max-width: 400px;

">



<div>
	<h2> standard forms </h2>
	<form>
		<input type="text"> //default//
		<input type="number"> //gets mad about dashes, built in validation//
		<input type="email">
		<input type="password"> 	//built in functionality with these types of inputs//
		<input type="range">
	</form>
</div>

<div>

	<h2> types of buttons </h2>
	<form>


		//TYPES OF BUTTONS//
		<input type="submit">

		<button>button</button>

		<button type="submit">Submit</button> //DERRICK FAVORITE BECAUSE ITS CLEAR //


	</form>
</div>

//PLACEHOLDERS AND LABELS//
<div>
	<h2> Placeholder and Labels </h2>
	<form>


		<p>something about the form</p>
		<input type ="number" placeholder ="number"> //placeholder will disappear after user enters info. can be confusing//

		<label>Age</label>
		<input type="number">


	</form>
</div>


//what type of display type? : inline block by default//
//input doesnt inherit the font of the page// -->






















</div>