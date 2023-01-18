<?php include("data.php");?>








<div class="grid">
				<?php foreach ($trails as $trail) {?>
	<section class="card">


		<div>


			<a href="?page=details&trail=<?=$trail['id']?>">	
				<h2><?=$trail["name"]?></h2>
		</div>

		<div>

			<picture>

				<img src="<?=$trail['image']?>">
			</picture>

			<p>Lorem ipsum dolor sit, amet consectetur, adipisicing elit.</p>


			</a>
		</div>

	</section>
	<?php }?>

</div>


