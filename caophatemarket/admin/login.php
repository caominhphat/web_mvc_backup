<?php
include '../classes/adminlogin.php';
?>

 <?php

 $class = new adminlogin();

 // if this form use post method then do
 if($_SERVER['REQUEST_METHOD'] === 'POST'){
 	// Take value of adminUser and adminPass from form after click login
 	$adminUser = $_POST['adminUser'];
 	$adminPass = md5($_POST['adminPass']);

 	$login_check = $class->login_admin($adminUser,$adminPass);	

 }
 ?>



<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username"  name="adminUser"/>
			</div>
			<div>
				<input type="password" placeholder="Password"  name="adminPass"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
			<div><span style="color: red">
				<?php
				if(isset($login_check)){
					echo $login_check;
				}
				?>
			</span></div>
			
		</form><!-- form -->
		<div class="button">
			<a href="#">Admin Page</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>