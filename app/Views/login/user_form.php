<!doctype html>
<html lang="en">
  <head>
  	<title>Aplikasi Manajemen Laporan Praktikum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="temp/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center mb-5">
					<h2 class="heading-section">Aplikasi Manajemen Laporan Praktikum</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign In</h3>
				  <form method="POST" action="<?= base_url('login/login_action') ?>">
               <div class="form-group">
			   <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                  <small id="usernameHelp" class="form-text text-muted"></small>
					</div>
	            <div class="form-group d-flex">
				<input type="password" name="password" class="form-control" id="password" placeholder="Password">
               </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	          </form>
              <p>
               <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                  <div class="alert alert-warning">
                     <?php echo session()->getFlashdata('gagal'); ?>
                  </div>
               <?php } ?>
            </p>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="tempp/js/jquery.min.js"></script>
  <script src="temp/js/popper.js"></script>
  <script src="temp/js/bootstrap.min.js"></script>
  <script src="temp/js/main.js"></script>

	</body>
</html>

