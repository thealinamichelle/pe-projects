<inner-column class="split">
	<div class="inputs">
		<form class="madlib">

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
	
			<?php	} 

			myCheckandPrint($m, "a", "actions", "formButton");
			
			?>	
		</form>
	</div>

		<output class='madlib-message tiny-voice'></output>
</inner-column>


