 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#dialog" ).dialog();
  });
  </script>
</head>
<body>
 
<div id="dialog" title="Login for extra content">
  <p>If you dont't have an account, you can login using 'test' as username and 'pass' as password.</p>
</div>

<?php
				$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];


	if ($username) {
		header("Location: extras.php");
		exit;
	}
	
	
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];		
	
		if ($username == "test" && $password == "pass") {
			setcookie('username', $username, 0, '/~zsbxt9/');
			header("Location: extras.php");
			exit;
		} 												
		else {
			$error = 'Login failed.  Please enter correct username and password.';
			require "login_form.php";
		}		
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "login_form.php";
	}
	
?>