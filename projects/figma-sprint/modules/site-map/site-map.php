<?php 

	$json = file_get_contents('data/universal-links.json'); 
	$uniData = json_decode($json, true); 
	$sections = $uniData["sections"];
?>
<section class="footer site-map">

<inner-column>
	<grid>

		<?php foreach($sections as $section){

			$loc = $section["location"]; 
			 if ($loc == "site-map") {

			?>
			<ul class="link-groups">
				<h3><?=$section["heading"]?></h3>

					<?php foreach($section["links"] as $link){?>

						<a href="<?=$link["url"]?>">
							<li><?=$link["name"]?></li>
						</a>
					<?php }?>
			</ul>
		<?php	}
			}
		?>

		<div class="subscribe">
			<h3>Subscribe</h3>
			<form method="POST">
				<label for="email-address">
				</label>
				<input type="email" name="email">
					<div class="small-button">
						<svg width="15" height="8" viewBox="0 0 15 8" fill="none">
							<path d="M13.5 7L7.5 1L1.5 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>

					</div>
			</form>

			<p class="fine-print">Gravida sed justo, justo, id est et. Amet tristique convallis sed porttitor nullam eu ut. Duis et odio aliquam bibendum. Metus et lectus id viverra fringilla magna morbi. </p>
		</div>
	</grid>
	<div>
	<hr>
</div>
	<div class="footer-end">
		
		<picture class="logo">
			<?php include("images/icons/logo.svg") ?>	
		</picture>

		<a href="" class="fine-print">Terms</a>
		<a href="" class="fine-print">Privacy</a>
		<a href="" class="fine-print">Cookies</a>


		<picture class="social-small"><img src="images/icons/in.svg"></picture>
		<picture class="social-small"><img src="images/icons/f.svg"></picture>
		<picture class="social-small"><img src="images/icons/wat.svg"></picture>
		
</div>
</inner-column>	
</section>