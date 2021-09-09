<?php

$page_title = 'Home';
$page_description = 'Hans Ramzan is a British Product Designer who has worked amongst numerous markets within the industry - most notable; consumer product and furniture. With an intelligent approach to design, his ethos is to create thought provoking products.';
$metatags = 'home, pure code, css, java, html';
$page_icon = 'https://hansramzan.com/logo.jpg';
$page_url = 'https://www.hansramzan.com/';

include('php/header.php');

?>
	<section>
		<div class="container">

			<a name="portfolio"></a>
			<div class="intro">
				<!--
				<h2>ANNOUNCEMENTS
					<br>
					Nominated for "Emerging Designer of the Year" and "Product Design of the Year". Please <a href="newsletters/200914.html"><strong>click here</strong></a> to vote for me.
				-->
				<h1>natural | human | seamless</h1>
			</div>

			<div class="grid">

					<div class="grid_segments">
						<img class="grid_image" src="/images/home/home-coming_soon.jpg" alt="Coming Soon">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>Coming Soon</h3>
								<p>October 2021</p>
							</div>
						</div>
					</div>

				<a href="portfolio/five.php">
					<div class="grid_segments">
						<img class="grid_image" src="/images/home/home-five.jpg" alt="Five">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>Five</h3>
								<p>Router</p>
							</div>
						</div>
					</div>
				</a>

				<a href="portfolio/bone.php">
					<div class="grid_segments">
						<img class="grid_image" src="/images/home/home-bone.jpg" alt="Bone">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>Bone</h3>
								<p>Headphones</p>
							</div>
						</div>
					</div>
				</a>

				<a href="portfolio/gloo.php">
					<div class="grid_segments">
						<img class="grid_image" src="/images/home/home-gloo.jpg" alt="Gloo">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>Gloo</h3>
								<p>Smart speaker</p>
							</div>
						</div>
					</div>
				</a>

				<a href="https://arcx.fit/" target="_blank">
					<div class="grid_segments">
						<img class="grid_image" src="/images/home/home-arcx.jpg" alt="ArcX">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>ArcX</h3>
								<p>Smart Ring</p>
							</div>
						</div>
					</div>
				</a>

				<a href="portfolio/catch.php">
					<div class="grid_segments">
						<img class="grid_image" src="/images/home/home-catch.jpg" alt="Catch">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>Catch</h3>
								<p>HIV Detector</p>
							</div>
						</div>
					</div>
				</a>
							
			</div>

		<input type="button" value="Show/Hide" onClick="showHideDiv('divMsg')"/>

			<div id="divMsg">
			<div class="grid">
			
					<div class="grid_segments">
						<img class="grid_image" src="/images/home/home-coming_soon.jpg" alt="Coming Soon">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>Coming Soon</h3>
								<p>October 2021</p>
							</div>
						</div>
					</div>

					<a href="portfolio/five.php">
						<div class="grid_segments">
							<img class="grid_image" src="/images/home/home-five.jpg" alt="Five">
							<div class="grid_overlay">
								<div class="grid_text">
									<h3>Five</h3>
									<p>Router</p>
								</div>
							</div>
						</div>
					</a>

					<a href="portfolio/bone.php">
						<div class="grid_segments">
							<img class="grid_image" src="/images/home/home-bone.jpg" alt="Bone">
							<div class="grid_overlay">
								<div class="grid_text">
									<h3>Bone</h3>
									<p>Headphones</p>
								</div>
							</div>
						</div>
					</a>

					<a href="portfolio/gloo.php">
						<div class="grid_segments">
							<img class="grid_image" src="/images/home/home-gloo.jpg" alt="Gloo">
							<div class="grid_overlay">
								<div class="grid_text">
									<h3>Gloo</h3>
									<p>Smart speaker</p>
								</div>
							</div>
						</div>
					</a>

					<a href="https://arcx.fit/" target="_blank">
						<div class="grid_segments">
							<img class="grid_image" src="/images/home/home-arcx.jpg" alt="ArcX">
							<div class="grid_overlay">
								<div class="grid_text">
									<h3>ArcX</h3>
									<p>Smart Ring</p>
								</div>
							</div>
						</div>
					</a>

					<a href="portfolio/catch.php">
						<div class="grid_segments">
							<img class="grid_image" src="/images/home/home-catch.jpg" alt="Catch">
							<div class="grid_overlay">
								<div class="grid_text">
									<h3>Catch</h3>
									<p>HIV Detector</p>
								</div>
							</div>
						</div>
					</a>

			</div>			
			</div>

		</div>
	</section>

<?php
	include('php/footer.php');
?>