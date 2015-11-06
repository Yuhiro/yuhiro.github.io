<!doctype html>
<html lang="en">
<?php require_once "head.php"; ?>
<body>
	<div class="container">
		<?php require_once "navbar.php"; ?>
		<div class="row spacer"></div>
		
	
			
			
		<div class="row">
			<div class="span12">
						
			</div>
		</div>
	</div>
	
	<div class="container">	
			<!-- Codrops top bar -->
			<!--<div class="codrops-top clearfix">
				<a href="http://tympanus.net/Tutorials/3DTimeline/">
					<strong>&laquo; Previous Demo: </strong>Responsive 3D Timeline
				</a>
				<span class="right">
					<a href="http://tympanus.net/codrops/?p=12205">
						<strong>Back to the Codrops Article</strong>
					</a>
				</span>
			</div><!--/ Codrops top bar -->
			
<!--			<header class="clearfix">
			
				<h1>Adaptive Thumbnail Pile Effect <span>with automatic grouping | Demo 1: default settings</span></h1>
				
				<nav class="codrops-demos">
					<a class="current-demo" href="index.html">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a>
				</nav>

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>-->
			
			<section class="main">
				<div class="wrapper">
					<div id="topbar" class="topbar">
						<span id="close" class="back">&larr;</span>
						<!--<h2>Dribbble's Talent</h2>--><h3 id="name">Photo Gallery</h3>
					</div>
					
					<ul id="tp-grid" class="tp-grid" style="margin-left: 120px;">

						<!-- Kyoto, Japan -->
						<li data-pile="Kyoto - Japan">
							<a href="media/images/geisha.jpg" class="fancybox-effects-c" title="Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit">
								<span title=" ">
									<span class="tp-info"><span>Geisha</span></span>
									<img src="media/images/geisha.jpg"  width="225" />
								</span>
							</a>
						</li>
						<li data-pile="Kyoto - Japan">
							<a href="#">
								<span class="tp-info"><span>Something Japanese</span></span>
								<img src="media/images/geisha.jpg"  width="225" />
							</a>
						</li>
						<li data-pile="Kyoto - Japan">
							<a href="#">
								<span class="tp-info"><span>Another Japanese Thing</span></span>
								<img src="media/images/geisha.jpg"  width="225" />							
							</a>
						</li>
					</ul>
				</div>
			</section>

		</div><!-- /container -->
	
</body>
</html>

<script src="media/plugins/Stapel/js/modernizr.custom.63321.js"></script>
<script src="media/js/onload.js"></script>
<script type="text/javascript" src="media/plugins/Stapel/js/jquery.stapel.js"></script>

<script type="text/javascript">
	$(function() {
		$('#photoLink').addClass('active');
		$(document).attr('title','Yuhiro Chavez - PHOTOGRAPHY');
		
		var $grid = $( '#tp-grid' ),
					$name = $( '#name' ),
					$close = $( '#close' ),
					$loader = $( '<div class="loader"><i></i><i></i><i></i><i></i><i></i><i></i><span>Loading...</span></div>' ).insertBefore( $grid ),
					stapel = $grid.stapel( {
						gutter: 40,
						pileAngles : 5,
						onLoad : function() {
							$loader.remove();
						},
						onBeforeOpen : function( pileName ) {
							$name.html( pileName );
						},
						onAfterOpen : function( pileName ) {
							$close.show();
						}
					} );
		
		$close.on( 'click', function() {
			$close.hide();
			$name.empty();
			$name.html('Photo Gallery');
			stapel.closePile();
		});
		
		// Set custom style, close if clicked, change title type and overlay color
		$(".fancybox-effects-c").fancybox({
			wrapCSS    : 'fancybox-custom',
			closeClick : true,

			openEffect : 'none',

			helpers : {
				title : {
					type : 'inside'
				},
				overlay : {
					css : {
						'background' : 'rgba(238,238,238,0.85)'
					}
				}
			}
		});
	});
</script>
