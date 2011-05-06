<?php
/*
Plugin Name: WPCB Slideshow plugin 
Plugin URI: http://positivesum.ca/
Description: WP plugin to enable select and insert images as a gallery with CB
Version: 0.1
Author: Alexander Yachmenev
Author URI: http://www.odesk.com/users/~~94ca72c849152a57
*/
if ( !class_exists( 'wp_cb_slideshow' ) ) {
	class wp_cb_slideshow {
		/**
		 * Initializes plugin variables and sets up wordpress hooks/actions.
		 *
		 * @return void
		 */
		function __construct( ) {
			$this->pluginDir		= basename(dirname(__FILE__));
			$this->pluginPath		= WP_PLUGIN_DIR . '/' . $this->pluginDir;
			$this->pluginUrl 		= WP_PLUGIN_URL.'/'.$this->pluginDir;	
		
			add_action('get_header', array(&$this, 'wp_cb_slideshow_get_header'));
			add_action('cfct-modules-loaded',  array(&$this, 'wp_cb_slideshow_load'));	
		}

		function wp_cb_slideshow_load() {
			require_once($this->pluginPath . "/slideshow.php");				
		}			

		function wp_cb_slideshow_get_header() {
				wp_enqueue_style('slideshow', $this->pluginUrl . '/css/style.css' );			
				wp_enqueue_style('prettyPhoto', $this->pluginUrl . '/js/prettyPhoto/css/prettyPhoto.css' );						
				wp_enqueue_script('prettyPhoto', $this->pluginUrl . '/js/prettyPhoto/js/jquery.prettyPhoto.js', array('jquery'), '1.0');
				wp_enqueue_script('aviaSlider', $this->pluginUrl . '/js/jquery.aviaSlider.min.js', array('jquery'), '1.0');
		}

		
	}
	$wp_cb_slideshow = new wp_cb_slideshow();	
}
