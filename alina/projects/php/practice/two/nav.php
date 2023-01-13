<?php

$menuitems = [
	[ 
		"link-name" => "link",
		"url" => "'#' target='one'"
	], 
	[ 
		"link-name" => "link",
		"url" => "'#' target='two'"
	], 

	[ 
		"link-name" => "link",
		"url" => "'#'"
	], 

];


?>






<nav>

	<?php 
	foreach($menuitems as $menuitem) { ?>


			<a href=<?= $menuitem["url"] ?> ><div class="nav-link"><?= $menuitem["link-name"];?></div></a>


	<?php } ?>


</nav>
</div>
