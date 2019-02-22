<?php

class Controller {
    public $context;
    public $template;

    public function __construct($template) 
    {
        $this->template = $template;
    }

    public function render() 
    {
        Loader::render($this->template, $this->context);
    }
}