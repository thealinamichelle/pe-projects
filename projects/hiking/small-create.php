<?php include("head.php")?>
<?php include("cities.php")?>
<?php



$hikeData = file_get_contents('newcreate.json');
var_dump($hikeData);

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
$notes = "";



//SUBMISSIONS IMAGES AND EXTRAS
//THANKS FOR YOUR SUBMISSION
$message = "Add a hiking trail";



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

	 $notes = $_POST["notes"];
		 if (strlen($notes) > 0) {//F
		 	$hasNotes = true;
		 }//F
		  else {//G
		 	$notesError = "**Please add a note";
		 }//G

	$message = "Thank you for helping other dogs find new places to explore!";




//SUBMISSIONS

	 	 	

	 	 	//CREATE ENTRY
			$newCreate = [
	 				"name" => $name,
	 				"steet" => $street,
	 				"city" => $city,
	 				"zip" => $zip,
	 				"notes" => $notes,

	 			];
			// var_dump($newCreate);

			//transform it to JSON
			$smallJson = Json_encode($newCreate);

			//SAVE ENTRY	 	 	
			file_put_contents("newcreate.json", $smallJson);

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
