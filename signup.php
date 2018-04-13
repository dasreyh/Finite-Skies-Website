<?php include_once 'header.php';
?>

<!-- make it log you out when you visit this page

	session_unset();
	session_destroy();
	exit();


-->


<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		
		<div class="formholder">
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="First Name">
			<input type="text" name="last" placeholder="Last Name">
			<input type="text" name="email" placeholder="E-Mail">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign Up!</button>
		</form>
		</div>
		
	</div>
</section>

<?php
	include_once 'footer.php';
?>