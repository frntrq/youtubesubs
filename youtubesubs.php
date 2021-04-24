<?php 
/*
Plugin Name: Youtube Subs
Description: Youtube subscribe button and sub count.
Version: 1.0.0
Author: Faran Tariq
Author URI: http://frntrq.github.io
*/

if(!defined('ABSPATH')) {
    exit;
}

require_once(plugin_dir_path(__FILE__). '/includes/youtubesubs-scripts.php');

require_once(plugin_dir_path(__FILE__). '/includes/youtubesubs-class.php');

function register_youtubesubs() {
    register_widget('Youtube_Subs_Widget');
}

add_action('widgets_init', 'register_youtubesubs');
?>