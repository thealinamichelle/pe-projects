<inner-column class="split">

		<form class="madlib">
			<div>
				<fieldset>
					<?php foreach ($m["form-inputs"] as $input) {
								$pH = $input["placeholder"];
								$type = $input["type"];
								$inputId = $input["id"];
								$for = $input["for"];
					?>

					<div class="field <?=$type?>">
						<label for="<?=$for?>"><?=$for?></label>
						<input id="<?=$inputId?>" for="<?=$for?>" type="<?=$type?>" placeholder="<?=$pH?>">
						
					</div>
			
					<?php	} ?>
				</fieldset>

				<output class='madlib-message tiny-voice'></output>

			</div>

		<?php myCheckandPrint($m, "a", "actions", "formButton");?>	
		</form>



</inner-column>


<script src="forms/madlib/madlib.js"></script>