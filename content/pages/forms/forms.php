
<?php 

	$json = file_get_contents('content/data/projects.json'); 
		//passes in the json data
	$sections = json_decode($json, true); 
		//do you want this to be an associative array?
	?>

<section class="projects-page inner-column">


<?php foreach($sections as $section) { ?>
	<!-- <div class="form-box"> -->
	<a href="<?=$section["url"]?>">
		<div class="project-card form-card">
			
			<h2 class="project-title"> 
				<?=$section["heading"]?>
			</h2>


		</div>
	</a>

<?php } ?>

</section>





