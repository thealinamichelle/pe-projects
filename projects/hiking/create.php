<?php include("head.php")?>
<?php include("cities.php")?>
<?php

// JSON?


$formsubmitted = isset($_POST["add"]);
//BASICS
$name = "";
$nameError = false;
$street = "";
$streetError = "";
$city = "";
$cityError = "";
$zip = "";
$zipError = "";
$trailHours = null;
// UTILITIES
$ulitiies = null;
//TRAIL PATH DETAILS
$difficulty = null;
$trailLength = null;
$loop = null;
//ENVIROMENT
$features = null;
$path = null;
$hazard = null;
//SUBMISSIONS IMAGES AND EXTRAS
$trailSignImage = null;
$trailImages = null;
$notes = null;
//THANKS FOR YOUR SUBMISSION
$message = "Add a hiking trail";

radioInitialization("loop", "unknown");
radioInitialization("dogs-allowed", "unknown");
radioInitialization("leash-rules", "unknown");
radioInitialization("owner-control", "unknown");
radioInitialization("dog-walkers", "unknown");
radioInitialization("bikes", "unknown");


if ( $formsubmitted ) {//A

	 if ( isset($_POST["name"])) {//B
	  $name = $_POST["name"];
	 	 if (strlen($name) > 0) {//C
	 	 	$hasName = true;
	 	 }//C
	 	  else {//D
	 	 	$nameError = "ERROR: Please add trail name.";
	 	 }//D
	}//B

	 $street = $_POST["street"];
		 if (strlen($street) > 0) {//D
		 	$hasStreet = true;
		 }//D
		  else {//E
		 	$streetError = "** Please add street address";
		 }//E

	 $city = $_POST["city"];
		 if ($city == false) {//B
		 	$hasCity = true;




		 }//B
		  else {//C
		 	$cityError = "** Please choose the approximate city.";
		 }//C

	 $zip = $_POST["zip"];
		 if (strlen($zip) > 0) {//F
		 	$hasZip = true;
		 }//F
		  else {//G
		 	$zipError = "**Please add zip code";
		 }//G
	$message = "Thank you for helping other dogs find new places to explore!";




	formsetup ("trailHours");
	formsetup ("ulitiies");
	formsetup ("difficulty");
	formsetup ("trailLength");
	radioSetup("loop");

// DOGS
	radioSetup("dogs-allowed");
	radioSetup("leash-rules");
	radioSetup("owner-control");
	radioSetup("dog-walkers");

//ENVIROMENT
	radioSetup("bikes");
	formsetup ("features");
	formsetup ("path");
	formsetup ("hazard");

//SUBMISSIONS
	formsetup ("trailSignImage");
	formsetup ("trailImages");
	formsetup ("notes");
	 	 	

	 	 	//CREATE ENTRY
			$newTrail = [
	 				"name" => $name,
	 			];
	 	 	var_dump($newTrail);

	 	 	//transform it to JSON
	 	 	$trailJson = Json_encode($newTrail);

	 	 	//SAVE ENTRY	 	 	
	 	 	file_put_contents("trails.json", $trailJson);

		 }//C

	 	else {//D
	 	 	$nameError = "Please the trail name.";

}// END OF - IF FORM SUBMITTED

?>

<h1 class="form-title"><?=$message?></h1>
<br>
<div class="">
	<section class="">

		<form method="POST">

<!-- BASICS -->



<field>
	<label for="name">Name of Trail</label><input type="text" name="name" value="<?=$name?>">
	<?php if ($nameError) { ?>
		<p class="error"><?=$nameError?></p>
	<?php } ?>
</field>


<field>
  <div>
    <label for="street">Street address</label>
    <input type="text" id="street" name="street" autocomplete="street" required enterkeyhint="next" placeholder="street" value="<?=$street?>"></input>
  </div>
  <div>
    <label for="city">City</label>
    <select id="city" name="city" enterkeyhint="done" required>
			<?php
			foreach($cities as $selectCity){
			  $sCity = ($selectCity == $_POST['city'])? "Selected='selected'":"";
			  echo "<option   $sCity>$selectCity</option>";
			}
			?>
		</select>
	</div>
	<div>
    <label for="zip">ZIP or postal code (optional)</label>
    <input class="zip" id="zip" name="zip" autocomplete="postal-code" enterkeyhint="next" placeholder="zip" value="<?=$zip?>">
  </div>
</field>



<!-- 		<fieldset>
				<legend>Trailhead Address</legend>
				<div>
				<label for="">street</label>
				<input type="address" name="address[]" id="street" value="<?=$street?>">
			</div>
				<div>
				<label for="">city</label>
				<input type="text" name="address[]" id="city" value="<?=$city?>">
			</div>
				<div>
				<label for="zip">zip</label>
				<input type="text" name="address[]" id="zip" value="<?=$zip?>">
			</div>
			</fieldset> -->

			<field class="hours">
				<div>
				<label for="trailHours">What are the posted trail hours?</label>
			</div>
			<div>
				<input type="time" name="trailHours[]" value="00:00"> through
				<input type="time" name="trailHours[]" value="00:00">
			</div>
			</field>


			<fieldset>
				<legend>Are these utilities provided?</legend>
				<div><input type="checkbox" id="bathrooms" name="ulitiies[]" value="bathrooms">
				<label for="bathrooms">bathrooms</label></div>

				<div><input type="checkbox" id="water" name="ulitiies[]" value="water">
				<label for="water">drinking-fountain</label></div>

				<div><input type="checkbox" id="trashcans" name="ulitiies[]" value="trashcans">
				<label for="trashcans">trashcans</label></div>

				<div><input type="checkbox" id="parking" name="ulitiies[]" value="parking">
				<label for="parking">parking</label></div>
			</fieldset>

			<field>
				<label for="difficulty">How Difficult is the trail?</label>
				<input type="range" name="difficulty" id="difficulty" min="1" max="10">
			</field>

			<field>
				<label for="trailLength">Trail length in miles</label>
				<input type="number" name="trailLength" min=".01" placeholder="min .01 miles">
			</field>

			<fieldset>
				<legend>Does the trail loop?</legend>
				
					<div>
					<input type="radio" name="loop" id="yes" value="yes" required <?= ischecked("loop", "yes")?> ><label for ="yes">yes</label></div>

					<div>
					<input type="radio" name="loop" id="no" value="no" required <?= ischecked("loop", "no")?> ><label for ="no">no</label></div>

					<div>
					<input type="radio" name="loop" id="unknown" value="unknown" required <?= ischecked("loop", "unknown")?> ><label for ="dont-know">unknown</label></div>
			</fieldset>

<!-- DOGS -->
			<fieldset>
				<legend>Are dogs allowed on the trail?</legend>
					<div>
					<input type="radio" name="dogs-allowed" id="yes" value="yes" required <?= ischecked("dogs-allowed", "yes")?> ><label for ="yes">yes</label></div>

					<div>
					<input type="radio" name="dogs-allowed" id="no" value="no" required <?= ischecked("dogs-allowed", "no")?> ><label for ="no">no</label></div>

					<div>
					<input type="radio" name="dogs-allowed" id="unknown" value="unknown" required <?= ischecked("dogs-allowed", "unknown")?> ><label for ="dont-know">unknown</label></div>
			</fieldset>

			<fieldset>
				<legend>Does signage require dogs to be on leash</legend>
					<div>
					<input type="radio" name="leash-rules" id="yes" value="yes" required <?= ischecked("leash-rules", "yes")?> ><label for ="yes">yes</label></div>

					<div>
					<input type="radio" name="leash-rules" id="no" value="no" required <?= ischecked("leash-rules", "no")?> ><label for ="no">no</label></div>

					<div>
					<input type="radio" name="leash-rules" id="unknown" value="unknown" required <?= ischecked("leash-rules", "unknown")?> ><label for ="dont-know">unknown</label></div>
			</fieldset>

			<fieldset>
				<legend>Does signage require dogs be under owners control</legend>
				
					<div>
					<input type="radio" name="owner-control" id="yes" value="yes" required <?= ischecked("owner-control", "yes")?> ><label for ="yes">yes</label></div>

					<div>
					<input type="radio" name="owner-control" id="no" value="no" required <?= ischecked("owner-control", "no")?> ><label for ="no">no</label></div>

					<div>
					<input type="radio" name="owner-control" id="unknown" value="unknown" required <?= ischecked("owner-control", "unknown")?> ><label for ="dont-know">unknown</label></div>
			</fieldset>

			<fieldset>
					<legend>Have you seen professional dog walkers on this trail?</legend>

						<div>
						<input type="radio" name="dog-walkers" id="yes" value="yes" required <?= ischecked("dog-walkers", "yes")?> ><label for ="yes">yes</label></div>

						<div>
						<input type="radio" name="dog-walkers" id="no" value="no" required <?= ischecked( "dog-walkers", "no")?> ><label for ="no">no</label></div>

						<div>
						<input type="radio" name="dog-walkers" id="unknown" value="unknown" required <?= ischecked("dog-walkers", "unknown")?> ><label for ="dont-know">unknown</label></div>
			</fieldset>

<!-- ENVIROMENT -->

			<fieldset>
				<legend>Are bikes permitted?</legend>

					<div>
					<input type="radio" name="bikes" id="yes" value="yes" required <?= ischecked("bikes", "yes")?> ><label for ="yes">yes</label></div>

					<div>
					<input type="radio" name="bikes" id="no" value="no" required <?= ischecked("owner-control", "no")?> ><label for ="no">no</label></div>

					<div>
					<input type="radio" name="bikes" id="unknown" value="unknown" required <?= ischecked("bikes", "unknown")?> ><label for ="dont-know">unknown</label></div>
			</fieldset>


			<fieldset>
				<legend>Are any of the following features of the trail?</legend>
				<div><input type="checkbox" id="ocean-view" name="features[]" value="ocean-view">
				<label for="ocean-view">ocean view</label></div>

				<div><input type="checkbox" id="creeks" name="features[]" value="creeks">
				<label for="creeks">creeks</label></div>

				<div><input type="checkbox" id="rivers" name="features[]" value="rivers">
				<label for="rivers">rivers</label></div>

				<div><input type="checkbox" id="city-views" name="features[]" value="city-views">
				<label for="city-views">city views</label></div>

				<div><input type="checkbox" id="nature-views" name="features[]" value="nature-views">
				<label for="nature-views">nature isolated views</label></div>

				<div><input type="checkbox" id="bird-watching" name="features[]" value="bird-watching">
				<label for="bird-watching">bird watching</label></div>

				<div><input type="checkbox" id="deer-watching" name="features[]" value="deer-watching">
				<label for="deer-watching">deer watching</label></div>

				<div><input type="checkbox" id="small-critter" name="features[]" value="small-critter">
				<label for="small-critter">small critter views (rabbits, squirrels etc)</label></div>
			</fieldset>

			<fieldset>
				<legend>Can any part of the trail path be described as the following:</legend>

				<div><input type="checkbox" id="sandy" name="path[]" value="sandy">
				<label for="sandy">sandy</label></div>

				<div><input type="checkbox" id="loose" name="path[]" value="loose">
				<label for="loose">loose</label></div>

				<div><input type="checkbox" id="muddy" name="path[]" value="muddy">
				<label for="muddy">muddy</label></div>

				<div><input type="checkbox" id="slippery" name="path[]" value="slippery">
				<label for="slippery">slippery</label></div>

				<div><input type="checkbox" id="well compacted" name="path[]" value="well compacted">
				<label for="well compacted">well compacted</label></div>

				<div><input type="checkbox" id="paved" name="path[]" value="paved">
				<label for="paved">paved</label></div>

				<div><input type="checkbox" id="woody" name="path[]" value="woody">
				<label for="woody">woody</label></div>

				</fieldset>




				<fieldset>
					<legend>Have you seen any of the following on the trail?</legend>

					<div><input type="checkbox" id="ticks" name="hazard[]" value="ticks">
					<label for="ticks">ticks</label></div>

					<div><input type="checkbox" id="snakes" name="hazard[]" value="snakes">
					<label for="snakes">snakes</label></div>

					<div><input type="checkbox" id="coyotes" name="hazard[]" value="coyotes">
					<label for="coyotes">coyotes</label></div>

					<div><input type="checkbox" id="bee hives" name="hazard[]" value="bee hives">
					<label for="bee hives">bee hives</label></div>

					<div><input type="checkbox" id="mountain lions" name="hazard[]" value="mountain lions">
					<label for="mountain lions">mountain lions</label></div>

					<div><input type="checkbox" id="fox tail" name="hazard[]" value="fox tail">
					<label for="fox tail">fox tail</label></div>
				</fieldset>

<!-- SUBMISSIONS -->


			<field>
				<div class="image-submit"> <label for="trailSignImage">Submit images of trailhead signs</label><input type="image" src="images/sbutton.svg" alt="submit image" name="trailSignImage"></div>
			</field>

			<field>
				<div class="image-submit"> <label for="trailImages">Submit images of the trail</label><input type="image" src="images/sbutton.svg" alt="submit image"  name="trailImages"></div>
			</field>

			<field>
				<label for="notes">Any other helpful details you'd like to provide?</label>


				<textarea name="notes" id="notes" rows="10" cols="50" maxlength="1000" placeholder="advice for other hikers with dogs to navigate this trail" spellcheck></textarea>
			</field>

		<button name="add" type="submit">Submit</button>
			</form>


			<section class="result">
				<p>
					<?=$message?>

					<?php show($_POST);	?>

				</p>
			</section>
		</form>
	</section>
</div>




<?php include("footer.php")?>
