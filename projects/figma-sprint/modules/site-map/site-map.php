<?php 

	$json = file_get_contents('data/universal-links.json'); 
	$uniData = json_decode($json, true); 
	$sections = $uniData["sections"];
?>
<section class="footer site-map">



<inner-column>
	<grid>

		<?php foreach($sections as $section){
			$heading = $section["heading"];
			 
			 if (isset($section["location"]) ){
			 	$loc = $section["location"];
			 	
				 	if ($loc == "site-map"){
			?>
				<ul class="link-groups">
					<h3><?=$heading?></h3>

						<?php foreach($section["links"] as $link){?>

							<a href="<?=$link["url"]?>">
								<li><?=$link["name"]?></li>
							</a>
						<?php }?>
				</ul>
			<?php	}
			};
		}

		if ($heading == "subscribe") {
		}
		?>

		<div class="subscribe">
			<h3><?=$heading?></h3>
			<form method="POST" class="subscribe-form">
			<?php 
			if (isset($section["form"]) ) { 
					foreach ($section["form"] as $form) {?>
						
						<label for="<?=$form['for']?>"></label>
						
						<input type="<?=$form['input']?>" name="<?=$form['input']?>">
					<?php mySubmitButton($form["class"]);
					}
			}
			?>
			</form>


			<p class="fine-print"><?=$section["text"]?></div>
	</grid>
	<div>
	<hr>
</div>
	<div class="footer-end">
		
		<a href=""><picture class="logo">
			<?php include("images/icons/logo.svg") ?>	
		</picture></a>

		<a href="#" class="fine-print">Terms</a>
		<a href="#" class="fine-print">Privacy</a>
		<a href="#" class="fine-print">Cookies</a>


		<a href="#"><picture class="social-small"><img src="images/icons/in.svg"></picture></a>
		<a href="#"><picture class="social-small"><img src="images/icons/f.svg"></picture></a>
		<a href="#"><picture class="social-small"><img src="images/icons/wat.svg"></picture></a>
		
</div>
</inner-column>	
</section>