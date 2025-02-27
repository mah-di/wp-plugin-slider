<?php
/*
 * Plugin Name:			    Commerce Slider
 * Plugin URI:  			https://github.com/mah-di/wp-plugin-slider
 * Description: 			This plugin allows you to showcase your blog posts in a beautiful slider with multiple options, It is responsive ready so it will work perfectly on different devices like mobile and iPad.
 * Version:     			1.0.0
 * Requires at least: 	    6.5
 * Requires PHP: 		    7.2
 * Tested up to: 		    6.7.1
 * Author:      			Iqbal Mahdi
 * Author URI:  			https://github.com/mah-di
 * License: 				GPLv2 or later
 * License URI: 			https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: 			commerce-slider
 * Domain Path:  		    /languages
*/

final class Commerce_Slider
{
    private $plugin_version, $plugin_url, $plugin_path;
    private $shortcode_prefix = 'commerce-slider';

    public function __construct() {
        $this->plugin_version = microtime();
        $this->plugin_url = plugin_dir_url(__FILE__);
        $this->plugin_path = plugin_dir_path(__FILE__);

        $this->define_constants();

        require_once CS_PATH . '/includes/Dependencies/Dependencies.php';

        require_once CS_PATH . '/includes/Template_Tags.php';

        if ( is_admin() )
            require_once CS_PATH . '/includes/Admin/Admin.php';

        else
            require_once CS_PATH . '/includes/Frontend/Frontend.php';

    }

    private function define_constants() {
        define('CS_VERSION', $this->plugin_version);
        define('CS_URL', $this->plugin_url);
        define('CS_PATH', $this->plugin_path);
        define('CS_SHORTCODE_PREFIX', $this->shortcode_prefix);
    }
}

new Commerce_Slider();