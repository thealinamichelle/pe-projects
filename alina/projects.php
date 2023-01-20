<?php include("header.php")?>
<?php include("sub-page-nav.php") ?>
<?php 

$sections = [
		[ 
		"heading" => "mock client",
		"url" =>"projects/mock-client.html",
		"target" => "mock",
		"works" => [
			"<picture><img src='project-preview/mock-client.png'></picture>",
			"project description",			
				]
		], 
		[ 
		"heading" => "research and destroy",
		"url" =>"projects/search-and-destroy/index.html",
		"target" => "destroy",
		"works" => [
			"<picture><img src='project-preview/destroy.png'></picture>",
			"project description",			
				]
		],
		[ 
		"heading" => "responsive layout",
		"url" => "projects/responsive-challenge/index.html",
		"target" => "poo-brain",
		"works" => [
			"<picture><img src='project-preview/responsive.png'></picture>",
			"project description",			
				]
		], 
		[ 
		"heading" => "monster adoption",
		"url" => "projects/monsters/index.php",
		"target" => "monster",
		"works" => [
			"<picture><img src='project-preview/monster.png'></picture>",
			"project description",			
				]
		], 
		[ 
		"heading" => "PHP forms",
		"url" => "forms.php",
		"target" => "",
		"works" => [
			"<picture><img src='https://peprojects.dev/images/square.jpg'></picture>",
			"project description",			
				]
		], 
		[ 
		"heading" => "Dog Hiking Recommendations",
		"url" => "projects/hiking/index.php",
		"target" => "",
		"works" => [
			"<picture><img src='https://peprojects.dev/images/square.jpg'></picture>",
			"project description",			
				]
		], 

	];
?>

<section class="projects-page inner-column">


<?php foreach($sections as $section) { ?>
	<a href="<?=$section["url"]?>" target="<?=$section["target"]?>"><div class="project-card">
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


