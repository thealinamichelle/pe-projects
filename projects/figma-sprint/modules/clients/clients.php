<?php 

	$json = file_get_contents('data/reviews.json'); 
	$rData = json_decode($json, true); 
?>


<section class="clients">
	<inner-column>
		<div>
			<h2>What Our Clients Says</h2>
			<p class="calm-voice">Neque, pulvinar vestibulum non aliquam.</p>
		</div>




	<div class="review-loop">

		<?php foreach($rData as $r) { ?>

			<div class="single-review">
			<div class="stars">
				<?php $stars = $r["stars"];
				for ($i = 0; $i < $stars; $i++) {?>
			
						<?php print 
							'<svg class="star" width="22" height="22" viewBox="0 0 22 22">
								<path d="M11 1L14.09 7.26L21 8.27L16 13.14L17.18 20.02L11 16.77L4.82 20.02L6 13.14L1 8.27L7.91 7.26L11 1Z"/>
							</svg>
							';
						}?>		
			</div>

				<p class='tiny-voice'><?=$r["name"]?></p>
				<p class='calm-voice'><?=$r["text"]?></p>

				<?php $avatar = $r['avatar'];?>
				
				<picture class='avatar'>
						<img src='images/<?=$avatar?>'>
				</picture>
				
			</div>
		<?php } ?>

	</div>
</inner-column>
</section>