<?php 

include('db_conn.php');

if(isset($_POST['reg_button']))
{
		$name = $_POST['reg_name'];
		$email = $_POST['reg_email'];
		$gender = $_POST['reg_gender'];
		$phone = $_POST['reg_phone'];
		$district =$_POST['reg_district'];
		$dob = $_POST['reg_dob'];
		$date = $_POST['reg_date'];
		$place = $_POST['reg_place'];
		$address = $_POST['reg_address'];
		$discription = $_POST['reg_discription'];
	    


		$sql = "INSERT INTO comregister (name,email,gender,district,dob,cdate,phone,place,address,discription)
		VALUES ('$name', '$email','$gender','$district','$dob','$date','$phone','$place','$address','$discription')";

		if (mysqli_query($conn, $sql) === TRUE) {
		    echo "New record created successfully";
		   
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

	







}







 ?>