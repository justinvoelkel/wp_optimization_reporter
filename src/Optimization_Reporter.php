<?php
/**
 * Created by PhpStorm.
 * User: justinvoelkel
 * Date: 4/5/15
 * Time: 12:09 PM
 */
namespace optimization_reporter;

use optimization_reporter\Admin\OptimizationReporterAdmin as Admin;

class OptimizationReporter
{
    private $admin;

    public function run()
    {
        $this->admin = new Admin();
    }
}