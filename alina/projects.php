<?php include("header.php")?>
<?php include("sub-page-nav.php") ?>
<?php 

$sections = [
		[ 
		"heading" => "mock client",
		"url" =>"projects/mock-client.html",
		"works" => [
			"<picture><img src='project-preview/mock-client.png'></picture>",
			"project description",			
				]
		], 
				[ 
		"heading" => "research and destroy",
		"url" =>"mock-client.html",
		"works" => [
			"<picture><img src='project-preview/destroy.png'></picture>",
			"project description",			
				]
		],
				[ 
		"heading" => "responsive layout",
		"url" => "",
		"works" => [
			"<picture><img src='project-preview/responsive.png'></picture>",
			"project description",			
				]
		], 
				[ 
		"heading" => "monster adoption",
		"url" => "",
		"works" => [
			"<picture><img src='project-preview/monster.png'></picture>",
			"project description",			
				]
		], 

	];
?>

<section class="projects-page inner-column">


<?php foreach($sections as $section) { ?>
	<a href="<?=$section["url"]?>"><div class="project-card">
	<h2 class="project-title"> 
		<?=$section["heading"]?>
	</h2>

	<ol class="project-details">
		<?php foreach($section["works"] as $work) {?>
		
		<li> <?=$work?>
		</li>
	<?php }?>
	</ol>
</div>
</a>

<?php } ?>

</section>


<?php include("footer.php") ?>


