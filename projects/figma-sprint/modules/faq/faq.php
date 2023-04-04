<?php 

	$json = file_get_contents('data/faq.json'); 
	$faqData = json_decode($json, true); 
?>
<inner-column>
	<h1 class="loud-voice">
		 Frequently Asked Questions
	</h1>
	<p class="calm-voice tag-line">
		Luctus felis sit lectus tristique diam ornare bibendum. Arcu auctor suspendisse luctus amet bibendum pellentesque lorem. Malesuada lobortis tristique tortor.
	</p>

	<div class="questions">

		<?php foreach ($faqData as $f) {?>
			<details class="qa-pair">
			<summary>
				<p class="tiny-voice bold-voice">
				<?= $f["question"];?>
				</p>
			</summary>
				<p class="calm-voice">
					<?= $f["answer"];?>
				</p>
				<!-- </div> -->
			</details>
		<?php
		} ?>
	</div>
</inner-column>
