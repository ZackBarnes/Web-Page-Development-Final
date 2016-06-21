<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Videos</title>

    


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
                <li class="pure-menu-selected"><a href="videos.php">Videos</a></li>
                <li><a href="photos.php">Photos</a></li>
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
				?>            </ul>
        </div>
    </div>

    <div id="main">
                <?php
        	if($username){
	        	echo "Signed in as user " . htmlspecialchars($_COOKIE["username"]);
        	}
			?>
        <div class="header">
            <h1>VIDEOS</h1>
            <h2>MOVIE TRAILERS AND SHORT FILMS</h2>
        </div>

<center>
        <div class="content">
            <h2 class="content-subhead">THE GRAND BUDAPEST HOTEL</h2>
            <p>
				<iframe width="560" height="315" src="//www.youtube.com/embed/1Fg5iWmQjwk" frameborder="0" allowfullscreen></iframe>
            </p>

            <h2 class="content-subhead">THE LIFE AQUATIC WITH STEVE ZISSOU</h2>
            <p>
				<iframe width="560" height="315" src="//www.youtube.com/embed/yh401Rmkq0o" frameborder="0" allowfullscreen></iframe>
            </p>
            <h2 class="content-subhead">CASTELLO CAVALCANTI</h2>
            <p>
				<iframe width="560" height="315" src="//www.youtube.com/embed/b87B7zyucgI" frameborder="0" allowfullscreen></iframe>
            </p>
            <h2 class="content-subhead">MOONRISE KINGDOM</h2>
            <p>
<iframe width="560" height="315" src="//www.youtube.com/embed/7N8wkVA4_8s" frameborder="0" allowfullscreen></iframe>
            </p>




        </div>
    </div>
</div>
</center>




<script src="js/ui.js"></script>


</body>
</html>
