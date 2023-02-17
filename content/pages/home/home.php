

<?php 
	$json = file_get_contents('content/data/siteNavigation.json'); 
		//passes in the json data
	$navData = json_decode($json, true); 
		//do you want this to be an associative array?
	?>

<section class="home-grid">
			
			<section class="visuals">
				<?php include("content/components/svg/alina-new-svg.php")?>

					<div class="title-blue-square invisible-period"><p>.</p>
					</div>

				

					<div class="dog">
						<?php include("content/components/svg/the-dog-svg.php")?>
					</div>

			</section>


			<section class="info">
				a dog walker and trainer turned web developer. 
			</section>
		
			<section class="index-cards">
				
				<a href="https://peprojects.dev/alpha-6/alina/goals.php">goals</a>
				
				<a href="projects.php">work</a>
				
				<a href="mailto:alina.michelle@me.com">chat</a>
				
				<a href="resume.php">resume</a>

				
				<div class="yellow-1 invisible-period">
					<p>.</p>
				</div>
				<div class="yellow-2 invisible-period">
					<p>.</p>
				</div>

				<div class="yellow-3 jiggle invisible-period">
					<p>.</p>
				</div>

				<div class="red-1 invisible-period">
					<p>.</p>
				</div>

				<div class="green jiggle invisible-period">
				</div>
			</section>
<!-- </home-page> -->
</section>