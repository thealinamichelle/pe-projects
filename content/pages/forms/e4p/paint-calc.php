<?php include("head.php")?>

<?php

$message = null;
$width = 0;
$length = 0;
$x = 0;
$gallons = 0;
if ( isset($_POST["sub"]) ) {
	
	if ( isset($_POST["length"]) ) {
		$width = $_POST["length"];
	}
	if ( isset($_POST["width"]) ) {
		$length = $_POST["width"];
	}
	$squareFt = floatval($length) * floatval($width);
	$x = $squareFt / 350;
	$gallons = ceil($x);
	$message = "You will need to purchase $gallons gallons of paint to cover $squareFt sqft.";

}


?>

<h1 class="form-title">Paint Calculator</h1>

<form method="POST">
	<p>
		Calculate how much paint you will need to paint a ceiling. 
	</p>

	<label for="width">width in feet</label><input type="number" name="width" min="0" placeholder="width" value="<?=$width?>">
	<label for="length">length in feet</label><input type="number" name="length" min="0" placeholder="length" value="<?=$length?>">

	<button name="sub">Submit</button>
	
	<section class="result">
		<p>
			<?=$message?>
		</p>
	</section>
</form>






<?php include("footer.php")?>

