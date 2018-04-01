<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PhyCalc | Physics Calculators</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="phyCalc.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		include_once "navSearch.php";
	 ?>

		<div class="banner">
			<div id="banner-inner">
				<p id="banner-heading">Calculate Solutions for Physics Problems</p>
				<span id="get-started-btn">Get Started</span>
			</div>
		</div>

		<div class="how-it-works-section">
			<div class="row text-center">
				<div class="col-md-4">
					<img src="../img/search-icon.png" alt="Search Icon"/>
					<div class="hiw-caption">
						<p>Search our database by topic or topic-related terms</p>
					</div>
				</div>
				<div class="col-md-4">
					<img src="../img/review-icon.png" alt="Review Icon"/>
					<div class="hiw-caption">
						<p>Review practice problems and step by step solutions</p>
					</div>
				</div>
				<div class="col-md-4">
					<img src="../img/solution-icon.png" alt="Solution Icon"/>
					<div class="hiw-caption">
						<p>Solve your own problems by inputing given variables</p>
					</div>
				</div>
			</div>
		</div>

		<div id="main-content">
			<div id="features-heading-container">
				<div class="animated fadeInLeftBig" id="featured-topic-heading">Featured Topics</div>
			</div>
			<div class="row card-row">
				<div class="col-md-3">
					<a href="displacement.html">
						<div class="card" href="displacement.html">
							<div class="button-to-page">View Topic</div>
							<img src="../img/home-displacement.png" class="responsive">
							<div class="caption">
								<h4 class="text-center">Displacement</h4>
								<div class="line-divider"></div>
								<ul class="text-center">
									<li>Net Distance</li>
									<li>Starting Position</li>
									<li>Final Position</li>
								</ul>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="vectorDisplacement.html">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="../img/2d-displacement.png" class="img-responsive">
							<div class="caption text-center">
								<h4>2D Displacement</h4>
								<div class="line-divider"></div>
								<ul>
									<li>Trigonometry</li>
									<li>Vector Travel</li>
									<li>Two-dimensional</li>
								</ul>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="velocity.html">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="../img/home-velocity.png" class="img-responsive">
							<div class="caption text-center">
								<h4>Velocity</h4>
								<div class="line-divider"></div>
								<ul>
									<li>Vector Travel</li>
									<li>Direction</li>
									<li>Speed v. Velocity</li>
								</ul>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="acceleration.html">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="../img/home-acceleration.png" class="img-responsive">
							<div class="caption text-center">
								<h4>Acceleration</h4>
								<div class="line-divider"></div>
								<ul>
									<li>&Delta;Velocity</li>
									<li>Gravity</li>
									<li>Slowing v. Speeding</li>
								</ul>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row card-row">
				<div class="col-md-3">
					<a href="kinematics.html">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="../img/home-motion-2d.png" class="img-responsive">
							<div class="caption text-center">
								<h4>Kinematics: Big 5</h4>
								<div class="line-divider"></div>
								<ul>
									<li>Velocity</li>
									<li>Time &amp; Acceleration</li>
									<li>Position</li>
								</ul>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="circularMotion.html">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="../img/home-circular.png" class="img-responsive">
							<div class="caption text-center">
								<h4>Circular Motion</h4>
								<div class="line-divider"></div>
								<ul>
									<li>Revolutions</li>
									<li>Period</li>
									<li>Radius &amp; Speed</li>
								</ul>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="forces.html">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="../img/home-force.png" class="img-responsive">
							<div class="caption text-center">
								<h4>Forces</h4>
								<div class="line-divider"></div>
								<ul>
									<li>Newton's Laws</li>
									<li>Types of Forces</li>
									<li>Vector Forces</li>
								</ul>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="gravitationalForces.html">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="../img/home-angle-force.png" class="img-responsive">
							<div class="caption text-center">
								<h4>Gravity Forces</h4>
								<div class="line-divider"></div>
								<ul>
									<li>Law of Gravitation</li>
									<li>Gravitational Forces</li>
									<li>Inverse Square Law</li>
								</ul>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>

		<?php
			include_once "conversion-calculator.php";
		?>

		<?php
			include_once "calculator.php";
		?>


		<div id="contact-container">
			<h2>Get in Touch</h2>
			<form action="includes/contact.php" method="POST">
				<?php
					if(isset($_GET['fullname'])){
						echo "<input type='text' name='fullname' placeholder='Full name' value='" . $_GET['fullname'] . "' maxlength='30' required='required'/>";
						echo "<input type='email' name='email' placeholder='Email' required='required'/>";
					} else {
						echo "<input type='text' name='fullname' placeholder='Full name' maxlength='30' required='required'/>";
						echo "<input type='email' name='email' placeholder='Email' required='required'/>";
					}
					if(isset($_GET['subject'])){
						echo "<input type='text' name='subject' placeholder='Subject' maxlength='30' value='" . $_GET['subject'] . "'/>";
					} else {
						echo "<input type='text' name='subject' placeholder='Subject' maxlength='30'/>";
					}
					if(isset($_GET['message'])){
						echo "<textarea name='message' rows='8' cols='80' placeholder='Message' maxlength='500'>" . $_GET['message'] . "</textarea>";
					} else {
						echo "<textarea name='message' rows='8' cols='8' placeholder='Message' maxlength='500'></textarea>";
					}
				?>
				<input type="submit" name="submit" value="Submit" id="contact-submit-btn"/>
			</form>
		</div>

		<!-- Go back to top -->
		<div id="go-up-container">
			<button type="button" id="go-up-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
		</div>

		<div id="credits-section">
			<div class="credits-inner text-center">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
		</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="jsCalculator.js"></script>
	<script type="text/javascript" src="phyCalc.js"></script>


</html>
