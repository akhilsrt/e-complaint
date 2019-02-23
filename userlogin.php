<?php include ('includes/header.php') ?>

<div class="reg_form" style="background: #159957;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #155799, #159957);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #155799, #159957); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
; height: 100vh;">
	<br>
	
	<div class="card shadow-lg container" style="width: 50%;margin-top: 4%">
	<h1 class="text-center m-3"> User Login!</h1>


	<form action="process/login.proc.php" method="POST" class="container d-flex justify-content-center">
		<div class="row container  mb-4" style="width: 90%;">
			<div class="form-group d-flex justify-content-center col-lg-12">
							<input type="text" placeholder="UserName"  name="login_name" class="form-control p-2" style="border: none;border-bottom: 1px solid black">
						</div>
						<div class="form-group d-flex justify-content-center col-lg-12">
							<input type="password"  name="login_password" placeholder="Password" class="form-control p-2" style="border: none;border-bottom: 1px solid black">
						</div>

	<div class="card-footer d-flex justify-content-center col-lg-12 mb-4 mt-4">
	
		<button  type="submit" name="submit" class="btn btn-primary btn-block shadow">Login</button>
			
 
	</div>
</div>
</form>
</div>
</div>

<?php include ('includes/footer.php') ?>