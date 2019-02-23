<?php 

include('db_conn.php');

if(isset($_POST['police_btn']))
{
		$name = $_POST['police_name'];
		$email = $_POST['police_email'];
		$gender = $_POST['police_gender'];
		$phone = $_POST['police_phone'];
		$district =$_POST['police_district'];
		$jdate = $_POST['police_jdate'];
		$station = $_POST['police_station'];
		$password= $_POST['police_password'];
		$category = $_POST['police_category'];
		
	    


		$sql = "INSERT INTO police (name,jdate,email,phone,station,category,password,gender,district)
		VALUES ('$name','$jdate','$email','$phone','$station','$category','$password','$gender','$district')";

		if (mysqli_query($conn, $sql) === TRUE) {
		    echo "New record created successfully";
		   
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	?>