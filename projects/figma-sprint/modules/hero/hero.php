	<inner-column>
		<h1 class="loud-voice">
			 <?=$heading?>
		</h1>
		<p class="poster-voice">
			<?=$teaser?>
		</p>
		
		<wrapper>
			<?php foreach ($m["actions"] as $a) {
				$buttonStyle = "";

				if (isset($a["style"]) ){
					$buttonStyle = $a["style"];
				}
				?>
		<a href="<?$a['url']?>" class="button <?=$buttonStyle?>"><?=$a["text"]?></a> <?php }?>
	</wrapper>
	</inner-column>

<!-- <section class="hero" style="background-image:url('')"> -->