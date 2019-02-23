<?php 
include('db_conn.php');

session_start();
if(isset($_POST['submit']))
{


	$email = $_POST['login_name'];
	$password = $_POST['login_password'];	

	
	$sql = "SELECT * FROM users WHERE email='$email'";


	if($res = mysqli_query($conn, $sql)){
		if(mysqli_num_rows($res) > 0){
			$_SESSION['u_email'] = $email;
			header('Location: ../main.php');
		}else{
			echo "no record";
			

		}
	}else{
		echo "ivadem error thanne";	
			

	}
	
}	

 ?>