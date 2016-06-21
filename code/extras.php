<?php
				$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];

				if(!$username)
				{
					header("Location: login.php");
				}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Extras</title>

    


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
                <li class="pure-menu-selected"><a href="extras.php">Extras</a></li>                
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
            <h1>EXTRAS</h1>
            <h2>EXTRA CONTENT FOR LOGGED IN USERS</h2>
        </div>

        <div class="content">
               <h2 class="content-subhead">Trivia</h2>
     
        <script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","trivia.txt",true);
xmlhttp.send();
}
</script>
</head>
<body>

<div id="myDiv"><h2>How much was Bill Murray paid for his role in "Rushmore"?</h2></div>
<button type="button" onclick="loadXMLDoc()">Click for answer</button>

            <h2 class="content-subhead">Random Facts</h2>
            <p>
				Some of the character names in his movies, most notably in Rushmore (1998), were actually the names of his St. John's classmates.
            </p>
            <p>
Martin Scorsese is a big fan of his movies, even choosing him as the next Martin Scorsese in an Esquire magazine article.
            </p>
            <p>
While shooting The Life Aquatic with Steve Zissou (2004) the once pasty and bookish Anderson got a tan, grew his hair long, and got into better shape. His frequent star, Anjelica Huston, noted that Wes had suddenly become handsome.
            </p>
            <p>
Wrote Bottle Rocket (1996), Rushmore (1998) and The Royal Tenenbaums (2001) with Owen Wilson, whose brother, Luke Wilson, appears in all three movies.
            </p>
            <p>
Wrote The Darjeeling Limited (2007) and Moonrise Kingdom (2012) with Roman Coppola. Coppola's cousin Jason Schwartzman co-wrote the former film, and appeared in both, as well as in Rushmore (1998).
            </p>
            <p>
Rosemary's Baby (1968) is his favorite film.
            </p>
            <p>
Has an Italian song about him called "Wes Anderson" by I Cani. The music video is a tribute to the director and his movies.
            </p>
            <br>
<h2>Send us your random facts about Wes Anderson:</h2>

<form action="MAILTO:zsbxt9@mail.missouri.edu" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name" value=""><br>
E-mail:<br>
<input type="text" name="mail" value=""><br>
Fact:<br>
<input type="text" name="fact" value="" size="50"><br><br>
<input type="submit" value="Send">
</form>            
            
            
            

                  </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
