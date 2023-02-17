
<?php 
	$json = file_get_contents('content/data/siteNavigation.json'); 
		//passes in the json data
	$navData = json_decode($json, true); 
		//do you want this to be an associative array?
?>

<nav>

	<?php 	
		foreach($navData as $nav) { 

			$url = $nav["url"];
			$urlQuery = $nav["internal-link"];

			if ($urlQuery == true) {
				$test = "?page=";
			}
			else {
				$test = "";
			}
	?>

		<div class="footer-color-box"> 
			<a href="<?=$test?><?=$url?>" class="nav-links"><?= $nav["link-name"];?></a>
		</div>
		
	<?php } ?>
	
</nav>
</div>











