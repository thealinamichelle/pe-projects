<?php

	$json = file_get_contents("content/data/resume.json");
	$resumeData = json_decode($json, true);

	$title = $resumeData["pageTitle"];
	$intro =  $resumeData["introduction"];
	$sections = $resumeData["sections"];
	$jobs = $sections["jobs"]



?>

<section class="inner-column">

<header>
<h1 class="loud-voice"><?=$title?></h1>
</header>

<?php foreach($sections as $section) {?>

	<div class="employment">


		<h2 class="card-title"><?=$section["heading"]?></h2>

			<?php
			 foreach($section["jobs"] as $job) {?>
				<div class="card">
					<h3><?=$job["company"]?></h3>
						
					<ol class="details">
						<li>years: <?=$job["years"]?></li>
						<li>
							<?php 

								if (is_array($job["role"]) ) {
									echo "<ol>";
									foreach($job["role"] as $role) {
										echo "<li> role: " . $role . "</li>";
									} 
									echo "</ol>";
								}
								else {
									echo "role: " . $job["role"];
								}
							?>
						</li>
						<li>accomplishments: <?=$job["accomplishments"]?></li>
						<li>job: <?=$job["tools"]?></li>
					</ol>
				</div>
			<?php }?>
	</div>



	<div class="education">


		<h2 class="card-title"><?=$section["heading"]?></h2>

			<?php foreach($section["experience"] as $exp) {?>
				<div class="card">
					<h3><?=$exp["institution"]?></h3>
						
					<ol class="resume-details">
						<li>years: <?=$exp["years"]?></li>
						<?php foreach($exp["accomplishments"] as $accomplish) {?><li>role: <?=$accomplish?></li><?php }?>
						<li>accomplishments: <?=$exp["accomplishments"]?></li>
					</ol>
				</div>
			<?php }?>

	</div>


	<div class="skills">

		<h2 class="card-title"><?=$section["heading"]?></h2>

			<?php foreach($section["abilities"] as $skill) {?>
				<div class="card">
					<ol class="resume-details">
<li><?=$skill?></li><?php// }?>
					</ol>
				</div>
			<?php }?>

	</div>

<?php }?>

</section>

<?php// formatcode($resumeData);
?>
