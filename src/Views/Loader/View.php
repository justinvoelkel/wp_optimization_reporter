<?php
/**
 * Created by PhpStorm.
 * User: justinvoelkel
 * Date: 4/7/15
 * Time: 8:45 PM
 */

namespace optimization_reporter\Views\Loader;


class View {
    protected $view;
    protected $args;

    public function __construct($view,$args = null){
        $this->view = $view;
        $this->args = $args;
    }

    public function load(){
        if(file_exists(__DIR__.'/../'.$this->view.'.php'))
        {
            require_once __DIR__.'/../'. $this->view .'.php';
        }
    }

}