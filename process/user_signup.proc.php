<?php 

include('db_conn.php');

if(isset($_POST['Submit']))
{
		$name = $_POST['user_signup_name'];
		$adno = $_POST['user_signup_adhaar'];
		$email = $_POST['user_signup_email'];
		$phone = $_POST['user_signup_phone'];
		$password = $_POST['user_signup_password'];
		$cpassword = $_POST['user_signup_repeat_password'];
	    


		$sql = "INSERT INTO users (username, adhaarno,email, phone, password)
		VALUES ('$name', $adno, '$email', $phone, '$password')";

		if (mysqli_query($conn, $sql) === TRUE) {
		    echo "New record created successfully";
		    header("Location: ../userlogin.php");
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

	







}







 ?>