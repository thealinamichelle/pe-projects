<?php 

	$json = file_get_contents('content/data/projects.json'); 
		//passes in the json data
	$projData = json_decode($json, true); 
		//do you want this to be an associative array?
?>

<section class="inner-column">

<?php foreach($projData as $section) {
	
	$projurl = $section["url"];
	$heading = $section["heading"];

	$target= strtok($section["heading"], " ");	
	
	if ($target == "PHP") {
		$target = "";
		$queryString = "?page=";
	} else {
		$queryString = "";
	}
?>

	<a href="<?=$queryString?><?=$projurl?>" target="<?=$target?>">
		<div class="card">
			<h2 class="attention-voice"><?=$heading?></h2>

			<ol class="details">
				<?php foreach($section["works"] as $work) {?>
				<li> <?=$work?></li>
<?php }?>
			</ol>
		</div>
	</a>
<?php } ?>

</section>


