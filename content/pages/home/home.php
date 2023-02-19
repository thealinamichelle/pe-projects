

<?php 
	$json = file_get_contents('content/data/siteNavigation.json'); 
		//passes in the json data
	$nav = json_decode($json, true); 
		//do you want this to be an associative array?

	$base = "?page=";
	$projects = $nav[6]["link-name"];
	$resume = $nav[4]["link-name"];
	$mail = $nav[5]["link-name"];
	$goals = $nav[7]["link-name"];
	
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
				
				<a href="<?=$base?><?=$goals?>" target="<?=$goals?>">goals</a>
				
				<a href="<?=$base?><?=$projects?>" target="<?=$projects?>"">work</a>
				
				<a href="mailto:alina.michelle@me.com">chat</a>
				
				<a href="<?=$base?><?=$resume?>" target="<?=$resume?>">resume</a>

				
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