<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Login</title>

    


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
                <li><a href="photos.php">Photos</a></li>
                <li><a href="extras.php">Extras</a></li>
				<?php
				$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

				if(!$username)
				{
					echo '<li class="pure-menu-selected"><a href="login.php">Login</a></li>';
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
        <div class="header">
            <h1>LOGIN</h1>
            <h2>LOGIN TO ACCESS EXTRA CONTENT</h2>
        </div>

        <div class="content">
            <p>
<?php if ($error) {
	print "<p class=\"error\">$error</p>\n";
} ?>
<form name="Login" action="login.php" method="POST">
	<input type="hidden" name="action" value="do_login" />
	<p><label for="username">Username: </label><input type="text" name="username" id="username" value="<?php print $username; ?>" /></p>
	<p><label for="password">Password:  </label><input type="password" name="password" id="password" /></p>
</p>
	<p><input type="submit" name="submit" value="Submit" /></p>
</form>
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
