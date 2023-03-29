
<?php 

	$json = file_get_contents('content/data/forms.json'); 
		//passes in the json data
	$sections = json_decode($json, true); 
		//do you want this to be an associative array?
	?>
<inner-column>
<section class="projects-page">


<?php foreach($sections as $section) { ?>
	<!-- <div class="form-box"> -->
	<a href="projects/e4p/<?=$section["url"]?>">
		<div class="project-card form-card">
			
			<h2 class="project-title"> 
				<?=$section["heading"]?>
			</h2>


		</div>
	</a>

<?php } ?>

</section>

<section class="projects-page">


<?php foreach($sections as $section) { ?>
	<!-- <div class="form-box"> -->
		<div class="project-card form-card">
			
				<?php echo $section["url"]?>


		</div>
	</a>

<?php } ?>

</section>

<?php include('e4p/simple-math.php') ?>



