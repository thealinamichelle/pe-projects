<inner-column class="split">
	<form class="hello">
		<p><?=$heading?></p>

		<?php foreach ($m["form-inputs"] as $input) {
					$pH = $input["placeholder"];
					$inputType = $input["input-type"];
					$inputId = $input["id"];
					$for = $input["for"];
		?>

			<div class="field <?=$inputType?>">
				<input id="<?=$inputId?>" for="<?=$for?>" type="<?=$inputType?>" placeholder="<?=$pH?>">
				<label for="<?=$for?>"></label>
			</div>

		<?php }?>


		<?php 
		myCheckandPrint($m, "a", "actions", "formButton"); 
		?>	
	</form>

	<output class='hello-message tiny-voice'></output>

</inner-column>



<!-- //prompt as for name -->
