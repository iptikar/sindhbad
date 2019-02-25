<?php
/*
Plugin Name: Booking
Plugin URI: http://example.com
Description: Simple Dental Booking
Version: 1.0
Author:Shah
Author URI: http://w3guy.com
*/


function html_form_code() {
    echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
    echo '<p>';
    echo 'Your Name (required) <br />';
    echo '<input type="text" name="cf-name" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ) . '" size="40" />';
    echo '</p>';
    echo '<p>';
    echo 'Your Email (required) <br />';
    echo '<input type="email" name="cf-email" value="' . ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ) . '" size="40" />';
    echo '</p>';
    echo '<p>';
    echo 'Subject (required) <br />';
    echo '<input type="text" name="cf-subject" pattern="[a-zA-Z ]+" value="' . ( isset( $_POST["cf-subject"] ) ? esc_attr( $_POST["cf-subject"] ) : '' ) . '" size="40" />';
    echo '</p>';
    echo '<p>';
    echo 'Your Message (required) <br />';
    echo '<textarea rows="10" cols="35" name="cf-message">' . ( isset( $_POST["cf-message"] ) ? esc_attr( $_POST["cf-message"] ) : '' ) . '</textarea>';
    echo '</p>';
    echo '<p><input type="submit" name="cf-submitted" value="Send"/></p>';
    echo '</form>';
}

function CreateTable() {

	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name = 'booking';

$sql = "CREATE TABLE IF NOT EXISTS $table_name (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
  email varchar(150) NOT NULL,
  name tinytext NOT NULL,
  text text NOT NULL,
  url varchar(55) DEFAULT '' NOT NULL,
  PRIMARY KEY  (id)
) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );


}

function bookingform() {
	
	

	echo CreateTable();
	$email = $_POST['email'] ?? '';
	$message = $_POST['message'] ?? '';

	$form = '<div class = "container"><div class = "row">
<div class = "col-md-6">
<h3>welcome to <span>Your Complete Dental Care Clinic</span></h3>
	<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">Email</label>
    <input type="email" name = "email" class="form-control" value = "'.$email.'" id="formGroupExampleInput" placeholder="Email..." required>
  </div>
  
  <div class="form-group">Message</label>
    <textarea class = "form-control" name = "message" required>'.$message.'</textarea>
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit"  name = "book">
  </div>
</form></div></div></div>';

return $form;
}

function saveData() {
global $wpdb;
	if(isset($_POST['book'])) {

		$email = $_POST['email'] ?? '';
		$message = $_POST['message'] ?? '';

		$table_name = 'booking';

		$wpdb->insert( 
	$table_name, 
	array( 
		'time' => current_time( 'mysql' ), 
		'email' => $email, 
		'text' => $message, 
	) 
);



	}
}

function cf_shortcode() {
    ob_start();
    saveData();
    echo bookingform();
    return ob_get_clean();
}
add_shortcode( 'dental_booking', 'cf_shortcode' );