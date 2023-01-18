<?php include("data.php");?>

<?php

$detail = null;

if ( isset($_GET["trail"]) ) {
	$this_trail_id= $_GET["trail"];

}


  foreach ($trails as $trail) {

   if ( $this_trail_id == $trail["id"]) {
   	$detail = $trail;
	}

}



if ( isset($detail) ) { ?>

		<section class="detail">

			<div>
					<h2><?=$detail["name"]?></h2>
			</div>
			
			<div>
				<picture>
					<img src="<?=$detail['image']?>">
				</picture>

				Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Ad perspiciatis sit facilis, minus recusandae earum similique fugiat quibusdam ea totam id delectus ut quo. Blanditiis possimus assumenda perspiciatis aperiam ex!
			</div>

	</section>


<?php }

 else { ?>
		<h1>No trail found</h1>


<?php } ?>

	








