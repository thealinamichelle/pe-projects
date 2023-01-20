<?php include("head.php")?>
<?php






$message = null;

if ( isset($_POST["add"]) ) {
	
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

	<label for="name">Name</label><input type="text" name="name">
	<label for="trail-address">Trail Address</label><input type="text" name="trail-address">


<!-- NUMBER INPUT -->
	<label for="gps">Trail-head GPS Coordinates</label><input type="number" name="gps">

	<label for="trail-hours">Trail Hours Posted</label><input type="number" name="trail-hours">

Are Dogs Allowed?
		<div class="radio-row">
		<label for ="yes">yes</label>
				<input type="radio" name="dogs-allowed" id="yes" value="yes" required <?= ischecked("dog-allowed", "yes")?> >

		<label for ="no">no</label>
				<input type="radio" name="dogs-allowed" id="no" value="no" required <?= ischecked("dog-allowed", "no")?> >

			<label for ="dont-know">unknown</label>
					<input type="radio" name="dogs-allowed" id="unknown" value="unknown" required <?= ischecked("dogs-allowed", "unknown")?> >
		</div>

Does signage require dogs to be on leash
		<div class="radio-row">
			<label for ="yes">yes</label>
					<input type="radio" name="leash-rules" id="yes" value="yes" required <?= ischecked("leash-rules", "yes")?> >

			<label for ="no">no</label>
					<input type="radio" name="leash-rules" id="no" value="no" required <?= ischecked("leash-rules", "no")?> >

			<label for ="dont-know">unknown</label>
					<input type="radio" name="leash-rules" id="unknown" value="unknown" required <?= ischecked("leash-rules", "unknown")?> >
		</div>

Does signage require dogs be under owners control
		<div class="radio-row">
			<label for ="yes">yes</label>
					<input type="radio" name="owner-control" id="yes" value="yes" required <?= ischecked("owner-control", "yes")?> >

			<label for ="no">no</label>
					<input type="radio" name="owner-control" id="no" value="no" required <?= ischecked("owner-control", "no")?> >

			<label for ="dont-know">unknown</label>
					<input type="radio" name="owner-control" id="unknown" value="unknown" required <?= ischecked("owner-control", "unknown")?> >
		</div>

	<div class="image-submit"> <label for="trail-sign-image">Submit images of trailhead signs</label><input type="image" src="images/sbutton.svg" alt="submit image" height="20rem" width="20rem" name="trail-sign-image"></div>


<label for="trail-length">Trail Length</label><input type="text" name="trail-length">

Does the trail loop?
		<div class="radio-row">
			<label for ="yes">yes</label>
					<input type="radio" name="loop" id="yes" value="yes" required <?= ischecked("loop", "yes")?> >

			<label for ="no">no</label>
					<input type="radio" name="loop" id="no" value="no" required <?= ischecked("loop", "no")?> >

			<label for ="dont-know">unknown</label>
					<input type="radio" name="loop" id="unknown" value="unknown" required <?= ischecked("loop", "unknown")?> >
		</div>


Are bikes permitted?

	<div class="radio-row">
		<label for ="yes">yes</label>
				<input type="radio" name="bikes" id="yes" value="yes" required <?= ischecked("bikes", "yes")?> >

		<label for ="no">no</label>
				<input type="radio" name="bikes" id="no" value="no" required <?= ischecked("owner-control", "no")?> >

		<label for ="dont-know">unknown</label>
				<input type="radio" name="bikes" id="unknown" value="unknown" required <?= ischecked("bikes", "unknown")?> >
	</div>



	<div class="checkbox-flow">
				<input type="checkbox" name="bikes" id="unknown" value="unknown">
	</div>



<fieldset>
  <legend>Have you seen any of the following on the trail?</legend>

    <input type="checkbox" id="ticks" name="hazard" value="ticks">
    <label for="ticks">ticks</label>

    <input type="checkbox" id="snakes" name="hazard" value="snakes">
    <label for="snakes">snakes</label>

    <input type="checkbox" id="coyotes" name="hazard" value="coyotes">
    <label for="coyotes">coyotes</label>

		<input type="checkbox" id="bee hives" name="hazard" value="bee hives">
    <label for="bee hives">bee hives</label>

    <input type="checkbox" id="mountain lions" name="hazard" value="mountain lions">
    <label for="mountain lions">mountain lions</label>

    <input type="checkbox" id="fox tail" name="hazard" value="fox tail">
    <label for="fox tail">fox tail</label>
  </fieldset>
</form>



<fieldset>
  <legend>Can any part of the trail path be described as the following:</legend>

    <input type="checkbox" id="sandy" name="hazard" value="sandy">
    <label for="sandy">sandy</label>

    <input type="checkbox" id="loose" name="hazard" value="loose">
    <label for="loose">loose</label>

    <input type="checkbox" id="muddy" name="hazard" value="muddy">
    <label for="muddy"><muddy/label>

    <input type="checkbox" id="slippery" name="hazard" value="slippery">
		<label for="slippery">slippery</label>

		<input type="checkbox" id="well compacted" name="hazard" value="well compacted">
		<label for="well compacted">well compacted</label>

		<input type="checkbox" id="paved" name="hazard" value="paved">
		<label for="paved">paved</label>

		<input type="checkbox" id="woody" name="hazard" value="woody">
		<label for="woody">woody</label>

  </fieldset>

How Difficult is the trail?
<input type="range" name="difficulty" id="difficulty" min="1" max="10">




<fieldset>
  <legend>Are any of the following features of the trail?</legend>
		<input type="checkbox" id="ocean-view" name="features" value="ocean-view">
		<label for="ocean-view">ocean view</label>

		<input type="checkbox" id="creeks" name="features" value="creeks">
		<label for="creeks">creeks</label>

		<input type="checkbox" id="rivers" name="features" value="rivers">
		<label for="rivers">rivers</label>

		<input type="checkbox" id="city-views" name="features" value="city-views">
		<label for="city-views">city views</label>

		<input type="checkbox" id="nature-views" name="features" value="nature-views">
		<label for="nature-views">nature isolated views</label>

		<input type="checkbox" id="bird-watching" name="features" value="bird-watching">
		<label for="bird-watching">bird watching</label>

		<input type="checkbox" id="deer-watching" name="features" value="deer-watching">
		<label for="deer-watching">deer watching</label>

		<input type="checkbox" id="small-critter" name="features" value="small-critter">
		<label for="small-critter">small critter views (rabbits, squirrels etc)</label>
</fieldset>




<fieldset>
  <legend>Are these utilities provided?</legend>
		<input type="checkbox" id="bathrooms" name="ulitiies" value="bathrooms">
		<label for="bathrooms">bathrooms</label>

		<input type="checkbox" id="water" name="ulitiies" value="water">
		<label for="water">drinking-fountain</label>

		<input type="checkbox" id="trashcans" name="ulitiies" value="trashcans">
		<label for="trashcans">trashcans</label>

		<input type="checkbox" id="parking" name="ulitiies" value="parking">
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

<div>
<label for="notes">Any other helpful details you'd like to provide?</label>
</div>
<div>
<textarea name="notes" id="notes" rows="10" cols="50" maxlength="1000" placeholder="advice for other hikers with dogs to navigate this trail"spellcheck></textarea>
</div>

	<button name="add" type="submit">Submit</button>
</form>


	<section class="result">
		<p>
			<?=$message?>


<?php show( $_POST ); ?>

		</p>
	</section>
</form>
</section>
</div>





<?php include("footer.php")?>
