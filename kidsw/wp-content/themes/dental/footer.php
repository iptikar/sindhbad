<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<?php $templatedir = get_template_directory_uri();?>

	<!-- Footer start here -->
<footer>
<div class="footer-section">
<div class="footer-title">
<h5>book an appointment Fuck</h5>
</div>
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="contect-info">
<div class="contect-info-row">
<div class="contact-icon"><i><img src="<?= $templatedir ;?>/assets/images/clock-icon.png" alt="clock-icon"/></i></div>
<div class="contact-info-row">
<p><strong>Sunday to Thursday</strong> 8:00 AM – 5:00 PM <br>
<strong>Saturday</strong> 7:00 AM to 3:00 PM</p>
</div>
</div>

<div class="contect-info-row">
<div class="contact-icon"><i><img src="<?= $templatedir ;?>/assets/images/location-icon.png" alt="clock-icon"/></i></div>
<div class="contact-info-row">
<p><strong>Sparkle Dental Boutique</strong></p>
<p>Flat 102 | 1st Floor | CBI/Hollywood Magic<br>
Bldg | Next to Ali & Sons Bldg<br>
Corniche Road | Abu Dhabi</p>
</div>
</div>

<div class="contect-info-row">
<div class="contact-icon"><i><img src="<?= $templatedir ;?>/assets/images/contact-icon.png" alt="clock-icon"/></i></div>
<div class="contact-info-row">
<p><strong>Phone</strong></p>
<p>+971 2 658 3434</p>
<p><strong>E-mail</strong></p>
<p><a href="mailto:welcome@sparkle-dental.ae?Subject=Hello%20again" target="_top">welcome@sparkle-dental.ae</a></p>
</div>
</div>

</div>
</div>


<div class="col-lg-6">
<div class="appointment-row">
<div class="input-row">
<label><i class="fas fa-user-alt"></i></label>
<input type="text" name="lastname" placeholder="Full Name">
</div>
<div class="input-row">
<label><i class="fas fa-mobile-alt"></i></label>
<input type="text" name="phone" placeholder="Phone">
</div>
<div class="input-row">
<label><i class="fas fa-envelope"></i></label>
<input type="text" name="email" placeholder="E-mail">
</div>
<div class="input-row">
<label><i class="fas fa-tooth"></i></label>
<select class="wide">
<option>Service Needed</option>
<option>Service Needed</option>
<option>Service Needed</option>
</select>
</div>
<div class="input-row">
<label><i class="far fa-calendar-alt"></i></label>
<select class="wide">
<option>Preferred Date</option>
<option>Preferred Date</option>
</select>
</div>
<div class="input-row">
<label><i class="far fa-clock"></i></label>
<input type="text" name="preferredtime" placeholder="Preferred Time">
</div>
<div class="input-row">
<input type="submit">
</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer-nav">
<ul>
	<li><a href="about-us.html">About Us</a></li>
    <li><a href="#">Restorative<br>Dentistry</a></li>
    <li><a href="#">Cosmetic<br>
Dentistry</a></li>
    <li><a href="#">Preventive<br>
Dentistry</a></li>
    <li><a href="#">Orthodontic<br>
Dentistry</a></li>
    <li><a href="our-team.html">Our<br>
Team</a></li>
    <li><a href="media.html">Media</a></li>
    <li><a href="educational-blog">Blog</a></li>
    <li><a href="contact-us.html">Contact Us</a></li>
</ul>
</div>
<div class="footer-copy-right">
<p>Copyright © 2018, Sparkle Dental | All Rights Reserved</p>
<a href="https://www.dowgroup.com/" target="_blank">By Dow Group</a>
</div>
</footer>
<!-- Footer end here -->



</div>



<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?= $templatedir ;?>/assets/js/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?= $templatedir ;?>/assets/js/jquery.nice-select.js" type="text/javascript" charset="utf-8"></script>
<script src="<?= $templatedir ;?>/assets/js/custom.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>
