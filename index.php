<?php

/*
Plugin Name: Local Fonts by Page Effect
Plugin URI: https://page-effect.de
Description: Embed Font Family Local        
Version: 1.0
Author: page effect
Author URI: https://page-effect.de
License: GPLv2
*/

defined( 'ABSPATH' ) or die( 'Are you ok?' );


/* Create Class to avoid conflicts with duplicated function names*/



class local_fonts {


      function __construct() {
            add_action( 'wp_enqueue_scripts', array($this,'fonts' ));
      }
      
      function fonts() {
            // Generate correspond fonts.css by https://gwfh.mranftl.com/fonts
            wp_enqueue_style( 'fonts_css', plugins_url('/local-fonts-by-pe/fonts.css' ), array(), 1.0 , false);  
      }

}

/* Make hooks accessible for other plugins/themes with given variable */

$local_fonts = new local_fonts();
