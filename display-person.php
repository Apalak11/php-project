<?php
	// add lesson code
	require './header.php';
	// check the session before we show any data
	session_start();
	if(!isset($_SESSION['user_id'])){
		header('location:signin.php');
		exit();
	}else{
		// connect to database
		require './database.php';
		// set up query
		$sql = "SELECT * From content";
		// run the query
		$result = $conn->query($sql);
		echo '<section class="person-row"</section>';
		echo '<table class="table table-started"
		<tr>
		   <th>First name</th>
		   <th>Email</th>
		   <th>Password</th>
		<tr>';
	foreach($result as $row){
		echo'
		<tr>
           <td>' , $row['fname']. '</td>
		   <td>' , $row['email']. '</td>
		   <td>' , $row['password']. '</td>
        </tr>';
	}
	echo '</table>';
	echo '<a href="logout.php" class="btn btn-warning">Logout</a>';
	echo '</section>';
	$conn = null;	
	}
	require './footer.php';
?>
