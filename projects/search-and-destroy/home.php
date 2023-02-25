<?php


	$json = file_get_contents('data/arlen.json');
	$arlenData = json_decode($json, true);


?>

<div class="inner-column">

<?php foreach ($arlenData as $a) {?>

  <section class='page-section'> 
      <a href="#"><?=$a["number"];?></a>
      <h2><?=$a["title"]?></h2>
      
    
    <div class="line">
    <p><?=$a["description"]?></p> </div>

    <picture>
      <img src="images/<?=$a["image"]?>">
    </picture>
    
  <span></span>
  </section>
  


<?php } ?>    

</div>
	</main>

