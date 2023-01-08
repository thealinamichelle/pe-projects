<?php

$menuitems = [
	[ 
		"link-name" => "github",
		"url" => "'https://github.com/thealinamichelle' target='github'"
	], 
	[ 
		"link-name" => "writing",
		"url" => "'https://alinamichelle.substack.com/' target='substack'"
	], 

	[ 
		"link-name" => "style&nbsp;guide",
		"url" => "'style-guide.php'"
	], 


	[
		"link-name" => "resume",
		"url" => "'resume.php'"
	], 



	[
		"link-name" => "chat",
		"url" => "'mailto:alina.michelle@me.com'"
	], 


	[ 
		"link-name" => "work",
		"url" => "'projects.php'"
	], 

	[ 
		"link-name" => "goals",
		"url" => "'goals.php'"
	], 


	[ 
		"link-name" => "home",
		"url" => "'index.php'"
	],

];


?>






<nav>

	<?php 
	foreach($menuitems as $menuitem) { ?>


		<div class="footer-color-box"> 
			<a href=<?= $menuitem["url"] ?> class="nav-links"><?= $menuitem["link-name"];?></a>
		</div>


	<?php } ?>


</nav>
</div>
