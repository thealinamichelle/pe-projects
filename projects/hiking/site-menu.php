<?php

$menuitems = [
	[ 
		"link-name" => "home",
		// "url" => "home"
	], 
	[ 
		"link-name" => "trails",
		// "url" => "trails"
	], 
		[ 
		"link-name" => "create",
		// "url" => "create"
	], 

];


?>






<nav>

	<?php 
	foreach($menuitems as $menuitem) { ?>

			<a href="?page=
					<?= $menuitem['link-name'] ?>" 
				class=" <?php if ($page == $menuitem['link-name']) { echo 'active';}?>">
				
				<!-- <div class="nav-link"> -->
					<?=$menuitem["link-name"];?>
				<!-- </div> -->
			</a>
	
	<?php } ?>

</nav>



















