<?php include("head.php") ?>


<?php



// Program needs to prompt for my name then greet me using my name.
// Constraint:
// Keep the input, string concatenation, and output separate.


$name = null;
// Analysis
// Pre-storage: greeting message
$opening = "What is your name?";
$message = null;

if( isset($_POST["welcomeSubmit"])) {

	if ( isset($_POST["welcome-form"])) {
		$name = $_POST["welcome-form"];
	}
$message = "$name hello, $name, nice to meet you!";
}
?>


<h1 class="form-title">
<?=$opening?>
</h1>

<form method="POST">

<Label>Enter a name<input type="text" name="welcome-form"></Label>
<button type="submit" name="welcomeSubmit">Submit</button>

</form>


		<section class="result">
			<p>
				<?=$message?>
			</p>
		</section>


<?php include("footer.php") ?>
