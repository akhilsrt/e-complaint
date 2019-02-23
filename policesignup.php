<?php include ('includes/header.php') ?>

	<br>

<!-- <div class="card container" style="width: 50%;height: 500px;background-color: black;color: white"> -->
<div class="card shadow-lg container" style="width: 60%;margin-top: 4%">
	<h1 class="text-center m-3">SignUp!</h1>

	<form action="process/police_reg.php" method="POST" class="container" style="width: 80%;">
		<div class="row">
						<div class="form-group col-sm-12 col-lg-6">
							<input type="text" placeholder="NAME"  name="police_name" class="form-control p-2" >
						</div>
						
						<div class="form-group col-lg-6">
							<input type="text"  name="police_category" placeholder="category" class="form-control p-2">
						</div>
						<div class="form-group col-lg-6">
							<input type="text" placeholder="EMAIL" name="police_email" class="form-control p-2"">
						</div>
						<div class="form-group col-lg-6">
							<input type="text" placeholder="PHONE" name="police_phone" class="form-control p-2">
						</div>
						<div class="form-group col-lg-6">
							<input type="text" placeholder="STATION NAME"  name="police_station" class="form-control p-2" >
						</div>
						<div class="form-group col-lg-6">
						<select class="custom-select" name="police_gender" >
						<option>Select Gender</option>
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
					<div class="form-group col-lg-6" >
					   <select class="custom-select" name="police_district">
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

						  <div class="form-group col-lg-6">	
                          <label>Date of join</label>
                            <input  type="date"  class="form-control" required name="police_jdate">
                            </div>
 
						<div class="form-group col-lg-6">
							<input type="password" placeholder="PASSWORD"  class="form-control p-2" name="police_password">
						</div>
						<div class="form-group col-lg-6">
							<input type="password" placeholder="CONFIRM PASSWORD" class="form-control p-2" name="user_signup_repeat_password">
						</div>
						
						
						<div class="custom-control custom-checkbox ml-3 mb-3 col-lg-12" >
                          <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                          <label class="custom-control-label" for="customCheck1">I Accept terms and conditions</label>
						</div>
		</div>

		<div class="card-footer d-flex justify-content-center mb-6 mt-6">
		<button class="btn btn-primary btn-block shadow mb-3" name="police_btn">signup</button>
			
		</div>
	</form>



</div>
<br>
</div>

<?php include ('includes/footer.php') ?>


