<?php include("functions.php")?>
<?php include("arrays.php")?>
<?php include("head.php")?>



<?php

foreach ($pages as $page) {
	include($page["url"]);

}

?>




<?php include("footer.php") ?>