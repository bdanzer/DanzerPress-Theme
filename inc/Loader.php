<?php

class Loader {
    public function __construct() {}

    public static function compile($file, $context = [])
    {
        ob_start();
        extract($context);
        include(locate_template($file));
        return ob_get_clean();
    }

    public static function render($file, $context = '') 
    {
        echo self::compile($file, $context);
    }
}