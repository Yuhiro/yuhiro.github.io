<!doctype html>
<html lang="en">
<?php require_once "head.php"; ?>
<body data-spy="scroll" data-target="#navbar">
	<div class="navbar-wrapper">
		<div id="navbar" class="navbar navbar-inverse navbar-fixed-top animate fadeInDown" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img src="media/images/brand2.png" alt="Yuhiro Chavez" />
					</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="#myCarousel">
								HOME
								<br />
							</a>
						</li>
						<li>
							<a href="#aboutMe">
								ABOUT ME
								<br />
								<span class="subtext">Fun Facts.</span>
							</a>
						</li>
						<li>
							<a href="#experience">
								EXPERIENCE
								<br />
								<span class="subtext">My Resume.</span>
							</a>
						</li>
						<li>
							<a href="#about">
								PHOTOGRAPHY
								<br />
								<span class="subtext">A Hobby.</span>
							</a>
						</li>
						<li>
							<a href="#contact">
								CONTACT
								<br />
								<span class="subtext">Get a Hold of Me.</span>
							</a>
						</li>
						<!--<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>-->
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Carousel
    ================================================== -->
	<div id="myCarousel" class="carousel slide">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="media/images/geisha.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption animate fadeInUp">
						<h1 class="overlay blue">KYOTO - Stepping into History</h1>
						<p class="overlay blue">
							Busey Ipsum… All men are failed women at birth. You know when you get the outside genitalia, its like "Oh my god what have they done to me?". You dip it in the horse radish, let it pee it off, dip it in the salsa sauce, one drip and thats it. The best way to communicate is compatible. <a href="#">Read More</a>
						</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="media/images/mask.jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption animate fadeInUp">
						<h1 class="overlay red">TOKYO - From Crowded to Peaceful</h1>
						<p class="overlay red">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="media/images/choice.jpg" alt="Third slide">
				<div class="container">
					<div class="carousel-caption animate fadeInUp">
						<h1 class="overlay green">MITAKA - Traveling the Outskirts</h1>
						<p class="overlay green">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div><!-- /.carousel -->

	<div class="well carousel-message">
		<p>
			<span class="title">Adventures in Photography</span> - Japan in 2013
		</p>
	</div>

	<div id="aboutMe" class="well-lg overlay blue no-radius">
		<div class="container">
			<div class="row">
				<h3>ABOUT ME</h3>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-offset-1">
					<img src="media/images/me-square.jpg" alt="" class="img-circle" style="width: 262px;"/>
				</div>
				<div class="col-md-7">
					<p>
						Busey Ipsum… All men are failed women at birth. You know when you get the outside genitalia, its like "Oh my god what have they done to me?". You dip it in the horse radish, let it pee it off, dip it in the salsa sauce, one drip and thats it. The best way to communicate is compatible.
						Busey Ipsum… All men are failed women at birth. You know when you get the outside genitalia, its like "Oh my god what have they done to me?". You dip it in the horse radish, let it pee it off, dip it in the salsa sauce, one drip and thats it. The best way to communicate is compatible.
						Busey Ipsum… All men are failed women at birth. You know when you get the outside genitalia, its like "Oh my god what have they done to me?". You dip it in the horse radish, let it pee it off, dip it in the salsa sauce, one drip and thats it. The best way to communicate is compatible.
					</p>
				</div>
			</div>
		</div>
		<br />
	</div>

	<div id="experience">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>EXPERIENCE</h3>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-8 col-md-offset-2">
					<div class="well">
						<p class="job-time">2012 - Present (1 year)</p>
						<p class="job-title">Technical Lead UX Engineering / Senior Software Consultant, <span class="job-company">Indellient Inc.</span></p>
						<p class="job-company-site">
							<a href="//www.indellient.com">www.indellient.com</a>
						</p>
						<p class="job-description">
							Busey Ipsum… All men are failed women at birth. You know when you get the outside genitalia, its like "Oh my god what have they done to me?". You dip it in the horse radish, let it pee it off, dip it in the salsa sauce, one drip and thats it. The best way to communicate is compatible.
						</p>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-12">
					<div class="well">
						<p class="job-time">2007 - 2012 (5 years)</p>
						<p class="job-title">Software Consultant, <span class="job-company">Indellient Inc.</span></p>
						<p class="job-company-site">
							<a href="//www.indellient.com">www.indellient.com</a>
						</p>
						<p class="job-description">
							Busey Ipsum… All men are failed women at birth. You know when you get the outside genitalia, its like "Oh my god what have they done to me?". You dip it in the horse radish, let it pee it off, dip it in the salsa sauce, one drip and thats it. The best way to communicate is compatible.
						</p>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-8 col-md-offset-2">
					<div class="well ok">
						<p class="job-time">2005 - 2006</p>
						<p class="job-title">Network Technician, <span class="job-company">D-Link Canada</span></p>
						<p class="job-company-site">
							<a href="//www.indellient.com">www.dlink.ca</a>
						</p>
						<p class="job-description">
							Busey Ipsum… All men are failed women at birth. You know when you get the outside genitalia, its like "Oh my god what have they done to me?". You dip it in the horse radish, let it pee it off, dip it in the salsa sauce, one drip and thats it. The best way to communicate is compatible.
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="col-md-12">Technical Skills</h3>
			</div>

			<div class="row ">
				<div class="col-md-6">
					<p class="job-emphasis">Languages and Platforms</p>
					<p class="company">HTML, jQuery, CSS, JavaScript, PHP, Java, AJAX, C, C#, SQL, DB2</p>

					<br />
					<p class="job-emphasis">IDEs</p>
					<p class="company">Coda, PhpStorm, Eclipse</p>

					<br />
					<p class="job-emphasis">Subversion Clients</p>
					<p class="company">Tortoise SVN, Versions (OSX), Github</p>
				</div>

				<div class="col-md-6">
					<p class="job-emphasis">Project / Time Management</p>
					<p class="company">Jira, TRAC / Agilo</p>

					<br />
					<p class="job-emphasis">Design</p>
					<p class="company">Photoshop, Illustrator, Visio, OmniGraffle, Keynote, Powerpoint</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<h3>Education</h3>
					<p class="job-emphasis">Honours Bachelor of Computing, Minor in Business Administration</p>
					<p>University of Guelph</p>
					<p><a href="//www.uoguelph.ca">www.uoguelph.ca</a></p>
					<p>2003 - 2007</p>
				</div>

				<div class="col-md-6">
					<h3>Language Skills</h3>
					<p class="job-emphasis">French</p>
					<p>Extended French Program with the Peel Catholic School Board (9 years)</p>

					<p class="job-emphasis">Japanese</p>
					<p>Attended and graduated from Toronto Japanese Language School (13 years)</p>

					<p class="job-emphasis">Spanish</p>
					<p class="company"></p>
				</div>
			</div>
		</div>
	</div>

	<?php /*require_once("footer.php");*/ ?>
</div>
</body>
</html>

<script src="media/js/onload.js"></script>
<script type="text/javascript">
	$('#homeLink').addClass('active');
	$(document).attr('title','Yuhiro Chavez - HOME');



	$(document).ready( function() {
		$('.animate').addClass('animated');
		$('body').scrollspy({ target: '#navbar' });
	});
</script>