<?php include("head.php")?>

<?php


function show($variable) {
  echo "<pre class='code'>";
    echo "<code>";
      echo print_r( $variable );
    echo "</code>";
  echo "</pre>";
}




$message = null;

if ( isset($_POST["sub"]) ) {
	
}


?>

<h1 class="form-title">TITLE OF FORM</h1>

<form method="POST">

	<label></label><input type="" name="">

	<button name="sub">Submit</button>
	
	<section class="result">
		<p>
			<?=$message?>


<?php show( $_POST ); ?>

		</p>
	</section>
</form>






<?php include("footer.php")?>
