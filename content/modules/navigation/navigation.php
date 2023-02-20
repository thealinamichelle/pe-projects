
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
			$external = $nav["external"] ?? false;
			$base = "?page=";
			$link = $nav["link-name"];
			$t = "";
			if ($external) {
				$base = "";
				$t = checkTarget($external, $link);
			}
			
	?>

		<div> 
			<a href="<?=$base?><?=$url?>" <?php echo $t; ?> class="nav-links" ><?= $link;?></a>
		</div>
		
	<?php } ?>
	


</nav>
</div>











