<?php include("head.php")?>

<?php


function show($variable) {
  echo "<pre class='code'>";
    echo "<code>";
      echo print_r( $variable );
    echo "</code>";
  echo "</pre>";
}

$message = null;
$item1 = null;
$item1Q = 0;
$item1C = 0;
$item2 = null;
$item2Q = 0;
$item2C = 0;
$item3 = null;
$item3Q = 0;
$item3C = 0;
$subtotal = null;
$item1sub = null;
$item2sub = null;
$item3sub = null;

if ( isset($_POST["check-submit"]) ) {
	

	if ( isset($_POST["$item1"]) ) {
		$item1 = $_POST["item1"];
		echo $item1;
	}
	if ( isset($_POST["$item1Q"]) ) {
		$item1Q = $_POST["item1Q"];

	}
	if ( isset($_POST["$item1C"]) ) {
		$item1C = $_POST["item1C"];
	}


	if ( isset($_POST["$item2"]) ) {
		$item2 = $_POST["item2"];
	}
	if ( isset($_POST["$item2Q"]) ) {
		$item1Q = $_POST["item2Q"];
	}
	if ( isset($_POST["$item3C"]) ) {
		$item1C = $_POST["item2C"];
	}


	if ( isset($_POST["$item3"]) ) {
		$item3 = $_POST["item3"];
	}
	if ( isset($_POST["$item3Q"]) ) {
		$item1Q = $_POST["item3Q"];
	}
	if ( isset($_POST["$item3C"]) ) {
		$item1C = $_POST["item3C"];
	}


// process: 
// subtotal
// tax 5.5$
// output: 
// line items with Q and total
// sub total
// tax
// total

$item1Sub = floatval($item1C) * floatval($item1Q);
$item2Sub = floatval($item2C) * floatval($item2Q);
$item3Sub = floatval($item3C) * floatval($item3Q);


$subtotal = $item1sub + $item2sub + $item3sub;
$total = floatval($subtotal) * 5.5;

$message = " item1 - $item1 the subtotal $subtotal the total $total";

}


?>

<h1 class="form-title">Self Checkout</h1>

<form method="POST">
<div class="item">
	<label for="item1">Item</label><input type="text" name="item1" value="<?=$item1?>">
	<label>Quantity</label><input type="number" name="item1Q" min="1" value="<?=$item1Q?>">
	<label>Cost</label><input type="number" name="item1C" min="0" value="<?=$item1C?>" >
</div>
<div class="item">
	<label>Item</label><input type="text" name="item2"  value="<?=$item2?>">
	<label>Quantity</label><input type="number" name="item2Q" min="0" value="<?=$item2Q?>">
	<label>Cost</label><input type="number" name="item2C" min="0" value="<?=$item2C?>">
</div>
<div class="item">
	<label>Item</label><input type="text" name="item3"  value="<?=$item3?>">
	<label>Quantity</label><input type="number" name="item3Q" min="0" value="<?=$item3Q?>">
	<label>Cost</label><input type="number" name="item3C" min="0" value="<?=$item3C?>">
</div>


	<button type="submit" name="check-submit" >Submit</button>
	
	<section class="result">
		<p>
			<?=$message?>

			<?php show( $_POST ); ?>
		</p>
	</section>
</form>


<?php
// input: prices 
// quanities
// requirements: 3 items



// ASK DERRICK Alter the program so that an indeterminate number of items can be entered. The tax and total are computed when there are no more items to be entered.
?>

<style>
	.item {
		display: flex;
		flex-direction:column;
		padding: 1rem 0;
		gap: .25rem;
	}

</style>

<?php include("footer.php")?>
