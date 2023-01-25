<?php include("functions.php")?>
<?php include("arrays.php")?>



<module-three>
	<inner-column>
		<grid>


<?php 

foreach ($articleContent as $card) {

	echo '<section class="' . $card["section class"] . '>
				<div class="' . $card["header class"] . '>
					<h3>' . $card["header"] . '</h3>
				</div>
				<div class="' . $card["text class"] . '">
					<p>' . $card["text"] . '</p>
				</div>
			</section>';



}

?>


			
		</grid>
	</inner-column>
</module-three>