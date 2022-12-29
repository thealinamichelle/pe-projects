<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width">
		<meta name="viewport" content="width=device-width, intial-scale=1">

		<title>[[insert title]]</title>
		<meta name="description" content="[[insert description]]">
		<meta property="og:image" content="images/default.png">

		<link rel="stylesheet" href="css/style.css">
</head>

<body>
<inner-column>
<h1>Array Stuff</h1>



	<div class="instructions">

		
		<?php 

$itemArray = ["15 minute walk"
, "30 minute walk"
, "45 minute walk"
, "60 minute walk"
, "Boarding"
, "Pet Visit 1 hour"
, "Daycare"
, "Dog Training"
, "Holiday Fee "
, "Local Travel Fee"
, "Travel Fee"];



$unitpriceArray = ["$20", "$24", "$28", "$30", "$70", "$30", "$35", "$80", "$10", "$10", "$25"
];



echo "services due:" . " for " .  date("F d Y") . "<br>" . $itemArray[1] . " = " . $unitpriceArray[1] ;

?>

<br><br>

<?php

echo "services due:" . " for " .  date("F d Y") . "<br>" . $itemArray[6] . " = " . $unitpriceArray[6] ;
		?>
	</div>
	</div>
</div>
</inner-column>

</body>
</html>




















