<?php include ('includes/header.php') ?>
<div class="reg_form" style="background: #159957;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #155799, #159957);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #155799, #159957); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
; height: 100vh;">
	<br>

<!-- <div class="card container" style="width: 50%;height: 500px;background-color: black;color: white"> -->
<div class="card shadow-lg container" style="width: 40%;margin-top: 4%">
	<h1 class="text-center m-3">SignUp!</h1>

	<form action="process/user_signup.proc.php" method="POST" class="container" style="width: 80%;">
		<div class="row">
						<div class="form-group col-sm-12 col-md-12 col-lg-12">
							<input type="text" placeholder="NAME"  name="user_signup_name" class="form-control p-2">
						</div>
						<div class="form-group col-lg-12">
							<input type="text"  name="user_signup_adhaar" placeholder="ADHAAR NUMBER" class="form-control p-2">
						</div>
						<div class="form-group col-sm-12 col-md-12 col-lg-12">
							<input type="text" placeholder="EMAIL" name="user_signup_email" class="form-control p-2">
						</div>
						<div class="form-group col-lg-12">
							<input type="text" placeholder="PHONE" name="user_signup_phone" class="form-control p-2">
						</div>
						
						<div class="form-group col-lg-12">
							<input type="password" placeholder="PASSWORD" name="user_signup_password" class="form-control p-2">
						</div>
						<div class="form-group col-lg-12">
							<input type="password" placeholder="CONFIRM PASSWORD" class="form-control p-2" name="user_signup_repeat_password">
						</div>
						
						
						<div class="custom-control custom-checkbox ml-3 mb-3 col-lg-12" >
                          <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                          <label class="custom-control-label" for="customCheck1">I Accept terms and conditions</label>
						</div>
		</div>
		<div class="card-footer d-flex justify-content-center mb-6 mt-6">
		<button  name="Submit" class="btn btn-primary btn-block shadow mb-3">signup</button>
			
		</div>

	</form>



</div>

	
</div>
<?php include ('includes/footer.php') ?>


