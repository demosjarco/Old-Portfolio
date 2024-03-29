<?php declare(strict_types=1);
// HTTP2 Push
include_once("./parts/preload.php");
header("Link: </css/about.css>; as=style; rel=preload", false);
header("Link: <https://cdn.demosjarco.dev/file/demosjarco-portfolio/images/square_logo.svg>; rel=preload; as=image", false);
header("Link: <https://cdn.demosjarco.dev/file/demosjarco-portfolio/images/ua.jpg>; rel=preload; as=image", false);
header("Link: <https://cdn.demosjarco.dev/file/demosjarco-portfolio/images/gcc.png>; rel=preload; as=image", false);
header("Link: <https://cdn.demosjarco.dev/file/demosjarco-portfolio/images/mcc.png>; rel=preload; as=image", false);
header("Link: <https://cdn.demosjarco.dev/file/demosjarco-portfolio/images/srp.jpg>; rel=preload; as=image", false);
header("Link: <https://cdn.demosjarco.dev/file/demosjarco-portfolio/images/psbn.png>; rel=preload; as=image", false);
header("Link: <https://cdn.demosjarco.dev/file/demosjarco-portfolio/images/iclol.png>; rel=preload; as=image", false);
header("Link: <https://cdn.demosjarco.dev/file/demosjarco-portfolio/images/dankBeats.jpg>; rel=preload; as=image", false);

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
				<!--sse--><p>I'm an Arizona based engineer with skills ranging everywhere from full stack web programmer to IT and Security Operations Specialist. I currently hold CompTIA A+ and Network+ certifications (Security+ coming soon). I'm currently a student at the University of Arizona in Cyber Operations - Defense & Forensics.</p><!--/sse-->
				</table>
			</div>
		</div>
		<footer>
			<a href="https://www.linkedin.com/in/vilisei/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
			<a href="https://github.com/demosjarco" target="_blank"><i class="fab fa-github"></i></a>
			<a href="https://stackoverflow.com/users/3745599/victor?tab=profile" target="_blank"><i class="fab fa-stack-overflow"></i></a>
		</footer>
	</div>
	<section class="school">
		<span class="title">School</span>
		<!--sse--><div class="tiles">
			<div class="tile ua">
				<div class="background"></div>
				<div class="darken"></div>
				<div class="singlemsg"></div>
				<span class="title">University of Arizona</span><span class="subtitle">BAS - Cyber Operations</span>
				<footer>Aug 2020 - May 2022</footer>
			</div>
			<div class="tile gcc">
				<div class="background"></div>
				<div class="darken"></div>
				<div class="singlemsg"></div>
				<span class="title">Glendale Community College</span><span class="subtitle">AAS - Information Security</span>
				<footer>Jan 2019 - Dec 2019</footer>
			</div>
			<div class="tile mcc">
				<div class="background"></div>
				<div class="darken"></div>
				<div class="singlemsg"></div>
				<span class="title">Mesa Community College</span><span class="subtitle">AAS - Web Developer</span>
				<footer>Aug 2017 - May 2019</footer>
			</div>
		</div><!--/sse-->
	</section>
	<section class="work">
		<span class="title">Work</span>
		<!--sse--><div class="tiles">
			<div class="tile add">
				<div class="background"></div>
				<div class="darken"></div>
				<div class="singlemsg"></div>
				<span class="title"><a href="contact.php">Hire me!</a></span><span class="subtitle">This list is too small, you can help expand it</span>
				<footer></footer>
			</div>
			<div class="tile srp">
				<div class="background"></div>
				<div class="darken"></div>
				<div class="singlemsg"></div>
				<span class="title">Salt River Project</span><span class="subtitle">Solution Center Intern</span>
				<footer>Nov 2019 - Aug 2020</footer>
			</div>
		</div><!--/sse-->
	</section>
	<section class="projects">
		<span class="title">Projects</span>
		<!--sse--><div class="tiles">
			<div class="tile dankBeats">
				<div class="background"></div>
				<div class="darken"></div>
				<div class="singlemsg"></div>
				<span class="title">Dank Beats</span><span class="subtitle">Discord Bot</span>
				<footer></footer>
			</div>
			<div class="tile psbn">
				<div class="background"></div>
				<div class="darken"></div>
				<div class="singlemsg"></div>
				<span class="title">PSBN</span><span class="subtitle">iOS App</span>
				<footer>Discontinued</footer>
			</div>
			<div class="tile iclol">
				<div class="background"></div>
				<div class="darken"></div>
				<div class="singlemsg"></div>
				<span class="title">Info Center for League of Legends</span><span class="subtitle">iOS App</span>
				<footer>Discontinued</footer>
			</div>
		</div><!--/sse-->
	</section>
	<!--<div class="container">
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