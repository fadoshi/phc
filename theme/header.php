<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Pediatric Heart Care</title>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Health Care Medical Html5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Foram Doshi">
	<meta name="generator" content="solutionplanets">
  
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<!-- 
  Essential stylesheets
  =====================================-->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/icofont/icofont.min.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

	<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8">
						<ul class="top-bar-info list-inline-item pl-0 mb-0">
							<li class="list-inline-item"><a href="mailto:clinic@pedsheart.com"><i class="icofont-email mr-2"></i>clinic@pedsheart.com</a></li>
							<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Beaumont, TX &nbsp; | &nbsp; Baytown, TX &nbsp; | &nbsp; Wharton, TX</li>
									
						</ul>
					</div>
					<div class="col-lg-4">
						<ul class="top-bar-info list-inline-item pl-0 mb-0">
							<li class="list-inline-item"><a href="tel:(409)234-0934"><i
										class="icofont-phone mr-2"></i>(409) 234-0934</a></li>
							<li class="list-inline-item"><i class="icofont-fax mr-2"></i>(409) 234-2934</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navigation" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="index">
					<img src="images/logo.png" alt="" class="img-fluid">
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
					aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarmain">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?php if($page=='home'){echo 'active';}?>"><a class="nav-link" href="index">Home</a></li>

						<li class="nav-item <?php if($page=='about'){echo 'active';}?>"><a class="nav-link" href="about">About Us</a></li>

						<li class="nav-item <?php if($page=='service'){echo 'active';}?>"><a class="nav-link" href="service">Services</a></li>

						<li class="nav-item dropdown <?php if($page=='pts'){echo 'active';}?>">
							<a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">For patient <i class="icofont-thin-down"></i></a>
							<ul class="dropdown-menu" aria-labelledby="dropdown02">
								<!-- <li><a class="dropdown-item" href="forms.php">Forms</a></li> -->
								<li><a class="dropdown-item" href="policy">Forms/Policies</a></li>
								<li><a class="dropdown-item" href="faqs">FAQs</a></li>
							</ul>
						</li>

						<li class="nav-item <?php if($page=='insurance'){echo 'active';}?>"><a class="nav-link" href="insurance">Insurance</a></li>

						<li class="nav-item <?php if($page=='contact'){echo 'active';}?>"><a class="nav-link" href="contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>