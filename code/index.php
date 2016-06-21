<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Home</title>

    


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
                <li class="pure-menu-selected"><a href="index.php">Home Page</a></li>            
                <li><a href="videos.php">Videos</a></li>
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
            <h1>FANTASTIC ZISSOU HOTEL</h1>
            <h2>A WES ANDERSON FAN SITE BY ZACK BARNES</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">A LITTLE ABOUT WES</h2>
            <p>
				Wes Anderson is the son of Melver, an advertising and PR executive, and Anne, an archaeologist turned real estate agent. He has two brothers, Eric and Mel. Anderson's parents divorced when he was a young child, an event that he described as the most crucial event of his brothers and his growing up. During childhood, Anderson also began writing plays and making super-8 movies. He was educated at Westchester High School and then St. John's, a private prep school in Houston, Texas, which was later to prove an inspiration for the film Rushmore (1998).
            </p>

            <p>
Anderson attended the University of Texas in Austin, where he majored in philosophy. It was there that he met Owen Wilson. They became friends and began making short films, some of which aired on a local cable-access station. One of their shorts was Bottle Rocket (1994), which starred Owen and his brother Luke Wilson. The short was screened at the Sundance Film Festival, where it was successfully received, so much so that they received funding to make a feature-length version. Bottle Rocket (1996) was not a commercial hit, but it gained a cult audience and high-profile fans, which included Martin Scorsese.
            </p>

            <p>
Success followed with films such as Rushmore (1998), The Life Aquatic with Steve Zissou (2004), The Royal Tenenbaums (2001) and an animated feature, Fantastic Mr. Fox (2009). The latter two films earned Anderson Oscar nominations.
            </p>
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
