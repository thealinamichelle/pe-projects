<?php 

	$json = file_get_contents('data/universal-links.json'); 
	$linksData = json_decode($json, true); 
	$sections = $linksData["sections"];
	$style = $linksData["style"] ?? "";

	
?>

<mast-head class=<?=$page?>>
	<inner-column>
		<nav id="masthead-menu" class="masthead-menu <?=$page?>"> 
			<ul>

				<picture class="logo">
					<?php include("images/icons/logo.svg") ?>
				</picture>
	
				<?php 

				foreach($sections as $section){

					
					 if (isset($section["location"]) ){
					 	$loc = $section["location"]; 

						if ($loc == "mast-head") {

					?>
					
						<?php foreach($section["links"] as $link){?>
							<a href="<?=$base . $link['url']?>">
								<li class="tiny-voice"><?=$link["name"]?></li>
							</a>
						<?php }?>

						<div class="change-region">
							<picture class="lang">
							<?php include("images/icons/lang.svg") ?>	
							</picture>

							<p class="tiny-voice">EN</p> 
						</div>

						<button class="login tiny-voice">LogIn</button>

					
				<?php	}
					}
				}	
				?>
			</ul>

		</nav>




		<input type="checkbox" id="hamburger-input" class="burger-shower hamburger-input" />
		<label class="hamburger-menu" id="hamburger-menu" for="hamburger-input">
		  <nav id="sidebar-menu" class="sidebar-menu">
		  					
		    <ul>
				<picture class="logo">
					<?php include("images/icons/logo.svg") ?>
				</picture>
			
				<?php foreach($sections as $section){

					$loc = $section["location"]; 
					 if ($loc == "mast-head") {

					?>
					
						<?php foreach($section["links"] as $link){?>
							<a href="<?=$base . $link['url']?>">
								<li class="tiny-voice"><?=$link["name"]?></li>
							</a>
						<?php }?>

						<div class="change-region">
							<picture class="lang">
							<?php include("images/icons/lang.svg") ?>	
							</picture>

							<p class="tiny-voice">EN</p> 
						</div>

						<button class="login tiny-voice">LogIn</button>
			
						<?php }
					}?>

		    </ul>
		  </nav>
		</label>

		<div class="overlay"></div>
	</inner-column>
</mast-head>