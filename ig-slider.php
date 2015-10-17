<?php
/**
* Plugin Name: IG Slider
* Plugin URI: http://invisibleink.asia/
* Description: Images Slider
* Version: 1.0
* Author: Invisible Ink
* Author URI: http://invisibleink.asia/
*
* License: 
*    This program is free software: you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation, either version 3 of the License, or
*    (at your option) any later version. See the GNU General Public License 
*    for more details.
*/

add_shortcode( 'ig_slider', 'ig_slider_function' );

function ig_slider_function() {
	return "<div id='instafeed'></div>";
		
}
function ig_slider_js_scripts()
{
    wp_register_script( 'newjquery', plugins_url( '/js/jquery.min.js', __FILE__ ),array(), '1.0.0', true  );
    wp_enqueue_script( 'newjquery' );

    wp_register_script( '่uieffect', plugins_url( '/js/jquery-ui-1.10.3.custom.min.js', __FILE__ ),array(), '1.0.0', true  );
    wp_enqueue_script( '่uieffect' );

    wp_register_script( 'mousewheel', plugins_url( '/js/jquery.mousewheel.min.js', __FILE__ ),array(), '1.0.0', true  );
    wp_enqueue_script( 'mousewheel' );

    wp_register_script( 'kinetic', plugins_url( '/js/jquery.kinetic.min.js', __FILE__ ),array(), '1.0.0', true  );
    wp_enqueue_script( 'kinetic' );

    wp_register_script( 'smoothdiv', plugins_url( '/js/jquery.smoothdivscroll-1.3-min.js', __FILE__ ),array(), '1.0.0', true  );
    wp_enqueue_script( 'smoothdiv' );

    wp_register_script( 'instafeed', plugins_url( '/js/instafeed.min.js', __FILE__ ),array(), '1.0.0', true  );
    wp_enqueue_script( 'instafeed' );

    wp_register_script( 'ig_slider', plugins_url( '/js/ig_slider.js', __FILE__ ),array(), '1.0.0', true  );
    wp_enqueue_script( 'ig_slider' );
}
add_action( 'wp_enqueue_scripts', 'ig_slider_js_scripts',20 );

function ig_slider_css_scripts() {
	 wp_register_style( 'custom-style', plugins_url( '/css/ig_slider.css', __FILE__ ), array(), '1.0.0', 'all' );
	 wp_enqueue_style( 'custom-style' );

      wp_register_style( 'smoothDivStyle', plugins_url( '/css/smoothDivScroll.css', __FILE__ ), array(), '1.0.0', 'all' );
     wp_enqueue_style( 'smoothDivStyle' );

     https://snapwidget.com/css/smoothDivScroll.css
}

add_action( 'wp_enqueue_scripts', 'ig_slider_css_scripts');
   
?>