<!doctype html>
<html lang="en">

<?php include("head.php"); ?>
<?php include("monster-factory.php"); ?>



<body>



<header>
	
	<?php
	function monsterGenerator($name, $age, $favoritefood) {
		$monster = [
			"name" => $name,
			"age"=> $age,
			"favoritefood" => $favoritefood,
		];
		return $monster;
	}

	
	$bland = monsterGenerator("Bland", "3", "granola");


	echo $bland["name"];



		?>


</header>
	<main>

		<!-- <inner-column> -->


			<?php include("functions.php");?>

	






		<!-- </inner-column> -->
	</main>
</body>
</html>




















