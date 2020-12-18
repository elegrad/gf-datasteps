<?php

function ds_loginizer() if ( has_custom_logo() ) :
 
    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo esc_url( $image[0] ); ?>);
            -webkit-background-size: <?php echo absint( $image[1] )?>px;
            background-size: <?php echo absint( $image[1] ) ?>px;
            height: <?php echo absint( $image[2] ) ?>px;
            width: <?php echo absint( $image[1] ) ?>px;
        }
    </style>
    <?php
endif;
add_action( 'login_enqueue_scripts', 'ds_loginizer' );

// changing the logo link from wordpress.org to your site
function ds_login_url() {  return home_url(); }
add_filter( 'login_headerurl', 'ds_login_url' );

// changing the alt text on the logo to show your site name
function ds_login_title() { return get_option( 'blogname' ); }
add_filter( 'login_headertitle', 'ds_login_title' );

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ){
	die;
}