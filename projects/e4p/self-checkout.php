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
$item = null;
$itemQ = 0;
$itemC = 0;
$item = null;
$itemQ = 0;
$itemC = 0;
$item = null;
$itemQ = 0;
$itemC = 0;
$subtotal = null;
$itemsub = null;
$itemsub = null;
$itemsub = null;

if ( isset($_POST["check-submit"]) ) {
	

	if ( isset($_POST["items"]) ) {
		$items = $_POST["items"];

	}
	if ( isset($_POST["items"][0]["Quant"]) ) {
		$item0Q = $_POST["items"][0]["Quant"];

	}
	if ( isset($_POST["items"][0]["Cost"]) ) {
		$item0C = $_POST["items"][0]["Cost"];
	}


	// if ( isset($_POST["item"]) ) {
	// 	$item = $_POST["item"];}

	if ( isset($_POST["items"][1]["Quant"]) ) {
		$item1Q = $_POST["items"][1]["Quant"];
	}
	if ( isset($_POST["items"][1]["Cost"]) ) {
		$item1C = $_POST["items"][1]["Cost"];
	}


	// if ( isset($_POST["item"]) ) {
	// 	$item = $_POST["item"];}
	
	if ( isset($_POST["items"][2]["Quant"]) ) {
		$item2Q = $_POST["items"][2]["Quant"];
	}
	if ( isset($_POST["items"][2]["Cost"]) ) {
		$item2C = $_POST["items"][2]["Cost"];
	}


// process: 
// subtotal
// tax 5.5$
// output: 
// line items with Q and total
// sub total
// tax
// total



// foreach ($_POST["items"] as $item) {
// 	echo $item . "<br>";}


	
		




$itemSub = floatval($itemC) * floatval($itemQ);
$itemSub = floatval($itemC) * floatval($itemQ);
$itemSub = floatval($itemC) * floatval($itemQ);

$subtotal = $itemSub + $itemSub + $itemSub;
$total = floatval($subtotal) * 5.5;

$message = "the subtotal $subtotal the total $total.";

}


?>

<h class="form-title">Self Checkout</h>

<form method="POST">
<div class="item">
	<label for="item">Item</label><input type="text" name="items[]" value="<?=$item?>">
	<label>Quantity</label><input type="number" step=".0" name="items[0][Quant]" min="" value="<?=$itemQ?>">
	<label>Cost</label><input type="number" step=".0" name="items[0][Cost]" min="0" value="<?=$itemC?>" >
</div>
<div class="item">
	<label>Item</label><input type="text" name="items[]"  value="<?=$item?>">
	<label>Quantity</label><input type="number" step=".0" name="items[1][Quant]" min="0" value="<?=$itemQ?>">
	<label>Cost</label><input type="number" step=".0" name="items[1][Cost]" min="0" value="<?=$itemC?>">
</div>
<div class="item">
	<label>Item</label><input type="text" name="items[]"  value="<?=$item?>">
	<label>Quantity</label><input type="number" step=".0" name="items[2][Quant]" min="0" value="<?=$itemQ?>">
	<label>Cost</label><input type="number" step=".0" name="items[2][Cost]" min="0" value="<?=$itemC?>">
</div>


	<button type="submit" name="check-submit" >Submit</button>
	
	<section class="result">
		<p>
			<ul>
				<li>Item One:<?=$item?></li>
				<li>Item Two:<?=$item?></li>
				<li>Item Three:<?=$item?></li>
				<li>Subtotal:<?=$subtotal?></li>
				<li>Tax: 5.5%</li>
				<li>Total:<?=$total?> </li>
				<li><?=$_POST["item"]["name"]?></li>

			</ul>
<?php show( $_POST );

echo $_Post["items"][0]["Cost"];


		// foreach ($_Post["items"][1]["Quant"] as $item){
		// 	echo "item: $item <br>";

		// 	foreach ($_Post["items"][1]["Cost"] as $cost)
		// 		echo "name: $cost <br>";
		// }




?>

		</p>
	</section>
</form>


<?php
// input: prices 
// quanities
// requirements:  items



// ASK DERRICK Alter the program so that an indeterminate number of items can be entered. The tax and total are computed when there are no more items to be entered.
?>

<style>
	.item {
		display: flex;
		flex-direction:column;
		padding: rem 0;
		gap: .5rem;
	}

</style>

<?php include("footer.php")?>
