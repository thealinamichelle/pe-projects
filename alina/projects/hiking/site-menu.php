<?php

$menuitems = [
	[ 
		"link-name" => "home",
		"url" => "'?page=home'"
	], 
	[ 
		"link-name" => "trails",
		"url" => "'?page=list'"
	], 

	[ 
		"link-name" => "details",
		"url" => "'?page=details'"
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
