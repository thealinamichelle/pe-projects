<?php

$menuitems = [
	[ 
		"link-name" => "Home",
		"url" => "../../index.php"
	], 
	[ 
		"link-name" => "Forms",
		"url" => "../../forms.php"
	], 


];


?>


<nav>

	<?php 
	foreach($menuitems as $menuitem) { ?>


		<div> 
			<a href=<?= $menuitem["url"] ?> class="nav-links"><?= $menuitem["link-name"];?></a>
		</div>


	<?php } ?>


</nav>
</div>

	<nav-yellow>
	</nav-yellow>