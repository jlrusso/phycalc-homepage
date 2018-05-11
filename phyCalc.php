<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Input Physics | Calc</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="phyCalc.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- <div id="pre-loader">
		<h3>Input Physics</h3>
		<div id="load-spinner"></div>
		<div id="icon-wrapper">
			<img src="../phyCalc/img/divide-loader.png" alt="Divide-icon" class="load-image"/>
			<img src="../phyCalc/img/times-loader.png" alt="Times-icon" class="load-image"/>
			<img src="../phyCalc/img/minus-loader.png" alt="Minus-icon" class="load-image"/>
			<img src="../phyCalc/img/add-loader.png" alt="Add-icon" class="load-image"/>
		</div>
	</div> -->
	<?php
	echo "
	  <nav class='clearfix'>
	    <div class='nav-logo animated fadeInRight'><a href='/home'>Input Physics</a></div>
	    <div class='navigation animated fadeInLeft'>
	      <ul class='horizontal-nav'>
	        <li><a id='calculator-btn'>Calculator</a></li>
	        <li><a id='conversion-btn'>Conversions</a></li>
					<li><a id='contact-btn'>Contact</a></li>
	      </ul>
	      <div class='animated fadeInLeft' id='icon'>
	        <div id='click-box'></div>
	        <span id='hamburger-menu'></span>
	        <div id='vertical-nav' class='vertical-nav'>
	          <ul>
	            <li><a href='#' id='vert-contact-btn'>Contact</a></li>
	            <li><a href='#' id='vert-calculator-btn'>Calculator</a></li>
	            <li><a href='#' id='vert-conversion-btn'>Conversions</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </nav>
	";
	?>


		<section class="banner">
			<div id="banner-overlay"></div>
			<div id="banner-inner">
				<p id="banner-heading">Simplify your Physics Problems</p>
				<div id='search-wrapper'>
		      <input type='text' id='search-bar' placeholder='Search by topic..'/>
		      <div id='search-icon'><i class='glyphicon glyphicon-search'></i></div>
					<?php
						include_once "search-cases.php";
					?>
		    </div>
				<h2>or</h2>
				<div id="get-started-btn">View Modules</div>
			</div>
		</section>

		<section class="how-it-works-section">
			<div class="row text-center">
				<div class="col-md-4">
					<img src="img/search-icon.png" alt="Search Icon"/>
					<div class="hiw-caption">
						<p>Search our database by topic or topic-related terms to find more information, useful equations, and illustrations.</p>
					</div>
				</div>
				<div class="col-md-4">
					<img src="img/review-icon.png" alt="Review Icon"/>
					<div class="hiw-caption">
						<p>Each page lets you review practice problems for a given topic and view detailed, step by step solutions for each one.</p>
					</div>
				</div>
				<div class="col-md-4">
					<img src="img/solution-icon.png" alt="Solution Icon"/>
					<div class="hiw-caption">
						<p>Solve custom problems by viewing associated page that covers your problem and inputing your own custom values.</p>
					</div>
				</div>
			</div>
		</section>

		<div id="main-content">
			<div id="features-heading-container">
				<div class="animated fadeInLeftBig" id="featured-topic-heading">Featured Topics</div>
			</div>
			<div class="row card-row">
				<div class="col-md-3">
					<a href="/displacement">
						<div class="card" href="displacement.html">
							<div class="button-to-page">View Topic</div>
							<img src="img/home-displacement.png" class="responsive">
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
					<a href="/2d-displacement">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="img/2d-displacement.png" class="img-responsive">
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
					<a href="/velocity">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="img/home-velocity.png" class="img-responsive">
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
					<a href="/acceleration">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="img/home-acceleration.png" class="img-responsive">
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
					<a href="/kinematics">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="img/home-motion-2d.png" class="img-responsive">
							<div class="caption text-center">
								<h4>Kinematics</h4>
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
					<a href="/circular-motion">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="img/home-circular.png" class="img-responsive">
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
					<a href="/forces">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="img/home-force.png" class="img-responsive">
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
					<a href="/gravitational-forces">
						<div class="card">
							<div class="button-to-page">View Topic</div>
							<img src="img/home-angle-force.png" class="img-responsive">
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
				<input type="submit" name="submit" value="Send" id="contact-submit-btn"/>
			</form>
			<div id="credits-section">
				<div class="credits-inner text-center">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
			</div>
		</div>

		<footer>
			<div>&copy; 2018 &nbsp; inputphysics.com</div>
		</footer>

		<!-- Go back to top -->
		<div id="go-up-container">
			<button type="button" id="go-up-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
		</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="jsCalculator.js"></script>
	<script type="text/javascript" src="phyCalc.js"></script>


</html>
