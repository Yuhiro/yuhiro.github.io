<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 
    <title>Ready, set, go! - yuhirochavez.com</title>
    <meta name="description" content="">
    <meta name="author" content="">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
    <style>	   

    	html, body {
		  height: 100%;
		  width: 100%;
		  padding: 0;
		  margin: 0;
		  font-family: 'Josefin Sans', Arial, sans-serif;
		  font-weight: 300;
		}
		
		#full-screen-background-image {
		  z-index: -999;
		  min-height: 100%;
		  min-width: 1024px;
		  width: 100%;
		  height: auto;
		  position: fixed;
		  top: 0;
		  left: 0;
		}
		
		#wrapper {
		  position: fixed;
		  top: 0;
		  width: 100%;
		  /*height: 200px;
		  min-height: 400px;*/
		  margin: 100px auto;
		  padding: 30px 80px;
		  
		  background-color: rgba(0,0,0,0.25);
		  color: #fefefe;
		}
		
		p { margin: 0; }
		a { color: lime; text-decoration: none;}
		a:hover { text-decoration: underline; }
		
    </style>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
</head>
<body>

<body>
  <img alt="full screen background image" src="../media/background.jpg" id="full-screen-background-image" /> 
  <div id="wrapper" class="wtf">
    <p style="font-size: 45px; ">Hi, my name is Yuhiro</p>
    <p style="font-size: 30px; ">and I design things for fun.</p>
    <p style="font-size: 20px;  margin-top: 30px;">
	    I spend most of my time designing and coding at 
	    <br /><a href="//www.indellient.com">Indellient</a>, but I also play guitar, 
	    take pictures, game, 
	    <br />and work on <a href="//www.insidethedream.org">side projects</a>.
    </p>
    <p style="font-size: 20px; margin-top: 20px;">Watch me say silly things on <a href="//www.twitter.com/yuhiroc">Twitter</a>.</p>
  </div>
</body>
 
</body>
</html>
<script src="../media/jquery.color.js" type="text/javascript"></script>
<script>

	$(".wtf a").hover(function() {
$(this).animate({ backgroundColor: "#00aadd" }, 600);
},function() {
$(this).animate({ backgroundColor: "#303030" }, 400);
});
</script>