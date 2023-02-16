<?php

$menuitems = [
	[ 
		"link-name" => "github",
		"url" => "https://github.com/thealinamichelle' target='github",
		"internal-link" => false
	], 
	[ 
		"link-name" => "writing",
		"url" => "https://alinamichelle.substack.com/' target='substack",
		"internal-link" => false
	], 

	[ 
		"link-name" => "style&nbsp;guide",
		"url" => "style-guide",
		"internal-link" => true
	], 


	[
		"link-name" => "resume",
		"url" => "resume",
		"internal-link" => true
	], 



	[
		"link-name" => "chat",
		"url" => "mailto:alina.michelle@me.com",
		"internal-link" => false
	], 


	[ 
		"link-name" => "work",
		"url" => "projects",
		"internal-link" => true
	], 

	[ 
		"link-name" => "goals",
		"url" => "goals",
		"internal-link" => true
	], 


	[ 
		"link-name" => "home",
		"url" => "home",
		"internal-link" => true
	],

];


?>





<nav>

	<?php 
	foreach($menuitems as $menuitem) { ?>


		<?php $url = $menuitem["url"];?>
		<?php $urlQuery = $menuitem["internal-link"];?>

		<div class="footer-color-box"> 
			<a href="
				<?php 

					if ($urlQuery == true){
					echo "?page=";
					}
					else {
					}
				?>

			<?=$url?>" class="nav-links"><?= $menuitem["link-name"];?></a>
		</div>

	<?php } ?>

		<ul>
			<li><a href="templates/pages/home/home.php"></li>
		</ul>
</nav>
</div>











