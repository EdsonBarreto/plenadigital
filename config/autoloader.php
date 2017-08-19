<?php

spl_autoload_register(function($class_name) {

    // Define an array of directories in the order of their priority to iterate through.
    $dirs = array(
        'model/', // Project specific classes (+Core Overrides)
        'control/', // Core classes example
        'view/',   // Unit test classes, if using PHP-Unit
    );

    foreach( $dirs as $dir ) {
        if (file_exists($dir.'/'.strtolower($class_name).'.php')) {
            require_once($dir.'/'.strtolower($class_name).'.php');
            return;
        }
    }
});