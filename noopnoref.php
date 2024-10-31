<?php
/*
Plugin Name: No noopener noreferrer - Don’t add rel="noopener noreferrer"
Description: Prevent Wordpress from adding noreferrer and noopener to external links.
Author: Matthew Tatum
Author URI: https://www.linkedin.com/in/matthew-k-tatum
Version: 1.0.0
*/




function nopr_allow_unsafe_link_target( $mceInit ) {
    $mceInit['allow_unsafe_link_target']=true;
    return $mceInit;

}

add_filter('tiny_mce_before_init','nopr_allow_unsafe_link_target');