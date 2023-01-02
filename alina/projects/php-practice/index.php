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
<h1>Plant Care Guide</h1>
<div class="first">
<p>Check back here once in a while for some advice on how to care for your indoor plants!</p>

<div class="plant">
	<?php 

	$month = date("m");
	$day = date("d");
	?>

<h2> <?=date("M d");?></h2>

	<div class="instructions">
		
		<?php 

		if ($month == 1) {
			echo "Remember you have plants! Reshap the ones that need it, assess if they need to be moved to take advantage of a sunny window or a plant light. Give your water starved plants a treat by moving them outside for some fresh rain.";
		} else if ($month == 2) {
			echo "your plant to a sunny window and give them a chance to collect rain fall on rainy days";
			}
		else if ($month == 3) {
			echo "Vaguely think about repotting";
			}
			else if ($month == 4) {
			echo "Repot your plants on an impulsive whim. It will take the whole day and make a huge mess.";
			}
			else if ($month == 5) {
			echo "You actually forgot to repot your plants. Look at them and feel guilty, then start avoiding looking at them at all. ";
			}
			else if ($month == 6) {
			echo "You notice your plants are starting to look nice and evenly brown from natural window baking. Wonder if they would make a good salad, but decide on moving them away from the heat. Water them more often for two weeks then forget.";
			}
			else if ($month == 7) {
			echo "Finally remember to fertilize your plants. You tell yourself the smell is worth it.";
			}
			else if ($month == 8) {
			echo "Actually water More Frequently due to the heat";
			}
			else if ($month == 9) {
			echo "IS it still hot? Keep watering! It's not, forget about your plants while enjoying a PSL.";
			}
			else if ($month == 10) {
			echo "It's time to start thinking about holidays, forget your plants exist.";
			}
			else if ($month == 11) {
			echo "Holiday time, what plants?";
			}
			else if ($month == 12) {
				if ($day < 15) {
					echo "Holiday time, what plants?";
				}
				if ($day == 15)	{
					echo "Holiday time, what plants?";
				}

				if ($day > 15 ) {
				echo 'As you carry out the dead Christmas tree, you hear a vague whisper,' . '"I predict the fortune of all plants that enter here! Beware!"';
				}
		};

		?>
	</div>
	</div>
</div>
</inner-column>

</body>
</html>




















