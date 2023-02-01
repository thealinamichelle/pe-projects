<!doctype html>

<html lang='en' class='special-magic no-js'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Theme challenge master file</title>
		<meta name='description' content='Theme challenge master file'>
		<meta property='og:image' content='Can you research emulate a website for a specific niche industry?'>

		<link rel='stylesheet' href='styles/site.css'>

		<style>
		  @import url('https://fonts.googleapis.com/css2?family=Cambo&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
		</style>

	</head>


	<body>
		<header class="site-header">
		<inner-column>
			
			<?php include('modules/mast-head/template.php'); ?>

		</inner-column>	
		</header>

		<main>

			<section class='welcome' id='welcome'>
			<inner-column>

				<?php include('modules/welcome-diptych/template.php'); ?>

			</inner-column>
			</section>

			<section class='room-intro no-column' id='room-intro'>
			<inner-column>

				<?php include('modules/room-diptych/template.php'); ?>

			</inner-column>
			</section>

			<section class='restaurant no-column' id='restaurant'>
			<inner-column>

				<?php include('modules/restaurant-diptych/template.php'); ?>

			</inner-column>
			</section>


			<section class='sign-up' id='sign-up'>
			<inner-column>

				<?php include('modules/call-to-action/template.php'); ?>

			</inner-column>
			</section>


			<section class='latest' id='latest'>
			<inner-column>

				<?php include('modules/articles-intro/template.php'); ?>

			</inner-column>
			</section>


			<section class='get-involved' id='get-involved'>
			<inner-column>

				<?php include('modules/call-to-action/template.php'); ?>

			</inner-column>
			</section>

		</main>

		<footer>
		<inner-column>
			
			<?php include('modules/site-map/template.php'); ?>

		</inner-column>
		</footer>
	</body>

</html>