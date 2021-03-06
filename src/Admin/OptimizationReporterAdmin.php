<?php
/**
 * Created by PhpStorm.
 * User: justinvoelkel
 * Date: 4/5/15
 * Time: 11:42 AM
 */
namespace optimization_reporter\Admin;

use optimization_reporter\Views\Loader\View;

class OptimizationReporterAdmin
{

        public function __construct()
        {
            add_action('admin_menu', array($this, 'plugin_menu'));
        }

        public function plugin_menu()
        {
            add_options_page( 'WP Optimization Reporter Options', 'WP Optimization Reporter', 'manage_options', 'wp-optimization-reporter', array($this, 'plugin_options') );
        }

        public function plugin_options()
        {
            if (!current_user_can('manage_options')) {
                wp_die(__('You do not have sufficient permissions to access this page.'));
            }
            //load admin template
            $view = new View('Admin');
            $view->load();
        }
}