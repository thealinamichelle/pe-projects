<?php

$menuitems = [
	[ 
		"link-name" => "home",
		"url" => "'?page=home'"
	], 
	[ 
		"link-name" => "trails",
		"url" => "'?page=trails'"
	], 
		[ 
		"link-name" => "create",
		"url" => "'?page=create'"
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
