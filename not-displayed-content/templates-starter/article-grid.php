<?php //include("functions.php")?>
<?php //include("arrays.php")?>
<?php //include("head.php")?>




<module-three>
	<inner-column>
		<grid>
			


<section class="grid-header">
				<div class="attention-voice">
					<h3>This is an "Article grid" module. This is it's heading.</h3>
				</div>
				<div class="inside-voice">
					<p>Again, we totally just made that up. It's a box with boxes in it. </p>
				</div>
			</section>

			<section class="cardholder">


<?php

//showerrors();

//show($gridheader);

	// echo '<section class="' . $gridheader["section class"] . '">
	// 			<div class="' . $gridheader["header class"] . '">
	// 				<h3>' . $gridheader["header"] . '</h3>
	// 			</div>
	// 			<div class="' . $gridheader["text class"] . '">
	// 				<p>' . $gridheader["text"] . '</p>
	// 			</div>
	// 		</section>


	// 		<section class="' . $gridheader["wrapper"] . '"';

	foreach ($articleContent as $card) {

		echo '<section class="' . $card["section class"] . '">
					<div class="' . $card["header class"] . '">
						<h3>' . $card["header"] . '</h3>
					</div>
					<div class="' . $card["text class"] . '">
						<p>' . $card["text"] . '</p>
					</div>
				</section>';
	}

	echo '</section>';



?>

		</grid>
	</inner-column>
</module-three>