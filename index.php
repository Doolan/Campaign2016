<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Escalera / Doolan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="images/flag.gif" type="image/gif" rel="shortcut icon"/>

	<link href="main.css" rel="stylesheet"/>
	<script type="text/javascript" src="main.js"></script>
</head>
<body>
	<?php
			include 'main.php';
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				# user is posting a message
				/**echo "function call";**/
				save_email();
			}
		?>
	<div class="wrapper">
		<header role="banner">

			<nav>
				<label for="show-menu" class="show-menu">
					<img src="images/menu4.gif"></label>
				<input type="checkbox" id="show-menu" role="button">
				<ul id="menu">
					<li>
						<a id="current" href="index.php">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="issues.html">Issues Stances ￬</a>
						<ul class="hidden">
							<li>
								<a href="issues.html#education">Public Education</a>
							</li>
							<li>
								<a href="issues.html#economy">Economy</a>
							</li>
							<li>
								<a href="issues.html#welfare">Welfare</a>
							</li>
							<li>
								<a href="issues.html#ForeignPolicy">Foreign Policy</a>
							</li>
							<li>
								<a href="issues.html#cyber">Cyber Security</a>
							</li>
							<li>
								<a href="issues.html#border">Border Security</a>
							</li>
							<li>
								<a href="issues.html#ClimateEnergy">Climate and Energy</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="speeches.html">Speeches ￬</a>
						<ul class="hidden">
							<li>
								<a href="speeches.html#Announcement">Announcement</a>
							</li>
							<li>
								<a href="speeches.html#IssueSpeech">Issue Speech</a>
							</li>
						</ul>
					</li>
					<!--<li>
					<a href="#">Meet the Team</a>
				</li>
				-->
			</ul>
		</nav>
	</header>
	<div class="layered">
		<img src="images/both_27.jpg" class="jumbotron" id="indeximg"/>
		<div class="layer1"></div>
		<div class="layer2">
			<div class="titleText" id="indextext">
				<h1 id="normaltitleText">Morgan Escalera For President!</h1>
				<h2>Steven Doolan For Vice President</h2>
				<div onclick="joinclick()">
					<a href="#" id="joinUs" >Join Us!</a>
				</div>
			</div>
		</div>
		<div style="display:none;" id="register" >
			<div id="xbutton" onclick="hideclick()">
				<img src="images/x.gif" alt="X"></div>
			<h1>Join Us</h1>

			<form id="emailForm" method="POST">
				<input type="text" name="email" placeholder="Email Address*">
				<!--input type="text" name="zip" placeholder="Zip code*">
				-->
				<br>
				<div id="submitButton" onclick="submitclick()">
					<a href="#" name="submit">Submit</a>
				</div>
			</form>
		</div>
	</div>
	<div style="display:none;" id="blackBackground"></div>
	<!-- <div id="blackBackground"></div>
-->
<div class="push"></div>
</div>
<div class="stripeBig">
<div class="footer">
	<ul id="footerLinks">
		<li>
			<a href="index.php">Home</a>
		</li>
		<li>
			<a href="about.html">About The Candidates</a>
		</li>
		<li>
			<a href="issues.html">Issues Stances</a>
		</li>
		<li>
			<a href="speeches.html">Speeches</a>
		</li>
		<li>
			<a href="news.html">In the News ￬</a>
		</li>
		<!--<li>
		<a href="#">Meet the Team</a>
	</li>
	-->
</ul>
</div>
</div>

</body>
</html>