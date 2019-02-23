<?php 
include ('includes/header.php');
include ("process/db_conn.php");

					$u_email = $_SESSION['u_email'];
					$sql = "SELECT * FROM users WHERE email='$u_email'";
					$result = $conn->query($sql);
					if ($result->num_rows>0) {
						while ($row = $result->fetch_assoc()) {
							$u_name = $row['username'];
							$u_phone = $row['phone'];
							$u_password = $row['password'];
						}
					}
?>
<br>
<div class="row">
	<div class="col-lg-3">

		<div class="container">
		<div class="card shadow col-lg-12" style="background-color: #fff">

			<div id="iprofile-details" class="d-flex justify-content-center mt-4">
				<img src="bg.jpeg" class="card-img-top  shadow-lg p-1 rounded-circle" style="height: 150px;width: 150px;">
				
			</div>
			<div class="row card-body">

				<h4 class="col-lg-12 text-center">Akhil</h4>
				
			</div>

			<div class="card-footer d-flex row justify-content-center">
					<p class="col-lg-12">
						<button class="btn btn-primary  btn-block" id="edit_profile_card_btn">Edit Profile</button>
					</p>

					<p class="col-lg-12">
						
						<button class="btn btn-primary btn-block" id="register_complaint_card_btn">Register Complaint</button>

					</p>

				<p class="col-lg-12">
						
						<button class="btn btn-primary btn-block">View Status</button>

					</p>
			</div>

			
			
		</div>
	</div>

	</div>
	<div class="col-lg-9">
		<div class="container">

			<!-- edit profile card  -->
			<div class="card shadow-lg mb-5" id="edit_profile_card" style="display: none;">
				<h3 class="text-center mb-3 mt-3">Edit Profile</h3>
				<div class="row pr-5 pl-5">
					<div class="form-group col-lg-12">
						<input type="text" name="" placeholder="Username" value="<?php echo $u_name ?>" class="form-control">
					</div>

					<div class="form-group col-lg-12">
						<input type="text" name="" placeholder="Email" value="<?php echo $u_email ?>" class="form-control">
					</div>

					<div class="form-group col-lg-12">
						<input type="text" name="" placeholder="Phone" value="<?php echo $u_email ?>" class="form-control">
					</div>


				</div>

				<div class="card-footer d-flex justify-content-center">
					<button class="btn btn-primary">Confirm</button>
				</div>
				
			</div>

			<!-- register complaint card -->
			<div class="card p-5 shadow-lg" id="register_complaint_card" style="display: none;">

				<div class="container" style="width: 90%;">-
                <form action="process/user_reg.php" method="POST">
				<div class="row">
				
					

				<div class="form-group col-lg-6">
					<input type="text" class="form-control" name="reg_name" placeholder="Name">
				</div>

				<div class="form-group col-lg-6">
					<input type="email" class="form-control" name="reg_email" placeholder="Email">
				</div>
			
				

				</div>

				<div class="row">
					
				
				<div class="form-group col-lg-6">
					<select class="custom-select" name="reg_gender" id="select_gender">
						<option>Select Gender</option>
						<option>Male</option>
						<option>Female</option>
						<option>Transgender</option>
					</select>
				</div>

				<div class="form-group col-lg-6">
					<select class="custom-select" name="reg_district" id="select_district">
						<option>Select District</option>
						<option>Trivandrum</option>
						<option>Kollam</option>
						<option>Kottayam</option>
						<option>Alappy</option>
						<option>Idukki</option>
						<option>Pathanamtitta</option>
						<option>Eranakulam</option>
						<option>Thrissur</option>
						<option>Palakkad</option>
						<option>Malapuram</option>
						<option>Kozhikod</option>
						<option>Wayanad</option>
						<option>Kannur</option>
						<option>Kassarkod</option>
					</select>
				</div>


				

				</div>

				<div class="row">

					<div class="form-group col-lg-6">
						<span class="mr-1"></span>
						<label for="dob_edit_profile">Date of Birth : </label>
						<input id="dob_edit_profile" type="date" class="form-control" name=" reg_dob">
					</div>

					<div class="form-group col-lg-6">
						<span class="mr-1"></span>
						<label for="dob_edit_profile2">Date of Occurence : </label>
						<input id="dob_edit_profile2" type="date" class="form-control" name="reg_date">
					</div>
					
				</div>

				
				<div class="row">
					
				

				<div class="form-group col-lg-6">
					<input type="text" class="form-control" name="reg_phone" placeholder="Phone Number">
				</div>

				

				<div class="form-group col-lg-6">
					<input type="text" class="form-control" name="reg_place" placeholder="Place Of Occurence">
				</div>

				</div>

				<div class="form-group row pr-3 pl-3">

					<textarea rows="3" class="col-lg-12 form-control p-3" placeholder="Address" name="reg_address"></textarea>

				</div>
				

				<div class="form-group row pr-3 pl-3">

					<textarea rows="3" class="col-lg-12 form-control p-3" placeholder="Description" name="reg_discription"></textarea>

				</div>

				<div class="d-flex justify-content-center">
					<button class="btn btn-primary mb-3" name="reg_button">Register Complaint</button>
				</div>


					
				</div>
			
					<div class="card p-5 shadow-lg" id="register_complaint_card" style="display: none;">
                   <div class="container" style="width: 90%;">-

				<div class="row">
					<div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div>
                  </div>


				</div>
				</form>
			</div>
				
			</div>
			
		</div>
	</div>
</div>
<?php include ('includes/footer.php') ?>
