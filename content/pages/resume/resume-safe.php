<section class="inner-column">

<header>
<h1 class="loud-voice"><?=$title?></h1>
</header>

<?php foreach($sections as $section) {?>

	<div class="employment">


		<h2 class="card-title"><?=$section["heading"]?></h2>

			<?php if($sections[0][1] == $sections["jobs"]) {



			 foreach($section["jobs"] as $job) {?>
				<div class="card">
					<h3><?=$job["company"]?></h3>
						
					<ol class="details">
						<li>years: <?=$job["years"]?></li>
						<?php foreach($job["role"] as $role) {?><li>role: <?=$role?></li><?php }?>
						<li>accomplishments: <?=$job["accomplishments"]?></li>
						<li>job: <?=$job["tools"]?></li>
					</ol>
				</div>
			<?php }?>
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