<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php $templatedir = get_template_directory_uri();?>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<link href= "<?= $templatedir ;?>/assets/css/stylesheet.css" rel="stylesheet" type="text/css">
	<link href="<?= $templatedir ;?>/assets/css/kids-header-footer.css" rel="stylesheet" type="text/css">
	<link href="<?= $templatedir ;?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?= $templatedir ;?>/assets/css/slick.css" rel="stylesheet" type="text/css">
	<link href="<?= $templatedir ;?>/assets/css/nice-select.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700" rel="stylesheet">
	<link href="<?= $templatedir ;?>/assets/images/fav-icon.png" rel="shortcut icon">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php wp_head(); ?>
</head>

<div class="mani-wapper">
<!-- Header Start here -->
<header id="header">
<div class="moble-header">
<div class="mobile-logo"><a href="index.html"><img src= "<?= $templatedir ;?>/assets/images/kids-logo.png" alt="adults-logo"/></a></div>
<div class="moble-header-icon">
<ul>
	<li><a href="#"><i class="fas fa-phone-square"></i></a></li>
	<li><a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
</ul>
</div>
</div>
<div class="container">
<div class="header">
<div class="logo"><a href="index.html"><img src = "<?= $templatedir ;?>/assets/images/kids-logo.png" alt="kids-logo"/></a></div>
<div class="header-info">
<div class="header-logo"><img src="<?= $templatedir ;?>/assets/images/adults-small-logo.png" alt="header-logo"/></div>
<div class="book-appointment">
<i><img src="<?= $templatedir ;?>/assets/images/phone-icon.png" alt="phone-icon"/></i>
<div class="book-appointment-left">
    <p>Book Appointment</p>
    <span>+971 2 658 3434</span>
</div>
</div>
<div class="facebook-link"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
</div>
</div>
<div id="cssmenu" class="navigation"> 
<div id="head-mobile"></div>
<div class="mobile-title">
<div class="mobile-logo-row">

	<img src="<?= $templatedir ;?>/assets/images/adults-small-logo.png" alt="mobile-logo"/>


</div>
<p>menu</p></div>
<div class="button"></div>

<?php
            $defaults = array(
              'theme_location' => 'top', 
              'container' => 'ul', 
              'menu_class' => '', 
              'menu' => 'Header Menu'
            );
            wp_nav_menu($defaults); ?> 
<!--
<ul>
	<li><a class="active" href="index.html">Home</a></li>
    <li><a href="about-us.html">About us</a></li>
    <li><a href="services-listing.html">Services</a>
    <ul>
           <li><a href='#'>Prevention</a>
		   <ul>
		   <li><a href='#'>Fluoride Varnish</a></li>
		   <li><a href='#'>Fissure Sealant</a></li>
		   </ul>
		   </li>
            <li><a href='#'>Diet Counseling, Oral Hygiene
			Tooth brushing Instruction</a></li>
            <li><a href='#'>Space Maintainer</a></li>
            <li><a href='#'>Kids Crown</a></li>
         </ul>
    </li>
    <li><a href="our-team.html">Our Team</a></li>
    <li><a href="media.html">Media</a></li>
    <li><a href="educational-blog.html">Educational blog</a></li>
    <li><a href="faqs.html">FAQs</a></li>
	<li><a href="contact-us.html">Contact us</a></li>      


-->

</div>
</div>
</header>
