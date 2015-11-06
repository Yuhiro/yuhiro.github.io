<!doctype html>
<html lang="en">
<?php require_once "head.php"; ?>
<body>
	<div class="container">
		<?php require_once "navbar.php"; ?>
		
		<div class="row spacer"></div>
		<div class="row resume">
			<div class="span8">
				<div class="row">
					<div class="span8">
						<ul class=" nav nav-tabs">
							<li class="active"><a href="#experience" data-toggle="tab">EXPERIENCE</a></li>
							<li><a href="#education" data-toggle="tab">EDUCATION</a></li>
							<li><a href="#volunteer" data-toggle="tab">VOLUNTEER WORK</a></li>
							<li><a href="#skills" data-toggle="tab">SKILLS</a></li>
						</ul>
					</div>
				</div>
				<div class="resume-list tab-content">
					<?php 
					require_once('resume/experience.php');
					require_once('resume/education.php');
					require_once('resume/volunteer.php');
					require_once('resume/skills.php');				
					?>			
				</div>
			</div>
			<?php require_once('resume/bio.php'); ?>
		</div>
		
		
		
		
		<?php require_once("footer.php"); ?>
	</div>
</body>
</html>

<script src="media/js/onload.js"></script>
<script type="text/javascript">
	$('#resumeLink').addClass('active');
	$(document).attr('title','Yuhiro Chavez - RESUME');
</script>
