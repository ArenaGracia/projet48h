<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from getskills.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 13:49:11 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- PAGE TITLE HERE -->
	<title>Authentification Admin</title>
	
	<!-- FAVICONS ICON -->
    <link href="<?php echo site_url("/assets/css/style.css")?>" rel="stylesheet">

</head>

<body class="body  h-100" style="background-image: url('<?php echo site_url("assets/images/bg-1.jpg")?>'); background-size:cover;">
    <div class="container h-100">
		<div class="row h-100 align-items-center justify-contain-center">
			<div class="col-xl-12 mt-3">
				<div class="card">
					<div class="card-body p-0">
						<div class="row m-0">
							<div class="col-xl-6 col-md-6 sign text-center">
								<div>
									<div class="text-center my-5">
										<a href="Accueil.html"><img width="200" src="<?php echo site_url("assets/images/logo-full.png")?>" alt=""></a>
									</div>
									<img src="<?php echo site_url("assets/images/log.png")?>" class="education-img"></img>
								</div>	
							</div>
							<div class="col-xl-6 col-md-6">
								<div class="sign-in-your">
									<h4 class="fs-20 font-w800 text-black">Login Admin</h4>
									
									<form action="<?php echo site_url('login/verify_admin'); ?>" method="post" >
										<div class="mb-3">
											<label class="mb-1"><strong>Email</strong></label>
											<input type="email" class="form-control"  name="email" value="<?php echo $admin['email'] ?>">
										</div>
										<div class="mb-3">
											<label class="mb-1"><strong>Password</strong></label>
											<input type="password" class="form-control" name="pwd" value="<?php echo $admin['mdp'] ?>">
										</div>
										<div class="row d-flex justify-content-between mt-4 mb-2">
											<div class="mb-3">
											   <div class="form-check custom-checkbox ms-1">
												</div>
											</div>
											<div class="mb-3">
											</div>
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-primary btn-block">Connecter</button>
                                            <div class="text-center"><a class="small" style="color: #01703E;" href="<?php echo site_url('login/index'); ?>">S'inscrire en tant que simple utilisateur</a></div>
                                        </div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo site_url("assets/js/global/global.min.js")?>"></script>
</body>