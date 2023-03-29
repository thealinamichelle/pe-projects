

<?php
// Input:
//  number of people
// number of pizzas 
// slices per pizza
// process:
// ensure number comes out even
// output:
// display number each should get
// show left over pieces
// challenges: handles pluralization property

function ischecked($v) {
	if ($_POST["slicesPerPizza"] == $v){
		return "checked";
	}
}




$message = null;
$people = null;
$pizzas = null;
$slicesPerPizza = null;
$x = null;
$leftovers = null;

if ( !isset($_POST["slicesPerPizza"]) ) {
	$_POST["slicesPerPizza"] = "2slices";
}


if ( isset($_POST["sub"]) ) {

	if ( isset($_POST["people"]) ){
		$people = $_POST["people"];
	}

	if ( isset($_POST["pizzas"]) ){
		$pizzas = $_POST["pizzas"];
	}

	if ( isset($_POST["slicesPerPizza"]) ){
		$slicesPerPizza = $_POST["slicesPerPizza"];
	}


$totalSlices = floatval($pizzas) * floatval($slicesPerPizza);
$slicesPerPerson = floatval($totalSlices) / floatval($people);
$slicesPerPerson = floor($slicesPerPerson);
$x = $slicesPerPerson * $people;
$leftovers = $totalSlices - $x ;
$message = "<li>There are $people people with $pizzas pizzas.
				<li>Each person will enjoy $slicesPerPerson slices of pizza.</li>
				<li>There are $leftovers slices</li>";
}
?>

<h1 class="form-title">How Many Slices Will Each Guest Receive? </h1>

<form method="POST">

	<label for="people">Number of people attending</label><input type="number" name="people" placeholder="number of people" min="0" value="<?=$people?>" required>
	<label for="pizzas">How many total pizzas</label><input type="number" name="pizzas" placeholder="number of pizzas" min="0" value="<?=$pizzas?>" required>

<div class="radio-row">
<label for ="2slices">
		<input type="radio" name="slicesPerPizza" id="2slices" value="2" required <?= ischecked("2slices")?> >2 slices</label>

<label for ="4slices">
		<input type="radio" name="slicesPerPizza" id="4slices" value="4" required <?= ischecked("4slices")?> >4 slices</label>

<label for ="6slices">
		<input type="radio" name="slicesPerPizza" id="6slices" value="6" required <?= ischecked("6slices")?> >6 slices</label>


<label for ="8slices">
		<input type="radio" name="slicesPerPizza" id="8slices" value="8" required <?= ischecked("8slices")?> >8 slices</label>
<label for ="10slices">
		<input type="radio" name="slicesPerPizza" id="10slices" value="10" required <?= ischecked("10slices")?> >10 slices</label>
<label for ="12slices">
		<input type="radio" name="slicesPerPizza" id="12slices" value="12" required <?= ischecked("12slices")?> >12 slices</label>
<label for ="16slices">
		<input type="radio" name="slicesPerPizza" id="16slices" value="16" required <?= ischecked("16slices")?> >16 slices</label>

</div>






	<button name="sub">Submit</button>
	



	<section class="result">
		<ul>
			<?=$message?>
		</ul>
	</section>
</form>



<!-- variant: 
input: number of people
number of slices everyone wants
output: how many full pizzas you need -->