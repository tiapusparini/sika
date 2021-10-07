<!DOCTYPE html>
<html>
<head>
	<!-- Bootswatch link -->
	<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
	<!-- Fontawesome link -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<title>Login SIKA</title>
	<style type="text/css">
		.vertical-center {
		  min-height: 100%; 
		  min-height: 100vh; 
		  display: flex;
		  align-items: center;
		}

		body{
			background-image: url('<?php echo base_url() ?>../assets/images/sika_bg_login.png');
			background-size: cover;
		}
	</style>
</head>
<body>
	<div class="jumbroton vertical-center">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<div class="container" style="background-color: #CCC; border: 1px solid #CCC; border-radius: 20px; box-shadow: 2px 2px 5px #CCC">
						<div class="row justify-content-center mt-2 mb-3">
							<img class="img-fluid" width="70%" src="<?php echo base_url() ?>../assets/images/logo-sika2.png">
						</div>
						<div class="row justify-content-center pt-3" style="background-color: #EEE">
							<h5>Login Admin</h5><br>
						</div>
						<div class="row justify-content-center pt-3" style="background-color: #EEE">
							<?php if (isset($failed)): ?>
	                          <p style="text-align: center; color: red"><?php echo $failed ?></p>
	                          <br>
	                        <?php endif; ?>
						</div>
						<div class="row py-2" style="background-color: #EEE">
							<div class="col-md-10">
								<form action="<?php echo base_url('login/aksi_login'); ?>" method="POST" id="signup-form" class="signup-form">
									<input type="text" name="nama" class="form-control mb-1 mx-4" placeholder="Username"> <br>
									<input type="password" name="password" class="form-control mb-1 mx-4" placeholder="Password"> <br>
									<input type="submit" name="submit" class="form-control mb-1 mx-4 btn btn-danger" value="Login">
								</form>
							</div>
						</div>
						<div class="row justify-content-center pb-2" style="background-color: #EEE">
							<a href=""><h7>Lupa Kata Sandi?</h7></a>
						</div>
						<div class="row justify-content-center my-2">
							<div class="col-lg-5" style="justify-content: center;">
								<img class="img-fluid" width="90%" src="<?php echo base_url() ?>../assets/images/telkom.png">
							</div>
							<div class="col-lg-6 mt-2" style="justify-content: center;">
								<img class="img-fluid" width="150%" src="<?php echo base_url() ?>../assets/images/logo-yakes-copy.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>