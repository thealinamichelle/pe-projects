<?php include("header.php") ?>

<section class="">
	<div class="inner-column">

<!-- <h1>
	PHP Practice 1/12/23
</h1>

<h2>
	Notes
</h2>
<div>
<p>Order of Operations: The computer will follow these rules even when you don't want it to.</p>
<ul>
<li>Please - Parantheses</li>
<li>Excuse - Exponents</li>
<li>My - Multiplication</li>
<li>Dear - Division</li>
<li>Aunt - Addition</li>
<li>Sally - Subtraction</li>
</ul>
</div>

<div>

<p>One of the most common issues new programmers face occurs when they try to use floating-point numbers for currency. This will result in precision errors. One common approach is to represent money using whole numbers. So instead of working with 1.25, work with 125. Do the math, and then shift the decimal back</p>
</div>
	</div>
	</section>	


<section class="">
	<div class="inner-column">
<h2>Area of a Rectangular Room</h2>
<h3>Psuedo Code</h3>
<p>

requirements: calculates the area of a room.
<ul>
<li>input: length and width of the room in feet</li>
<li>output: area in sq ft and sq meters</li>
<li>reaffirm what was inputted</li>
<li>process: calculating the area</li>
<li>storing the numbers</li>
<li>request room length in feet</li>
<li>request room width in feet</li>
<li>define what numbers are permitted:</li>
<li>all inputs are required.</li>
<li>negative numbers cannot be entered</li>
<li>only numbers are permitted</li>
<li>or negative numbers create an output of "you live in a black hole"</li>
<li>store numbers in the server</li>
<li>retrieve numbers</li>
<li>multiply the width and the length</li>
<li>define the new figure as area in feet and store in the server</li>
<li>convert the area in feet to area in meters</li>
<li>store the new figure as area in meters</li>
<li>retrieve figures</li>
<li>display "You entered dimensions of width by length the area is square feet or square meters"</li>
</ul>
 </p>
	</div>
</section> -->


<?php

function show($variable) {
  echo "<pre class='code'>";
    echo "<code>";
      echo print_r( $variable );
    echo "</code>";
  echo "</pre>";
}

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


<section class="">
	<div class="inner-column">

<form method="POST">



<p> Enter the room's width and length</p>



			<label for ="feet" class="form-control">
			<input type="radio" name="measurementType" id="feet" value="feet" required <?= ischecked("feet")?> >feet</label>

			<label for ="meters" class="form-control">
			<input type="radio" name="measurementType" id="meters" value="meters" required <?= ischecked("meters")?> >meters</label>



<label>width</label><input type="number" placeholder="width in feet" name="rmWidthFt" min="1" required>
<label>length</label><input type="number" placeholder="length in feet" name="rmLengthFt" min="1" required>

<button name="sub">Submit</button>
<form>


<p>
<?=$message?>
</p>
<?php show( $_POST ); ?>

	</div>
</section>
































<?php include("footer.php") ?>