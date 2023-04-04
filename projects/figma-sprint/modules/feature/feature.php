
	<inner-column>
		<wrapper>
			<h2><?=$heading?></h2>
			<p><?=$mustache?></p>
			<picture class="placeholder">
				<img src="images/<?=$picture?>" class="image-symbol"></svg>
				<?php $i = 1?>
		</wrapper>

				<ul>
					<?php foreach($m["article-previews"] as $ap)	{?>
								<div class="number"><?=$i++?></div>
							  <h3><?=$ap["heading"]?></h3>
							  <p><?=$ap["text"]?></p>
							</li>
						<?php } ?>
					</ul>
	</inner-column>