<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width">
		<meta name="viewport" content="width=device-width, intial-scale=1">

		<title>MADLIBS with PHP</title>
		<meta name="description" content="[[insert description]]">
		<meta property="og:image" content="images/default.png">

		<link rel="stylesheet" href="css/style.css">
</head>

<body>
	
	<header class="site-header">
		<div class="inner-column"> 
				<h1>MadLibs with PHP</h1>
		</div>

	</header>

		
	<main class="page-content">

		<section class="first">
			<div class="inner-column"> 

				<h2> Sample Madlib </h2>

				<?php

				$noun = "butt";
				$pluralnoun = "crawdads";
				$verb = "sliding";
				$verb2 = "masticate";
				$bodypart = "toe";
				$adjective = "crusty";
				$pluralnoun2 = "tribbles"
				?>


				<?php 

				echo "<p>" . "Today, every student has a computer small enough to fit into their " . "<span>" .  "$noun" . "</span>" . "." . " You can solve any math problem by simply pushing the computer’s little " . "<span>" . "$pluralnoun" . "</span>" . "." . "</p>";
					?>

					<p>Computers can add, multiply, divide, and <?=$verb?>. They can also <?=$verb2?> better than a human.

					Some computers have their own <span><?php echo $bodypart;?></span> . Other’s have a <span> <?php echo $adjective;?></span> screen that shows all kinds of <span><?php echo $pluralnoun2;?></span> and <span><?php echo $adjective;?></span> figures.</p>
			</div>
		</section>

		<section class="second">
			<div class="inner-column">

				<h2> Building up to my own madlib? I think I was supposed to do this first. Oops </h2>
				<li> <?php echo "Let's echo a string." ?> </li>
				<li> <?php echo 78 ?></li>
				<li> <?php echo "this is a string " . 78 ?></li>
				<li><?php echo "well that was actually concatenating a string and a number together." . " I'm not sure what 'string + a number' means." . "This is a third sentence." ?></li>
				<li><?php echo "isn't this the same directions again?" . 46?></li>
				<li><?php echo "What is four plus four? " . "<span>" . (4+4) . "</span>" ?> </li>

				<?php $blank = "Answer: Grandpa is bald."?>
				<li>4. Grandpa went for a walk, and it started raining. He forgot to bring an umbrella and didn’t have a hat. When he got home, his clothes were soaking wet, but not a hair on his head was wet. How was this possible? <span><?= $blank?></span> </li>
				
				<?php $link = "https://bit.ly/3HXv7Jn"?>

				<li> Here is a <a class="hamster-class"href="<?=$link?>">hamster</a> meme.
				</li>

				</ul>
			</div>

		</section>

		<section class= "third">
			<div class="inner-column">
				<h2> Custom Madlib! </h2>
				<div class="custom">
					<?php 

					$sugar ="Sugar";
					$spice ="spice";
					$nice ="nice";
					$girls ="girls";
					$utonium ="Utonium";
					$x ="X";
					$blossom ="Blossom";
					$bubbles ="Bubbles";
					$buttercup ="Buttercup";
					$crime ="crime";
					$evil ="evil";

					$sugar2 ="Beans";
					$spice2 ="greens";
					$nice2 ="sardines";
					$girls2 ="warthogs";
					$utonium2 ="Dorito";
					$x2 ="Y2K";
					$blossom2 ="Peter" ;
					$bubbles2 ="Piper";
					$buttercup2 ="Pickles";
					$crime2 ="broccoli";
					$evil2 ="psychology";


					$sugar3 ="Empanada";
					$spice3 ="enchilada";
					$nice3 ="tostada";
					$girls3 ="mariachi bands";
					$utonium3 ="Chaos";
					$x3 ="Q";
					$blossom3 ="Butter" ;
					$bubbles3 ="Bitter";
					$buttercup3 ="Bandit";
					$crime3 ="puggles";
					$evil3 ="long hair";
					?>

					<?php 
					echo "<p>" . "<span>" . "$sugar" . "</span>" . ", " . "<span>" . "$spice" . "</span>" . ", and everything " . "<span>" . "$nice" . "</span>" . "These were the ingredients chosen to create the perfect little " . "<span>" . "$girls" . "</span>" . ". But Professor " . "<span>" . "$utonium" . "</span>" . " accidentally added an extra ingredient to the concoction--Chemical " . "<span>" . "$x" . "</span>" . ". Thus, The Powerpuff " . "<span>" . "$girls" . "</span>" . " were born, using their ultra-super powers. " . "<span>" . "$blossom" . "</span>" . ", " . "<span>" . "$bubbles" . "</span>" . ", and " . "<span>" . "$buttercup" . "</span>" . " have dedicated their lives to fighting " . "<span>" . "$crime" . "</span>" . "and the forces of " . "<span>" . "$evil" . "</span>" . ".";

					?>

				</div>
				
				<div class="custom">
					<p>
						<span><?=$sugar2?></span>, <span><?=$spice2?></span>, and everything <span><?=$nice2?></span>. These were the ingredients chosen to create the perfect little <span><?=$girls2?></span> .But Professor <span><?=$utonium2?></span> accidentally added an extra ingredients to the concoction--Chemical <span><?=$x2?></span>. Thus, The Powerpuff <span><?=$girls2?></span> were born. Using their ultra-super powers
						<span><?=$blossom2?></span>, <span><?=$bubbles2?></span>, and <span><?=$buttercup2?></span>
						have dedicated their lives to fighting <span><?=$crime2?></span>
						and the forces of <span><?=$evil2?></span> .
					</p>
				</div>

				<div class="custom">
						<p>
					<span><?php 
					echo $sugar3?></span>, <span><?php 
					echo $spice3?></span>, and everything <span><?php 
					echo $nice3?></span>. These were the ingredients chosen to create the perfect little <span><?php 
					echo $girls3?></span> .But Professor <span><?php 
					echo $utonium3?></span> accidentally added an extra ingredients to the concoction--Chemical <span><?php 
					echo $x3?></span>. Thus, The Powerpuff <span><?php 
					echo $girls3?></span> were born. Using their ultra-super powers
					<span><?php 
					echo $blossom3?></span>, <span><?php 
					echo $bubbles3?></span>, and <span><?php 
					echo $buttercup3?></span>
					have dedicated their lives to fighting <span><?php 
					echo $crime3?></span>
					and the forces of <span><?php 
					echo $evil3?></span> .
				</p>

				</div>
			</div>	
		</section>


	</main>
	
	<footer class="site-footer">
		<div class="inner-column"> 
		</div>		
	</footer>

	


</body>
	</html>