<?php
/**
 * Created by PhpStorm.
 * User: justinvoelkel
 * Date: 4/5/15
 * Time: 12:09 PM
 */

namespace optimization_reporter;
use optimization_reporter\Admin\Optimization_Reporter_Admin as Admin;


class Optimization_Reporter {
    private $admin;

    public function __construct(){

    }

    public function run (){
        $this->admin = new Admin();
    }
}