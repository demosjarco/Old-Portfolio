<?php declare(strict_types=1);
// HTTP2 Push
include_once("./parts/preload.php");
header("Link: </css/about.css>; as=style; rel=preload", false);
header("Link: </images/square_logo.svg>; rel=preload; as=image", false);
header("Link: </images/gcc.png>; rel=preload; as=image", false);
header("Link: </images/mcc.png>; rel=preload; as=image", false);
header("Link: </images/psbn.png>; rel=preload; as=image", false);
header("Link: </images/iclol.png>; rel=preload; as=image", false);
header("Link: </images/dankBeats.jpg>; rel=preload; as=image", false);

$fileName = basename(__FILE__, '.php');
?>
<!doctype html>
<html>
<head>
<?php include_once("./parts/head.html") ?>
<title>About</title>
<link rel="stylesheet" href="css/about.css" type="text/css" />
</head>

<body class="light">
	<?php include_once("parts/header.php") ?>
	<div class="card">
		<div class="content">
			<div class="picture"></div>
			<div class="info">
				<span class="hi">Hi</span>
				<span class="title">I'm <span class="name">Victor</span></span>
				<span class="subtitle">Web Developer and IT Operations Specialist</span>
				<hr>
				<p>I'm an Arizona based developer with skills ranging everywhere from full stack web programmer (HTML, PHP, NodeJS, ...) all the way to IT and Security Operations Specialist. I currently hold CompTIA A+ and Network+ certifications (Security+ coming soon). I'm currently a student at the University of Arizona in Cyber Operations - Defense & Forensics.</p>
				</table>
			</div>
		</div>
		<footer>
			<a href="https://www.linkedin.com/in/vilisei/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
			<a href="https://github.com/demosjarco" target="_blank"><i class="fab fa-github"></i></a>
			<a href="https://stackoverflow.com/users/3745599/victor?tab=profile" target="_blank"><i class="fab fa-stack-overflow"></i></a>
		</footer>
	</div>
	<section>
		<span class="title">School</span>
		<div class="tiles">
			<div class="tile">
				<div class="background"></div>
				<div class="darken"></div>
				<span class="singlemsg">Message</span><span class="title">Title</span><span class="subtitle">Subtitle</span>
				<footer>Footer</footer>
			</div>
			<div class="tile gcc">
				<div class="background"></div>
				<div class="darken"></div>
				<span class="singlemsg"></span><span class="title"></span><span class="subtitle"></span>
				<footer></footer>
			</div>
			<div class="tile mcc">
				<div class="background"></div>
				<div class="darken"></div>
				<span class="singlemsg"></span><span class="title"></span><span class="subtitle"></span>
				<footer></footer>
			</div>
		</div>
	</section>
	<!--<div class="container">
		<div class="row">
			<div class="col-lg">
				<div class="card">
					<img src="images/gcc.png" class="card-img-top" />
					<div class="card-body">
						<h5 class="card-title">GCC</h5>
						<h6 class="card-subtitle text-muted">Information Security (AAS)</h6>
						<p class="card-text">I have taken a variety of classes from server setup and management of linux and windows, Cisco networking, and security baseics to OS applications. I am also part of the school's Cyber Club.</p>
					</div>
					<div class="card-footer text-muted">January 2019 - December 2019</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="card">
					<img src="images/mcc.png" class="card-img-top" />
					<div class="card-body">
						<h5 class="card-title">MCC</h5>
						<h6 class="card-subtitle text-muted">Web Developer (AAS)</h6>
						<p class="card-text">I have taken a variety of classes from server side languages, database setup and management, client side programming, and even use of common tools.</p>
					</div>
					<div class="card-footer text-muted">August 2017 - May 2019</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<h2>Work</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<div class="card">
					<div class="card-body">
						<p class="card-text">This list is too small, you can help expand it</p>
						<a href="contact.php" class="btn btn-primary">Hire me!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<h2>Projects</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<div class="card">
					<img src="images/psbn.png" class="card-img-top" />
					<div class="card-body">
						<h5 class="card-title">PSBN</h5>
						<p class="card-text">App created for the Peoria Student Broadcast Network. Watch live sports and shows from PSBN on your iPhone, iPad, or iPod Touch.</p>
						<a href="https://demosjarco.dev/psbn.php" class="btn btn-primary">See more</a>
					</div>
					<div class="card-footer text-muted">Discontinued</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="card">
					<img src="images/iclol.png" class="card-img-top" />
					<div class="card-body">
						<h5 class="card-title">Info Center for League of Legends</h5>
						<p class="card-text">The most comprehensive info app for everything in League of Legends is here! Improve your game and get better with all the tools and help you can possibly find. Stay up to date with the latest everything in League of Legends!</p>
						<a href="https://www.demosjarco.dev/leagueinfocenter/" class="btn btn-primary">See more</a>
					</div>
					<div class="card-footer text-muted">Discontinued</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="card">
					<img src="images/dankBeats.jpg" class="card-img-top" />
					<div class="card-body">
						<h5 class="card-title">Dank Beats Discord Bot</h5>
						<p class="card-text">Play random sound effects, recorded live sets from the top edm festivals in the world, and live radio from select stations in your discord voice channel at the highest quality possible.</p>
						<a href="https://www.demosjarco.dev/dankbeats.php" class="btn btn-primary">See more</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<?php include_once("./parts/footer.html") ?>
</body>
</html>