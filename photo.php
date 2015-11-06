<?php
  if( $_GET["set"] || $_GET["user"] )
  {
     $set = $_GET['set'];
     $user = $_GET['user'];
	  /* exit(); */
	  
	  if (!is_numeric($set)) {
		  $set = NULL;
	  }
  }
?>

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
		<div id="galleria" style="width: 100%; height: 700px;"></div>		
	</div>
</body>
</html>

<script src="media/js/onload.js"></script>

<script type="text/javascript" src="/media/plugins/galleria/galleria-1.2.9.min.js"></script>
<link type="text/css" rel="stylesheet" href="/media/plugins/galleria/themes/classic/galleria.classic.css">
<link tyupe="text/css" rel="stylesheet" href="/media/plugins/pluginOverrides/galleria-override.css">
<script type="text/javascript" src="/media/plugins/galleria/themes/classic/galleria.classic.min.js"></script>
<script tyoe="text/javascript" src="/media/plugins/galleria/plugins/flickr/galleria.flickr.min.js"></script>

<script type="text/javascript">
	$(function() {
		$('#photoLink').addClass('active');
		$(document).attr('title','Yuhiro Chavez - PHOTOGRAPHY');
		
		Galleria.loadTheme('/media/plugins/galleria/themes/classic/galleria.classic.min.js');
		
		//var apikey = '4a928834f43020f2c45ade9e9806af49';
		
		

		var flickr = new Galleria.Flickr();
		flickr.setOptions({
		    max: 100,
		    description: true,
		    imageSize: 'big',
		    thumbSize: 'thumb'
		});
		
		<?php
		if ($set) {
		?>
			flickr.set('<?php echo $set; ?>', function(data) { //72157633911791298 72157633982344062
				Galleria.run('#galleria', {
					dataSource: data
				});
			});
		<?php
		}
		else {
		?>
			flickr.user('96292572@N08', function(data) {
				Galleria.run('#galleria', {
		       		dataSource: data
			   	});
			});
		<?php
		}
		?>
	});
</script>