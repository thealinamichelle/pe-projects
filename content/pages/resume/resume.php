<?php

	$json = file_get_contents("content/data/resume.json");
	$resumeData = json_decode($json, true);

	$title = $resumeData["pageTitle"];
	$intro =  $resumeData["introduction"];
	$sections = $resumeData["sections"];
	$jobs = $sections["jobs"]



?>
<section class="inner-column">

<?php foreach($sections as $section) {?>

<div class="resume-card">
<?php	echo $section["heading"] . "<br>";
?>
</div>
<?php }?>

<div class="resume-card">

<?php 
foreach($jobs as $job) {
	echo $job;
}

		?>






<?php
	// 	foreach($sections["jobs"] as $job) {
	// 		echo $job["company"] . "<br>";
		// 	echo $job["years"] . "<br>";
		// 	foreach($job["role"] as $role) { echo $role . "<br>";}
		// 	echo $job["accomplishments"] . "<br>";
		// 	echo $job["tools"] . "<br>";
?>
<!-- </div>
<div class="resume-card"> -->

<?php
	// echo $section["heading"] . "<br>";
	// 	foreach($section["experience"] as $exp) {
	// 		echo $exp["institution"] . "<br>";
	// 		echo $exp["years"] . "<br>";
	// 		foreach($exp["accomplishments"] as $accomplish) {
	// 			echo $accomplish . "<br>";
	// 			}
	// 		echo $exp["accomplishments"] . "<br>";
	// 	}
?>
<!-- </div>
<div class="resume-card"> -->
<?php
// 			echo $section["heading"] . "<br>";
// 				foreach($section["abilities"] as $skill) {
// 						echo $skill . "<br>";
// 			}
// }










?>

</div>
</section>

<?php// formatcode($resumeData);
?>
