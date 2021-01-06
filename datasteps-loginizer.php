<?php

function ds_loginizer() { ?>
    <style type="text/css">
		#login {
			width:420px !important;
		}
		.login h1 {
			display: none;
		}
        #login h1 a, .login h1 a {
            /*background-image: url(https://elegradvault.b-cdn.net/datasteps/workflow.png);*/
            height:85px;
            width:420px;
            background-size: 85px 85px;
            background-repeat: no-repeat;
            padding-bottom: 20px;
        }
		.login #login_error {
			border-left-color: #dc3232;
			border-width: 0 !important;
			background-color: #dc3232 !important;
			color: #fff;
			font-size: 16px;
			padding: 20px !important;
		}
		div.nsl-container-block .nsl-container-buttons a {
			max-width: 100% !important;
		}
		div.nsl-container .nsl-button-default div.nsl-button-label-container {
			font-size:12px !important;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'ds_loginizer' );

// changing the logo link from wordpress.org to your site
function ds_login_url() {  return home_url(); }
add_filter( 'login_headerurl', 'ds_login_url' );

// changing the alt text on the logo to show your site name
function ds_login_title() { return get_option( 'blogname' ); }
add_filter( 'login_headertext', 'ds_login_title' );

// Force WordPress to accept .doc files.
add_filter( 'upload_mimes', function( $mime_types ) {
    $mime_types['docx'] = 'Microsoft Word'; // Adding .docx extension
    return $mime_types;
}, 1, 1 );
 
add_filter( 'wp_check_filetype_and_ext', function( $mime, $file, $filename, $mimes ) {
    $wp_filetype = wp_check_filetype( $filename, $mimes );
    if ( in_array( $wp_filetype['ext'], [ 'docx' ] ) ) {
        $mime['ext']  = true;
        $mime['type'] = true;
    }
    return $mime;
}, 10, 4 );

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ){
	die;
}
