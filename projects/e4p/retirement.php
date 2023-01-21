<?php include("head.php") ?>

<h1 class="form-title">
	How Long Until You Retire?
</h1>







<!-- INPUT -->


<?php 

$age = 0;
$ageOfRetire = 0;
$message = false;

if (isset($_POST["sub"]) ) {

	if (isset($_POST["age"]) ){

		if ( $_POST["age"] >=0 ) {

		$age = $_POST["age"];
		}
	}
	if (isset($_POST["ageOfRetire"]) ){
		if ( $_POST["ageOfRetire"] >=0 ) {

		$ageOfRetire = $_POST["ageOfRetire"];
		}
	}

$yearsTil = floatval($ageOfRetire) - floatval($age);
$year = date("Y");
$gen = floatval($year) - floatval($age);
$yearOfRetire = floatval($yearsTil) + floatval($year);

if ($gen >= 1980 and $gen <= 1996 and $ageOfRetire < 70){

$message = "Hey there millennial, I know you want to retire in $yearsTil years. It's currently $year, so unless you are already wealthy, super lucky, or have a great plan to increase your wealth it's unlikely you'll get to retire by $yearOfRetire.";
}

elseif ($gen >= 2011) {
	$message = "Hey there whipper snapper, it's both great and scary you are checking how many years you have until retirement. The bad news is you have $yearsTil years. The good news is it's only $year, so you have time to learn some financial literacy now so you can retire in $yearOfRetire.";
}
else {

	$message = "You have $yearsTil years left until you can retire. It's $year, so you can retire in $yearOfRetire.";
}

}



?>



<form method="POST">

<div class="field">
<label> What is your current age?</label>
<input type=number name="age" min="0" max="120" value="<?=$age?>" required>
</div>


<div class="field">
<label> What what age do you want to retire?</label>
<input type=number name="ageOfRetire" min="0" max="120" value="<?=$ageOfRetire?>" required>
</div>


<button type="submit" name="sub">Find Out!</button>

</form>

		<section class="result">
			<p>
				<?=$message?>
			</p>
		</section>


<!-- OUTPUT -->






<?php include("footer.php") ?>



<!-- Requirements:
a program that determines how many years you have left until retirement and the year you can retire. It should prompt for your current age and the age you want to retire and display the output as shown in the example that follows.
Example:
What is your current age? 25 At what age would you like to retire? 65 You have 40 years left until you can retire. It’s 2015, so you can retire in 2055.
Analysis
Inputs:
age, retirment age
Outputs:
display of years left til retirement
Process:
subtract age of retirement from current age. Take result and add it to the current year.
Testing:
It’s 1999, and the years to retirement will exceed 1 year.
Check if the current year is stored as 4 numerals.
if yes! great. proceed as normal.
If no, panic and tell the user to make a survival bunker. -->