<?php 

	$id = $m["form-id"];

?>

<inner-column class="split">
	<form class="hello" id="<?=$id?>">


		<output class='tiny-voice' id="<?=$id?>message"><p>Hello What's your Name?</p></output>


		<?php foreach ($m["form-inputs"] as $input) {
					$pH = $input["placeholder"];
					$inputType = $input["type"];
					$inputId = $id . $input["id"];
					// $for = $input["for"];
		?>

					
				<label for="<?=$inputId?>" class="visually-hidden"><p><?=$heading?></p></label>
				<input id="<?=$inputId?>" type="<?=$inputType?>" placeholder="<?=$pH?>">

		<?php }?>


		

		<!-- <output class='tiny-voice' id="<?=$id?>message"></output> -->

		<?php 
		myCheckandPrint($m, "a", "actions", "formButton"); 
		?>	

	</form>

	

</inner-column>
<script src="forms/hello/hello.js"></script>

<!-- //prompt as for name -->
<?php 


$id = null;


?>
