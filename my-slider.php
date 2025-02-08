<?php
/*
 * Plugin Name:			    My Slider
 * Plugin URI:  			https://github.com/mah-di/
 * Description: 			This plugin allows you to showcase your blog posts in a beautiful slider with multiple options, It is responsive ready so it will work perfectly on different devices like mobile and iPad.
 * Version:     			1.0.0
 * Requires at least: 	    6.5
 * Requires PHP: 		    7.2
 * Tested up to: 		    6.7.1
 * Author:      			Iqbal Mahdi
 * Author URI:  			https://github.com/mah-di
 * License: 				GPLv2 or later
 * License URI: 			https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: 			my-slider
 * Domain Path:  		    /languages
*/

final class My_Slider
{
    private $plugin_version, $plugin_url, $plugin_path;
    private $shortcode_prefix = 'my-slider';

    public function __construct() {
        $this->plugin_version = microtime();
        $this->plugin_url = plugin_dir_url(__FILE__);
        $this->plugin_path = plugin_dir_path(__FILE__);

        $this->define_constants();

        require_once MS_PATH . '/includes/Dependencies/Dependencies.php';

        require_once MS_PATH . '/includes/Template_Tags.php';

        require_once MS_PATH . '/includes/Frontend/Frontend.php';

        require_once MS_PATH . '/includes/Admin/Admin.php';
    }

    private function define_constants() {
        define('MS_VERSION', $this->plugin_version);
        define('MS_URL', $this->plugin_url);
        define('MS_PATH', $this->plugin_path);
        define('MS_SHORTCODE_PREFIX', $this->shortcode_prefix);
    }
}

new My_Slider();