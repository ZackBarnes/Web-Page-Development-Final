<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Photos</title>

    


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">







  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
  


    

    

</head>
<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">

            <ul>
                <li><a href="index.php">Home Page</a></li>            
                <li><a href="videos.php">Videos</a></li>
                <li class="pure-menu-selected"><a href="photos.php">Photos</a></li>
                <li><a href="extras.php">Extras</a></li>                
				<?php
				$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

				if(!$username)
				{
					echo '<li><a href="login.php">Login</a></li>';
				}
				if($username)
				{
					echo '<li><a href="logout.php">Logout</a></li>';
				}
				?>
            </ul>
        </div>
    </div>

    <div id="main">
                <?php
        	if($username){
	        	echo "Signed in as user " . htmlspecialchars($_COOKIE["username"]);
        	}
			?>
        <div class="header">
            <h1>PHOTOS</h1>
            <h2>A COLLECTION OF PHOTOS FROM MOVIES BY WES ANDERSON</h2>
        </div>
<center>
<br>
<br>
        <div class="content">
          <body style="font-family:Arial, Verdana;background-color:#fff;">
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {

                $AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 3                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        });
    </script>
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px;
        height: 300px;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
            <div><img u="image" src="images/1.png" /></div>
            <div><img u="image" src="images/2.png" /></div>
            <div><img u="image" src="images/3.png" /></div>
            <div><img u="image" src="images/4.png" /></div>
            <div><img u="image" src="images/5.png" /></div>
            <div><img u="image" src="images/6.png" /></div>
        </div>
        <a style="display: none" href="http://www.jssor.com">bootstrap carousel</a>
    </div>
        </div>
    </div>
</div>
</center>




<script src="js/ui.js"></script>


</body>
</html>
