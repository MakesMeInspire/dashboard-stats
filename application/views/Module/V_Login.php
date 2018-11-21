
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/animate.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/select2.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/main.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sweetalert2.min.css')?>">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?= base_url('validation')?>">
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="txtUsername">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="txtPassword">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('<?= base_url('assets/login/images/bg-01.jpg')?>');">
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/js/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/js/popper.js')?>"></script>
	<script src="<?= base_url('assets/login/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/js/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/js/moment.min.js')?>"></script>
	<script src="<?= base_url('assets/login/js/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/js/countdowntime.js')?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('assets/login/js/main.js')?>"></script>
<!--===============================================================================================-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
<!--===============================================================================================-->
    <script type="text/javascript">
        var loginError = "<?php echo $loginerror; ?>";

            $(document).ready(function(){
                if(loginError != ''){
                    swal("Opss !!!",loginError,{
                        icon: "warning"
                    });
                }
            });
	</script>
</body>
</html>
