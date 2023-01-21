<?php include("head.php") ?>

<section class="format-form">

<?php




$num1 = 0;
$num2 = 0;
$message = null;

if (isset($_POST["submit"]) ) {

	if (isset($_POST["num1"]) ) {
		$num1 = $_POST["num1"];


	}
	if (isset($_POST["num2"]) ){
		$num2 = $_POST["num2"];
 	}


 	$add = $num1 + $num2;
 	$sub = $num1 - $num2;
 	$mult = $num1 * $num2;
 	$div = $num1 / $num2;
 	$message = "<ul>
				 	<li>$num1 + $num2 = $add</li>  
				 	<li>$num1 - $num2 = $sub</li>    
				 	<li>$num1 * $num2 = $mult</li>   
				 	<li>$num1 / $num2 = $div</li>
				 	</ul>";
}
?>
<form method="POST">
		<label>Enter a Number</label>
			<input type="number" name="num1" value="<?=$num1?>">
		<label>Enter a Number</label>
			<input type="number" name="num2" value="<?=$num2?>">


		<button type="submit" name="submit">Submit</button>
	<form>
</section>


<section class="result">
		<?=$message?>
</section>