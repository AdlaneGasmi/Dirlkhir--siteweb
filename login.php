<?php
require 'constants/config.php';
require 'constants/check-login.php';
?>
<!DOCTYPE html>
<html lang="fr">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - Se connecter</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="icon" href="assets/icon/favicon.ico">
</head>
<body>

<header id="header-wrap">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-5 col-xs-12">

<ul class="list-inline">


</div>
<div class="col-lg-5 col-md-7 col-xs-12">

<div class="header-top-right float-right">
	<?php
	if ($logged == "1") {
		?>
		<a href="<?php echo $myrole ; ?>" class="header-top-button"><i class="lni-user"></i> Mon compte</a> |
      <a href="logout" class="header-top-button"><i class="lni-enter"></i> Se déconnecter</a>
      <?php

	}else{

		?>
		<a href="login" class="header-top-button"><i class="lni-lock"></i> Se connecter</a> |
       <a href="register" class="header-top-button"><i class="lni-pencil"></i> Créer un compte</a>
   <?php

	}

	?>

</div>
</div>
</div>
</div>
</div>


<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
<div class="container">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>
<a href="./" id="site_logo"  class="navbar-brand"><?php echo $site_title; ?></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item">
<a class="nav-link" href="./">Accueil</a></li>
				<li class="nav-item"><a class="nav-link" href="listings">Objets déposés</a></li>
				<li class="nav-item"><a class="nav-link" href="faq">FAQ</a></li>
				<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
				<li class="nav-item"><a class="nav-link" href="about">À propos</a></li>
			</ul>
<div class="post-btn">
    <?php
	if ($logged == "1") {
		print '<a class="btn btn-common" href="'.$myrole.'/upload"><i class="lni-pencil-alt"></i> + Donner un objet</a>';

		}else{

		print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> + Donner un objet</a>';

		}

      ?>

</div>
</div>
</div>

<ul class="mobile-menu">
	<li><a class="active" href="./">Accueil</a>
	<li><a href="listings">Objets déposés</a>
	<li><a  href="faq">FAQ</a>
	<li><a href="contact">Contact</a>
	<li><a class="about" href="about">À propos</a>
		<?php
	if ($logged == "1") {
	?>
	<li><a href="<?php echo $myrole ; ?>" class="header-top-button"><i class="lni-user"></i> Mon compte</a>
    <li><a href="logout" class="header-top-button"><i class="lni-enter"></i> Se déconnecter</a>
      <?php
	}else{
		?>
	<li><a href="login" class="header-top-button"><i class="lni-lock"></i> Se connecter</a>
    <li><a href="register" class="header-top-button"><i class="lni-pencil"></i> Créer un compte</a>
   <?php
	}?>
</ul>

</nav>

</header>


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Accéder au compte</h2>
<ol class="breadcrumb">
<li><a href="./">Accueil /</a></li>
<li style="color:white;" class="current">Se connecter</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<section class="register section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="register-form login-area">
<h3>S'identifier</h3>
<form  class="login-form" action="app/login.php" method="POST" autocomplete="off">
	<?php require 'constants/check_reply.php'; ?>


<div class="form-group">
<div class="input-icon">
<i class="lni-envelope"></i>
<input type="text" id="UserEmail" class="form-control" name="user_email" required placeholder="Adresse email">

</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="lni-lock"></i>
<input type="password" name="password" required class="form-control" placeholder="Mot de passe">
</div>
</div>



<div class="form-group mb-3">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" required name="check" id="checkedall">
<label class="custom-control-label" for="checkedall">Je ne suis pas un robot</label>
</div>
<a class="forgetpassword" href="forgot-password">Mot de passe oublié ?</a>
</div>


<div class="text-center">
<input id="btnSubmit" type="submit" value="Se connecter" class="btn btn-common log-btn">
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<div class="footer-logo"><h3 class="block-title">À propos</h3></div>
<div class="textwidget">
<p><?php echo $about_site; ?></p>
</div>
<ul class="mt-3 footer-social">
<li><a class="facebook" href="<?php echo $facebook_link; ?>"><i class="lni-facebook-filled"></i></a></li>
<li><a class="twitter" href="<?php echo $twitter_link; ?>"><i class="lni-twitter-filled"></i></a></li>
<li><a class="instaram" href="<?php echo $instagram_link; ?>"><i class="lni-instagram-filled"></i></a></li>
<li><a class="google-plus" href="<?php echo $googleplus_link; ?>"><i class="lni-google-plus"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Lien rapide</h3>
<ul class="menu">
<li><a href="./">- Accueil</a></li>
<li><a href="listings">- Objets déposés</a></li>
<li><a href="faq">- FAQ's</a></li>
<li><a href="contact">- Contact</a></li>
<li><a href="about">- À propos</a></li>
<li><a href="https://www.instagram.com/dirlkhir_officiel/">- Développé par</a></li>
    <?php
	if ($logged == "1") {
print '<li><a href="'.$myrole.'">- Mon compte</a></li>
       <li><a href="logout">- Se déconnecter</a></li>';

	}else{
print '<li><a href="login">- Se connecter</a></li>
       <li><a href="register">- Créer un compte</a></li>';

	}

	?>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Informations de contact</h3>
<ul class="contact-footer">
<li>
<strong><i class="lni-phone"></i></strong><span><?php echo $site_phone; ?></span>
</li>
<li>
<strong><i class="lni-envelope"></i></strong><span><?php echo $site_email; ?></span>
</li>
<li>
<strong><i class="lni-map-marker"></i></strong><span><?php echo $site_address; ?></span>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info text-center">
<p>
            
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="lni-heart-filled" aria-hidden="true"></i> by KoussAdlane 
            </p>

</div>
</div>
</div>
</div>
</div>

</footer>


<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/summernote.js"></script>
<script src="assets/js/password-validate.js"></script>


</body>

</html>