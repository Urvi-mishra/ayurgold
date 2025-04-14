<?php
/*
Plugin Name: My Enquiry Form
Plugin URI: https://yourwebsite.com
Description: A simple enquiry form plugin.
Version: 1.0
Author: Your Name
Author URI: https://yourwebsite.com
License: GPL2
*/

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

// Include form display and processing
include_once(plugin_dir_path(__FILE__) . 'includes/form-handler.php');

// Shortcode to display the form
function my_enquiry_form() {
    ob_start();
    include(plugin_dir_path(__FILE__) . 'templates/form-template.php');
    return ob_get_clean();
}

