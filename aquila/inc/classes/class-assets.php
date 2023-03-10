<?php

/**
 * ENQUEUE THEME ASSETS
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    protected function __construct()
    {
        // LOAD CLASS
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * ACTIONS
         */

        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        //  REGISTERING STYLES
        wp_register_style('bootstrap', AQUILA_DIR_URI . '/assets/css/bootstrap.min.css', [], false, 'all');
        wp_register_style('slick', AQUILA_DIR_URI . '/assets/css/slick.min.css', [], false, 'all');
        wp_register_style('custom-style', AQUILA_DIR_URI . '/assets/css/style.css', [], filemtime(AQUILA_DIR_PATH . '/assets/css/style.css'), 'all');

        // ENQUEUEING STYLES
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('slick');
        wp_enqueue_style('custom-style');
    }

    public function register_scripts()
    {
        // REGISTERING SCRIPTS
        wp_register_script('bootstrap', AQUILA_DIR_URI . '/assets/js/bootstrap.min.js', ['jquery'], false, true);
        wp_register_script('slick', AQUILA_DIR_URI . '/assets/js/slick.min.js', ['jquery'], false, true);
        wp_register_script('custom-script', AQUILA_DIR_URI . '/assets/js/custom-script.js', ['jquery'], filemtime(AQUILA_DIR_PATH . '/assets/js/custom-script.js'), true);

        // ENQUEUEING SCRIPTS
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('slick');
        wp_enqueue_script('custom-script');
    }
}
