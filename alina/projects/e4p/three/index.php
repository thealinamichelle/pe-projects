<?php include("header.php") ?>

<section class="">
	<div class="inner-column">

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


<h1>
<?=$opening?>
</h1>

<form method="POST">

<Label><input type="text" name="welcome-form"></Label>
<button type="submit" name="welcomeSubmit">Submit</button>

<p class="output"><?=$message?></p>

</form>
	</div>
</section>


<?php include("footer.php") ?>
