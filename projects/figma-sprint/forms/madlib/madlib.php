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
				<label for="<?=$for?>"><?=$for?></label>
				<input id="<?=$inputId?>" for="<?=$for?>" type="" placeholder="<?=$pH?>">
				
			</div>
	
			<?php	} 

			myCheckandPrint($m, "a", "actions", "formButton");
			
			?>	
		</form>
	</div>

		<output class='madlib-message tiny-voice'></output>
</inner-column>


<script src="forms/madlib/madlib.js"></script>