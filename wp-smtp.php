<?php
/** 
* Plugin Name: WP-SMTP
* Description: Tiny plugin to hack the WordPress SMTP
* Author: Christos Chiotis
* Author URI: https://elegrad.com
* Version: 1.0.0
*/
// Mail Settings

add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'XXXXXXXXXXXXXXXXXX';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = '587';
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->Username   = 'XXXXXXXXXXXXXXXXXX';
    $phpmailer->Password   = 'XXXXXXXXXXXXXXXXXX';
    $phpmailer->From       = 'XXXXXXXXXXXXXXXXXX';
    $phpmailer->FromName   = 'XXXXXXXXXXXXXXXXXX';
}
?>
