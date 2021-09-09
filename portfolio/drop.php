<?php

$page_title = 'Drop';
$page_description = 'Drop is a compact, eco friendly water bottle which encourages a steady flow of hydration throughout the day. This product is made entirely from plants with the primary aim of reducing negative environmental impact. It is common knowledge that single-use plastic bottles have a devastating effect on the environment - They take approximately 700 years to dissolve.';
$metatags = 'environment, eco friendly, green, plants, drink bottle, healthy, gym, healthy lifestyle, polylactic acid, cork, recyclable, recycle, upcycle, recycling, wood, plastic, bioplastic, bio plastic, pla, 3d printing, smart device, water device, water bottle, clean design';
$page_icon = 'https://hansramzan.com/images/home/home-drop.jpg';
$page_url = 'https://www.hansramzan.com/portfolio/drop.php';

include('../php/header.php');

?>

	<section>
		<!-- INTRO -->
		<div class="container">
			<div class="project_name">
				<h1>drop</h1>
			</div>
			<div class="intro">
				<h1>The beautiful, eco-friendly bottle which promotes "healthy hydration"</h1>
			</div>
		</div>

		<div class="container">
			<div class="portfolio_image hero">
				<img src="/images/portfolio/drop/drop-hero.jpg" alt="African blood test with sharp razor">
				<p class="caption">Single-use plastic bottles have a devastating effect on the environment - They take approximately 700 years to dissolve. On the other hand, with many reusable bottles, water left inside causes breakdown of chemicals from the plastic which leak into the water and induce bacteria growth. Furthermore, 75% of western society are chronically dehydrated - Drop will change the way we drink forever.</p>
			</div>

			<div class="subscribe preregister">
				<h3>*SOLD OUT*</h3>
				<br>
				<h3>Want to buy Drop? Register your interest here.</h3>
				<br>
				<form action="../portfolio/pre-register.php" method="post">
					<input type="email" name="email" id="email" required placeholder="email address">
					<input value="Register" type="submit">
				</form>
				<br>
				<p>(In celebration of winning the 'Design of the Year' award, all signups will enter a chance of winning a FREE bottle.)</p>
			</div>

			<!-- <hr>
			<?php
				//include('../php/drop-buy.php');
			?>
			<hr> -->


			<video class="portfolio_image" controls poster="../videos/portfolio/drop/drop-promo-thumb.jpg">
				<source src="../videos/portfolio/drop/drop-promo-video.mp4" type="video/mp4">
				Your browser is unable to view this video.
			</video>

			<div class="portfolio_image">
				<img src="/images/portfolio/drop/drop-sketches.jpg" alt="Sketches of Drop water bottle">
				<p class="caption">Water bottle sketch concepts</p>
			</div>

			<div class="portfolio_image">
				<img src="/images/portfolio/drop/drop-top_off.jpg" alt="Drop water bottle with cork off">
				<p class="caption">Cork stopper removed from bottle</p>
			</div>

			<div class="portfolio_image">
				<img src="/images/portfolio/drop/drop-3x.jpg" alt="3 drop water bottles">
				<p class="caption">Final design</p>
			</div>

			<div class="portfolio_image">
				<img src="/images/portfolio/drop/drop-desk.jpg" alt="Drop water bottle being used on desk">
				<p class="caption">Drop used in a studying and working environment</p>
			</div>

			<div class="portfolio_image">
				<img src="/images/portfolio/drop/drop-holding.jpg" alt="woman's hands holding drop water bottle">
				<p class="caption">Final product</p>
			</div>			

			<div class=portfolio_information>
				<p>Drop encapsulates 3 main elements;</p>
				<br>
				<ul>
					<li>
					The Drop bottle is entirely manufactured from PLA – a bioplastic fermented from plant starch such as corn, sugarcane, cassava or sugar beet pulp. The stopper/lid is made from locally sourced natural cork. Furthermore, the product is 100% recyclable since PLA - It takes just 1 month to fully biodegrade.
					</li>
					<li>
						“Healthy Hydration” is a term which discourages ‘binge drinking’ of water (drinking too much in a short space of time). Instead, it can hold up to 156ml of water – ensuring the recommended hourly intake of water is consumed. Numerous hydration tests were carried out and 2L – 2.5L of water is the recommended daily intake. Humans are awake for an average of 16 hours a day. This means that 156ml of water should be consumed every hour. In addition, it forces people to regularly refill the bottle with fresh water.
					</li>
					<li>
						Drop has been beautifully designed to be comfortable to use, as well as small enough to be thrown in a bag, or held without becoming a burden - the ultimate everyday accessory.
					</li>
				</ul>
				<p>Acknowledgements: Ideation (Iriza, B), Research (Royds, C), Minor Detailing (Beyrouthy, C), Testing (LUMA-iD Ltd.), Prototyping (Express Prototype Ltd.)</p>
				<p>Date: November 2019</p>

				<br>
				<hr>
				<br>
			</div>

			<!--
			<?php
				// include('../php/drop-buy.php');
			?>
			-->


			<div class="more_projects">
				<a href="/portfolio/clockvid-20.php">
					<div class="previous_project">
						<img class="more_projects-image" src="/images/home/home-clockvid-20.jpg" alt="Clockvid-20">
						<p class="more_projects-caption">< Clockvid-20</p>
					</div>
				</a>
				<a href="/portfolio/catch.php">
					<div class="next_project">
						<img class="more_projects-image" src="/images/home/home-catch.jpg" alt="Catch">
						<p class="more_projects-caption">Catch ></p>
					</div>
				</a>
				<div>
					<h3>More Projects</h3>
				</div>
			</div>

		</div>
	</section>

<?php
	include('../php/footer.php');
?>