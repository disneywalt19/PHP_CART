<?php

// Define access
define('_VALID', 'Yes');

// Get configuration files
require_once('include/config/config.php');
require_once('include/traffic/traffic.php');


?>

<!DOCTYPE html>
<html lang="<?php echo $GLOBALS['SITE_LANG_SHORT']; ?>">
<head>
<title>PHP Shopping Cart</title>
<?php echo displayMetaCharset($languageOption) ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Get CSS files -->
<link href="<?php echo $GLOBALS['URL'] ?>/assets/bootstrap/bootstrap-4.3.1/css/bootstrap.min.css " rel="stylesheet">
<link href="<?php echo $GLOBALS['URL'] ?>/assets/fontawesome/fontawesome-free-5.10.2/css/fontawesome.css" rel="stylesheet">
<!-- Get JavaScript files -->
<script src="<?php echo $GLOBALS['URL'] ?>/assets/jquery/jquery-3.4.1.js"></script>
<script src="<?php echo $GLOBALS['URL'] ?>/assets/bootstrap/bootstrap-4.3.1/js/bootstrap.min.js"></script>

	<!-- Favicon -->
<link href="<?php echo $GLOBALS['URL'] ?>/favicon.ico" rel="shortcut icon">
<!-- Custom CSS -->
	<!-- <style type="text/css"></style> -->
</head>
<body>
	
<!-- Top JavaScript code -->
	<div class="main-wrapper">
<!-- Start main header -->
	<header class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php displayLogo(); ?>
				</div>
				<div class="col-md-9">
<!-- Display top banner here -->
				</div>
			</div>
				 
		</div>
	</header>
<!-- End main header -->
<!-- Start main menu -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<!-- End main menu -->
		
<!-- Start main content -->
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
<!-- Start page content -->
					<section class="page-content">
						<h1>PHP Shopping Cart</h1>
					</section>
<!-- End page content -->
				</div>
				<div class="col-md-4">
<!-- Start page sidebar -->
					<asside class="page-sidebar">
						
					</asside>
<!-- End page sidebar -->
				</div>
			</div>
		</div>
	</div>
<!-- End main content -->
<!-- Start main footer -->
		<footer class="main-footer">
			<div class="main-footerbottom">
				&copy; PHP Shopping Cart <?php echo date('Y') ?>;
			</div>
		</footer>
<!-- End main footer -->
	</div>
	
</body>







</html>