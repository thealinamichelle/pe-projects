<?php include("header.php")?>
<?php include("sub-page-nav.php") ?>




<?php


$pupswhohike = [
	"name" => "Pups Who Hike",
	"years" => "Septemner 2019 - June 2022",
	"job title" => "Sole Properietor",
	"accomplishments" => "...",
];

		//"accomplishments" - your strongest, most relevant accomplishments.//Lead with strong action verbs and follow with an accomplishment rather than a task//Employers are interested in what you’ve achieved, not just the tasks you’ve done. When possible, use numbers to measure your success.

$doggiebliss = [
	"name" => "Doggie Bliss",
	"years" => "August 2016 - September 2019",
	"job title" => "Administrative Office Assistant <li>Pet Service Professional</li>",
	"accomplishments" => "...",
];

$Paint = [
	"name" => "Paint:Lab",
	"years" => "May 2015 - September 2015",
	"job title" => "Painting Instructor",
	"accomplishments" => "...",
];

$Nova = [
	"name" => "Star Education",
	"years" => "July 2014 - August 2016",
	"job title" => "Art Instructor",
	"accomplishments" => "...",
];

$Privateart = [
	"name" => "Self Employed",
	"years" => "2014 - 2017",
	"job title" => "Private Art Instructor",
	"accomplishments" => "...",
];


		//"accomplishments" - your strongest, most relevant accomplishments.//Lead with strong action verbs and follow with an accomplishment rather than a task//Employers are interested in what you’ve achieved, not just the tasks you’ve done. When possible, use numbers to measure your success.


$employement = [$pupswhohike, $doggiebliss, $Paint, $Nova, $Privateart];
?>



<?php 

$college = [
	"name" => "California State University Long Beach / Drawing and Painting Bachelors of Fine Arts",
	"years" => "September 2007- May 2014",
	"accomplishments" => "President’s List:  2008, 2011, 2013<li>Dean’s List: 2009, 2014</li>",
];


$academy = [
	"name" => "Academy for Dog Trainers",
	"years" => "May 2018 - May 2020",
	"accomplishments" => "President’s List:  2008, 2011, 2013<li>Dean’s List: 2009, 2014</li>",
];

$PE = [
	"name" => "Perpetual Education",
	"years" => "September 2022 - Current",
	"accomplishments" => "This website!",
];

   
$education = [$college, $academy, $PE];






?>


<?php


$skills =[
	 "Affinity Designer", "Google Sheets", "Adobe Photoshop", "Adobe Illustrator", "Desiging ethical training frameworks to support peers and create positive social structures.", " Animal training with applied behavioral analysis and classical conditioning.", "Painting in traditional mediums"]

?>







<section class="inner-column">

<div class="Skills">
	<h2 class="card-title">Skills</h2>
				<div class="resume-card card">

	<?php


	foreach ($skills as $skill) {?>




				
				<ol class="resume-details">
					<li> 
						<?=$skill?>
					</li> 
				
				</ol>
					<?php } ?>
			</div>


	</div>




		<div class="employment">
		<h2 class="card-title">Education</h2>


	<?php foreach ($education as $school) {

		 	$name = $school["name"];//"name of employer",
		 	$years = $school["years"];//"years",
		 	$noted = $school["accomplishments"];//"accomplishments" - your strongest, most relevant accomplishments.
				//Lead with strong action verbs and follow with an accomplishment rather than a task
				//Employers are interested in what you’ve achieved, not just the tasks you’ve done. When possible, use numbers to measure your success.

		 	?>


			<div class="resume-card card">
				<h3><?=$name?></h3>
				
				<ol class="resume-details">
					<li> 
						<?=$years?>
					</li> 

					<li> 
						<?=$noted?>
					</li> 
				
				</ol>
			</div>

	<?php } ?>
	</div>



<div class="employment">
		<h2 class="card-title">Employment</h2>

	<?php


	foreach ($employement as $job) {

		 	$name = $job["name"];//"name of employer",
		 	$years = $job["years"];//"years",
		 	$jtitle = $job["job title"];//"job title",
		 	$jdone = $job["accomplishments"];//"accomplishments" - your strongest, most relevant accomplishments.
				//Lead with strong action verbs and follow with an accomplishment rather than a task
				//Employers are interested in what you’ve achieved, not just the tasks you’ve done. When possible, use numbers to measure your success.

		 	?>



			<div class="resume-card card">
				<h3><?=$name?></h3>
				
				<ol class="resume-details">
					<li> 
						<?=$years?>
					</li> 
				
					<li> 
						<?=$jtitle?>
					</li> 

					<li> 
						<?=$jdone?>
					</li> 
				
				</ol>
			</div>

	<?php } ?>
	</div>


</section>

<?php include("footer.php") ?>