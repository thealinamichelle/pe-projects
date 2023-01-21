<?php include("head.php")?>
<?php


$name = null;
$gps = null;
$trailHours = null;
$gps = null;
$trailHours = null;
$trailLength = null;
$features = null;
$hazard = null;
$path = null;
$difficulty = null;
$ulitiies = null;
$notes = null;
$trailSignImage = null;
$trailImages = null;
$city = null;
$zip = null;
$street = null;
$nameError = false;
$formvalue = null;
// $lat = "";
// $lng = ""; 





$message = null;

if ( isset($_POST["add"]) ) {

	formsetup ("gps");
	formsetup ("trailHours");
	formsetup ("gps");
	formsetup ("features");
	formsetup ("hazard");
	formsetup ("path");
	formsetup ("difficulty");
	formsetup ("ulitiies");
	formsetup ("notes");
	formsetup ("trailSignImage");
	formsetup ("trailImages");

	if ( isset($_POST["address"]) ) {
	$street = $_POST["address"][0];
	$city = $_POST["address"][1];
	$zip = $_POST["address"][2];

	}




	if ( isset($_POST["name"])) {
	 $name = $_POST["name"];
		 if (strlen($name) > 0) {
		 	$hasName = true;
		 } else {
		 	$nameError = "ERROR: Please add trail name.";
		 }
	}


	if (isset($_POST["gps"]) ) {
		$lat = $_POST["gps"][0];
		$lng = $_POST["gps"][1];
	}


	//formsetup ("trailHours");
// if ( isset($_POST["trailHours"]) ) {
// $trailHours = $date->format('l jS \o\f F Y h:i:s A')
// number_format($sqMeter, 2 , ".", ".");


// // Prints something like: Wednesday 19th of October 2022 08:40:48 AM
// echo $date->format('l jS \o\f F Y h:i:s A'), "\n";

// /* use the constants in the format parameter */
// // prints something like: Wed, 19 Oct 2022 08:40:48 +0000
// echo $date->format(DateTimeInterface::RFC2822), "\n";
// 

//}


// 	formsetup ("trailLength");
// if ( isset($_POST["trailLength"]) ) {

// }



}




radioIsSet("add", "dogs-allowed", "unknown");
radioIsSet("add", "leash-rules", "unknown");
radioIsSet("add", "owner-control", "unknown");
radioIsSet("add", "loop", "unknown");
radioIsSet("add", "bikes", "unknown");
radioIsSet("add", "dog-walkers", "unknown");

?>

<h1 class="form-title">Add a hiking trail</h1>
<br>
<div class="">
	<section class="">

		<form method="POST">

			<!-- TEXT INPUT -->
			<field>
				<label for="name">Name of Trail</label><input type="text" name="name" value="<?=$name?>">
				<?php if ($nameError) { ?>
				<p class="error"><?=$nameError?></p>
			<?php } ?>
			</field>

			<fieldset>
				<legend>Trailhead Address</legend>
				<label for="">street</label>
				<input type="text" name="address[]" id="street" value="<?=$street?>">

				<label for="">city</label>
				<input type="text" name="address[]" id="city" value="<?=$city?>">

				<label for="zip">zip</label>
				<input type="text" name="address[]" id="zip" value="<?=$zip?>">
			</fieldset>

			<fieldset>
				<!-- NUMBER INPUT -->
				<legend>What are the trailhead GPS coordinates? Latitude | Longitude</legend>
				<input type="number" name="gps[]" step="0.000001" min=-90 max=90 value="<?=$lat?>">
				<input type="number" name="gps[]" step="0.000001" min=-180 max=180 value="<?=$lng?>">
			</fieldset>
<?php
			//$address= getaddress($lat,$lng);
		  // if($address)
		  // {
		  //   echo "<p>$address</p>";
		  // }
		  // else
		  // {
		  //   echo "<p class='error'>Address Not found</p>";
		  // }

?>
			</field>



			<field>
				<label for="trailHours">What are the posted trail hours?</label><input type="time" name="trailHours[]" value="00:00"> through
				<input type="time" name="trailHours[]" value="00:00">
			</field>

			<fieldset>
				<legend>Are dogs allowed on the trail?</legend>
				<div class="radio-row">
					<label for ="yes">yes</label>
					<input type="radio" name="dogs-allowed" id="yes" value="yes" required <?= ischecked("dogs-allowed", "yes")?> >

					<label for ="no">no</label>
					<input type="radio" name="dogs-allowed" id="no" value="no" required <?= ischecked("dogs-allowed", "no")?> >

					<label for ="dont-know">unknown</label>
					<input type="radio" name="dogs-allowed" id="unknown" value="unknown" required <?= ischecked("dogs-allowed", "unknown")?> >
				</div>
			</fieldset>

			<fieldset>
				<legend>Does signage require dogs to be on leash</legend>
				<div class="radio-row">
					<label for ="yes">yes</label>
					<input type="radio" name="leash-rules" id="yes" value="yes" required <?= ischecked("leash-rules", "yes")?> >

					<label for ="no">no</label>
					<input type="radio" name="leash-rules" id="no" value="no" required <?= ischecked("leash-rules", "no")?> >

					<label for ="dont-know">unknown</label>
					<input type="radio" name="leash-rules" id="unknown" value="unknown" required <?= ischecked("leash-rules", "unknown")?> >
				</div>
			</fieldset>

			<fieldset>
				<legend>Does signage require dogs be under owners control</legend>
				<div class="radio-row">
					<label for ="yes">yes</label>
					<input type="radio" name="owner-control" id="yes" value="yes" required <?= ischecked("owner-control", "yes")?> >

					<label for ="no">no</label>
					<input type="radio" name="owner-control" id="no" value="no" required <?= ischecked("owner-control", "no")?> >

					<label for ="dont-know">unknown</label>
					<input type="radio" name="owner-control" id="unknown" value="unknown" required <?= ischecked("owner-control", "unknown")?> >
				</div>
			</fieldset>

			<field>
				<label for="trailLength">Trail length in miles</label>
				<input type="number" name="trailLength" min=".01">
			</field>

			<fieldset>
				<legend>Does the trail loop?</legend>
				<div class="radio-row">
					<label for ="yes">yes</label>
					<input type="radio" name="loop" id="yes" value="yes" required <?= ischecked("loop", "yes")?> >

					<label for ="no">no</label>
					<input type="radio" name="loop" id="no" value="no" required <?= ischecked("loop", "no")?> >

					<label for ="dont-know">unknown</label>
					<input type="radio" name="loop" id="unknown" value="unknown" required <?= ischecked("loop", "unknown")?> >
				</div>
			</fieldset>


			<fieldset>
				<legend>Are bikes permitted?</legend>

				<div class="radio-row">
					<label for ="yes">yes</label>
					<input type="radio" name="bikes" id="yes" value="yes" required <?= ischecked("bikes", "yes")?> >

					<label for ="no">no</label>
					<input type="radio" name="bikes" id="no" value="no" required <?= ischecked("owner-control", "no")?> >

					<label for ="dont-know">unknown</label>
					<input type="radio" name="bikes" id="unknown" value="unknown" required <?= ischecked("bikes", "unknown")?> >
				</div>
			</fieldset>


			<fieldset>
				<legend>Have you seen any of the following on the trail?</legend>

				<input type="checkbox" id="ticks" name="hazard[]" value="ticks">
				<label for="ticks">ticks</label>

				<input type="checkbox" id="snakes" name="hazard[]" value="snakes">
				<label for="snakes">snakes</label>

				<input type="checkbox" id="coyotes" name="hazard[]" value="coyotes">
				<label for="coyotes">coyotes</label>

				<input type="checkbox" id="bee hives" name="hazard[]" value="bee hives">
				<label for="bee hives">bee hives</label>

				<input type="checkbox" id="mountain lions" name="hazard[]" value="mountain lions">
				<label for="mountain lions">mountain lions</label>

				<input type="checkbox" id="fox tail" name="hazard[]" value="fox tail">
				<label for="fox tail">fox tail</label>
			</fieldset>




			<fieldset>
				<legend>Can any part of the trail path be described as the following:</legend>

				<input type="checkbox" id="sandy" name="path[]" value="sandy">
				<label for="sandy">sandy</label>

				<input type="checkbox" id="loose" name="path[]" value="loose">
				<label for="loose">loose</label>

				<input type="checkbox" id="muddy" name="path[]" value="muddy">
				<label for="muddy"><muddy/label>

					<input type="checkbox" id="slippery" name="path[]" value="slippery">
					<label for="slippery">slippery</label>

					<input type="checkbox" id="well compacted" name="path[]" value="well compacted">
					<label for="well compacted">well compacted</label>

					<input type="checkbox" id="paved" name="path[]" value="paved">
					<label for="paved">paved</label>

					<input type="checkbox" id="woody" name="path[]" value="woody">
					<label for="woody">woody</label>

				</fieldset>

				<field>
					<label for="difficulty">How Difficult is the trail?</label>
					<input type="range" name="difficulty" id="difficulty" min="1" max="10">
				</field>



				<fieldset>
					<legend>Are any of the following features of the trail?</legend>
					<input type="checkbox" id="ocean-view" name="features[]" value="ocean-view">
					<label for="ocean-view">ocean view</label>

					<input type="checkbox" id="creeks" name="features[]" value="creeks">
					<label for="creeks">creeks</label>

					<input type="checkbox" id="rivers" name="features[]" value="rivers">
					<label for="rivers">rivers</label>

					<input type="checkbox" id="city-views" name="features[]" value="city-views">
					<label for="city-views">city views</label>

					<input type="checkbox" id="nature-views" name="features[]" value="nature-views">
					<label for="nature-views">nature isolated views</label>

					<input type="checkbox" id="bird-watching" name="features[]" value="bird-watching">
					<label for="bird-watching">bird watching</label>

					<input type="checkbox" id="deer-watching" name="features[]" value="deer-watching">
					<label for="deer-watching">deer watching</label>

					<input type="checkbox" id="small-critter" name="features[]" value="small-critter">
					<label for="small-critter">small critter views (rabbits, squirrels etc)</label>
				</fieldset>




				<fieldset>
					<legend>Are these utilities provided?</legend>
					<input type="checkbox" id="bathrooms" name="ulitiies[]" value="bathrooms">
					<label for="bathrooms">bathrooms</label>

					<input type="checkbox" id="water" name="ulitiies[]" value="water">
					<label for="water">drinking-fountain</label>

					<input type="checkbox" id="trashcans" name="ulitiies[]" value="trashcans">
					<label for="trashcans">trashcans</label>

					<input type="checkbox" id="parking" name="ulitiies[]" value="parking">
					<label for="parking">parking</label>

				</fieldset>


				<fieldset>
					<legend>Have you seen professional dog walkers on this trail?</legend>

					<div class="radio-row">
						<label for ="yes">yes</label>
						<input type="radio" name="dog-walkers" id="yes" value="yes" required <?= ischecked("dog-walkers", "yes")?> >

						<label for ="no">no</label>
						<input type="radio" name="dog-walkers" id="no" value="no" required <?= ischecked( "dog-walkers", "no")?> >

						<label for ="dont-know">unknown</label>
						<input type="radio" name="dog-walkers" id="unknown" value="unknown" required <?= ischecked("dog-walkers", "unknown")?> >
					</div>
				</fieldset>

				<field>
					<label for="notes">Any other helpful details you'd like to provide?</label>


					<textarea name="notes" id="notes" rows="10" cols="50" maxlength="1000" placeholder="advice for other hikers with dogs to navigate this trail" spellcheck></textarea>
				</field>



			<field>
				<div class="image-submit"> <label for="trailSignImage">Submit images of trailhead signs</label><input type="image" src="images/sbutton.svg" alt="submit image" name="trailSignImage"></div>
			</field>

			<field>
				<div class="image-submit"> <label for="trailImages">Submit images of the trail</label><input type="image" src="images/sbutton.svg" alt="submit image"  name="trailImages"></div>
			</field>

		<button name="add" type="submit">Submit</button>
			</form>


			<section class="result">
				<p>
					<?=$message?>


					<?php show( $_POST );	?>

				</p>
			</section>
		</form>
	</section>
</div>




<?php include("footer.php")?>
