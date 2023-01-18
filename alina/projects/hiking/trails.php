<?php 



include("data.php");



?>
<div class="grid">
	<?php foreach ($trails as $trail){?>
		<section class="card">
			<div>
					<h2><?=$trail["name"]?></h2>
			</div>
			<div>
				<picture>
					<img src="<?=$trail["image"]?>">
				</picture>

					<p><?=$trail["short-desc"]?></p>
			</div>

	</section>
	<?php };?>
</div>



