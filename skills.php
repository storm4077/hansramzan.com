<?php

$page_title = 'Skills';
$page_description = 'Hans Ramzan has a range of skills which are continually being developed. These skills are vital to the industrial product design process and include (but not limited to); Sketching, CAD Modeling, Rendering + Visualisation, Vector Art, Graphic Design and even Motion Design including video and animation';
$metatags = 'product design methodology, sketching, cad modeling, cad rendering, 3d visualisation, vector art, graphics, graphic design, presentation boards, video, animation, design process, design ideology';
$page_icon = 'https://hansramzan.com/logo.jpg';
$page_url = 'https://www.hansramzan.com/skills.php';

include('php/header.php');

?>
	<section>
		<div class="container">
			<!-- INTRO -->
			<div class="container">
				<div class="project_name">
					<h1>Skills</h1>
				</div>
				<div class="intro">
					<h1>A selection of individual design skills, separated by category</h1>
				</div>
			</div>

			<div class="grid">

				<a href="skills/sketching.php">
					<div class="grid_segments">
						<img class="grid_image" src="/images/skills/skills-sketching.jpg" alt="Sketching">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>Sketching</h3>
							</div>
						</div>
					</div>
				</a>

				<a href="skills/vector_drawing.php">
					<div class="grid_segments">
						<img class="grid_image" src="/images/skills/skills-vectors.jpg" alt="Vector Drawing">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>Vector Drawing</h3>
							</div>
						</div>
					</div>
				</a>

				<a href="skills/cad.php">
					<div class="grid_segments">
						<img class="grid_image" src="/images/skills/skills-cad.jpg" alt="CAD">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>CAD</h3>
							</div>
						</div>
					</div>
				</a>

				<a href="skills/graphic_design.php">
					<div class="grid_segments">
						<img class="grid_image" src="/images/skills/skills-graphics.jpg" alt="Graphic Design">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>Graphic Design</h3>
							</div>
						</div>
					</div>
				</a>

				<a href="skills/video_and_animation.php">
					<div class="grid_segments">
						<img class="grid_image" src="/images/skills/skills-video.jpg" alt="Video and Animation">
						<div class="grid_overlay">
							<div class="grid_text">
								<h3>Video + Animation</h3>
							</div>
						</div>
					</div>
				</a>
				
			</div>
		</div>
	</section>

<?php
	include('php/footer.php');
?>