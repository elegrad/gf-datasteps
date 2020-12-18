<?php
/** 
* Plugin Name: GF Datasteps
* Description: A customization plugin for Gravity Family
* Author: Christos Chiotis
* Author URI: https://elegrad.com
* Version: 1.0.0
*/

// Style customizations for Gravity Flow
require_once( dirname( __FILE__ ) . '/datasteps-styles.php' );

// Login customize
require_once( dirname( __FILE__ ) . '/datasteps-loginizer.php' );

// This function uses the first input field value to create a subfolder ans store all uploads
add_filter("gform_upload_path", "change_upload_path", 10, 2);
function change_upload_path($path_info, $form_id){
    $custom_folder = rgpost( 'input_1' );

    $path_info["path"] = WP_CONTENT_DIR . "/datasteps/" . $form_id . "/" . $custom_folder . "/";
    $path_info["url"] = WP_CONTENT_URL . "/datasteps/" . $form_id . "/" . $custom_folder . "/";

    return $path_info;
}

// Rename button labels on Gravity Flow
add_filter( 'gravityflow_update_button_text_user_input', 'ds_gravityflow_update_button_text_user_input', 10, 3 );
function ds_gravityflow_update_button_text_user_input( $text, $form, $step ) {
	return "Οριστική Υποβολή";
}

add_filter( 'gravityflow_submit_button_text_user_input', 'ds_gravityflow_update_submit_button_text_user_input' );
function ds_gravityflow_update_submit_button_text_user_input( $text ) {
	return "Οριστική Υποβολή";
}

add_filter( 'gravityflow_save_progress_button_text_user_input', 'ds_gravityflow_update_save_button_text_user_input' );
function ds_gravityflow_update_save_button_text_user_input( $text ) {
	return "Αποθήκευση";
}
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ){
	die;
}