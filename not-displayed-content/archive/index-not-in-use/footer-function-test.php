<?php

$menuitems = [
	
	[ 
		"link-name" => "writing",
		"url" => "'https://alinamichelle.substack.com/' target='another'"
	], 

];


?>








</main>
<footer>

	<?php 
	foreach($menuitems as $menuitem) { ?>


		<div class="footer-color-box"> 
			<a href=<?= $menuitem["url"] ?> class="footer-links"><?= $menuitem["link-name"];?></a>
		</div>


	<?php } ?>
</footer>
</body>
</html>