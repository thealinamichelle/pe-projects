<?php 

	$id = $m["form-id"];

?>

<inner-column class="split">
	<form class="hello" id="<?=$id?>">
		<p><?=$heading?></p>

		<?php foreach ($m["form-inputs"] as $input) {
					$pH = $input["placeholder"];
					$inputType = $input["input-type"];
					$inputId = $id . $input["id"];
					// $for = $input["for"];
		?>

			<div class="field <?=$inputType?>">
				<input id="<?=$inputId?>" type="<?=$inputType?>" placeholder="<?=$pH?>">
				<label for="<?=$inputId?>"></label>
			</div>

		<?php }?>


		<?php 
		myCheckandPrint($m, "a", "actions", "formButton"); 
		?>	
	</form>

	<output class='tiny-voice' id="<?=$id?>message"></output>

</inner-column>
<script src="forms/hello/hello.js"></script>

<!-- //prompt as for name -->
<?php 


$id = null;


?>
