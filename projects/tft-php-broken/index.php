<?php include("head.php") ?>

<?php include("header.php") ?>


<?php 
$cards = [
				[
					"heading" => "d monday",
					"details" => [
						[
						"url" => "https://goo.gl/maps/MYFUM9fW9hC7hCU89",
						"target" => "maps",
						"name" => "Name of the Place",
						"address" => "5555 Address St.",
						]
				]
			],
			
				[
					"heading" => "day-letter tuesday",
					"details" => [
						[
						"url" => "https://goo.gl/maps/MYFUM9fW9hC7hCU89",
						"target" => "maps",
						"name" => "A Cool Joint",
						"address" => "65421 Famouse Lane",
						]
					]
				],
				[
					"heading" => "day-letter wednesday",
					"details" => [
						[
						"url" => "https://goo.gl/maps/MYFUM9fW9hC7hCU89",
						"target" => "maps",
						"name" => "Where?",
						"address" => "2222 Sunshine Rd.",
						]
					]
				],
				[
					"heading" => "day-letter thursday",
					"details" => [
						[
						"url" => "https://goo.gl/maps/MYFUM9fW9hC7hCU89",
						"target" => "maps",
						"name" => "Isn't that Spot Sketchy",
						"address" => "5678 Narrow Lane",
						]
					]
				],
					[
					"heading" => "day-letter friday",
					"details" => [
						[
						"url" => "https://goo.gl/maps/MYFUM9fW9hC7hCU89",
						"target" => "maps",
						"name" => "That Spot By Your Work",
						"address" => "1234 No Parking BLVD",
						]
					]
				],
				[
					"heading" => "day-letter saturday",
					"details" => [
						[
						"url" => "https://goo.gl/maps/MYFUM9fW9hC7hCU89",
						"target" => "maps",
						"name" => "Too Far",
						"address" => "10004 Movie Star Ave",
						]
					]
				],
				[
					"heading" => "day-letter sunday",
					"details" => [
						[
						"url" => "https://goo.gl/maps/MYFUM9fW9hC7hCU89",
						"target" => "maps",
						"name" => "Is That In Orange County",
						"address" => "5678 Parking Lot Dr.",
						]
					]
				],
		];
?>
	
<!-- outter frame	 -->
	<section class="schedule">
<!-- 	outer frame	 -->
		<div class="inner-column">



<!-- MONDAY -->

	<?php foreach($cards as $card) { ?>
		<section class="days">
	<div class="<?=$card["heading"]?>">
		<picture></picture>
	</div>
<?php foreach($card["details"] as $detail) { ?>

	<a href="<?=$detail["url"];?>" target="<?=$detail["target"];?>">
		

		<div class="location-information">
			<p><?=$detail["name"];?></p>
			<address><?=$detail["address"];?></address>
		</div>	
</a>
</section>
		<?php }} ?>	

<!-- </div> -->


<!-- inner-column div -->
		</div>	
<!-- outer frame	 -->
	</section>
			

	
</main>
</section>

<?php include("footer.php") ?>