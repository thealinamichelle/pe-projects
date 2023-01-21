<?php include("head.php")?>

<?php

// function show($variable) {
//   echo "<pre class='code'>";
//     echo "<code>";
//       echo print_r( $variable );
//     echo "</code>";
//   echo "</pre>";
// }

function ischecked($v) {
	if ($_POST["measurementType"] == $v){
		return "checked";
	}
}

$rmWidthFt = 0;
$rmLengthFt = 0;
$areaFt = 0;
$message = false;
$area = 0;

if ( !isset($_POST["measurementType"]) ) {
	$_POST["measurementType"] = "feet";
}



if ( isset($_POST["sub"])) {//A
	if ( isset($_POST["rmLengthFt"]) ) {//B


		if ($_POST["rmLengthFt"]>= 0 ) {//C
			$rmLengthFt = $_POST["rmLengthFt"];
		}//C
	}//B
	if ( isset($_POST["rmWidthFt"]) ) {//D

		if ($_POST["rmWidthFt"]>= 0 ) {//E
			$rmWidthFt = $_POST["rmWidthFt"];
		}//E
		$areaFt = floatval($rmLengthFt) * floatval($rmWidthFt);

		$sqMeter = $areaFt / 10.764;
		$sqMeter = number_format($sqMeter, 2 , ".", ".");
		$unit = $_POST["measurementType"];

		// $message = "You entered dimensions of $rmLengthFt feet by $rmWidthFt feet. The area is $areaFt square feet and $sqMeter in square meters.";

		// $message = "You entered dimensions of $rmLengthFt feet by $rmWidthFt feet. The area is $areaFt square $unit";

		if ($unit == "feet") {
			$message = "You entered dimensions of $rmLengthFt $unit by $rmWidthFt $unit. The area is $areaFt square $unit.";
		}
		elseif ($unit == "meters") {
			$message = "You entered dimensions of $rmLengthFt $unit by $rmWidthFt $unit. The area is $sqMeter square $unit.";
		}

	}//D

}//A

?>

<h1 class="form-title">Area Calculator</h1>

<form method="POST">
	<p> Enter the room's width and length</p>


	<label for ="feet" class="form-control">
		<input type="radio" name="measurementType" id="feet" value="feet" required <?= ischecked("feet")?> >feet</label>

		<label for ="meters" class="form-control">
			<input type="radio" name="measurementType" id="meters" value="meters" required <?= ischecked("meters")?> >meters</label>

			<label>width</label><input type="number" placeholder="width in feet" name="rmWidthFt" min="1" required>
			<label>length</label><input type="number" placeholder="length in feet" name="rmLengthFt" min="1" required>

			<button name="sub">Submit</button>
		</form>


		<section class="result">
			<p>
				<?=$message?>

			</p>
		</section>



		<?php include("footer.php")?>

