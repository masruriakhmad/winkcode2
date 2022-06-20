<!doctype html>
<html lang="en">
  <head>
  	<title><?=data_app()?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/login-form-15/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><?=data_app()?></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(<?=base_url()?>assets/vendor/login-form-15/images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Log In</h3>
			      		</div>
								<div class="w-100">
									<!--
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
									-->
								</div>
			      	</div>

							<form method="post" action="<?=base_url()?>auth/login" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" name="username" required >
			      			<label class="form-control-placeholder" for="username">Username</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" name="password" required >
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
					<div class="form-group">
					<span class="focus-input100"></span>
            			<?php $cpt = generateCode();?>
            			<span class="label-input100"><?=$cpt['text'];?></span>
            			<input class="form-control" type="text" name="cpt" required placeholder="Isikan hasil penjumlahan di atas">	
            			<input type="hidden" name="rescpt" id="rescpt" value="<?=$cpt['res']?>" />
          			</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<!--
										<a href="#">Forgot Password</a> -->
									</div>
		            </div>
		          </form>
				  <!--
		          <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
					-->
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?=base_url()?>assets/vendor/login-form-15/js/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/login-form-15/js/popper.js"></script>
  <script src="<?=base_url()?>assets/vendor/login-form-15/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/login-form-15/js/main.js"></script>

	</body>
</html>

