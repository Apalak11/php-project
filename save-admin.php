<?php
  // add lesson code
  //connection
  require './database.php';
  //variables
  $first_name = $_POST['first_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  // validate our inputs
  $ok = true;
  if(empty($first_name)){
	echo '<p>First name is required</p>';
	$ok = false;
  }
  
  if(empty($email)){
	echo '<p> email is required</p>';
	$ok = false;
  }
  if((empty($password))){
	echo '<p> Invalid password</p>';
	$ok = false;
  }
  // decide to save or not
  if($ok){
	$password = hash('sha512', $password);
	// set up sql
	$sql = "INSERT INTO content (last_name, email, password) VALUES ('$last_name' email,'$passwoed');";
	$conn->exec($sql);
	echo '<section class="success-row">';
	echo '<div>';
	echo '<h3>Admin saved</h3>';
	echo '</div>';
	echo '</section>';
	$conn = null;
  }
	?>
	<section class="row success-back-row">
		<div>
			<p>All setup, click the button below to head to the sign in page!</p>
			<a href="signin.php" class="btn btn-primary">Sign In</a>
		</div>
	</section>
<?php require './footer.php'; ?>
