<?php
spl_autoload_register(
    function($class_name) {
    $dirs = array(
        'model/',
        'control/',
        'view/'
    );
    foreach( $dirs as $dir ) {
        if (file_exists($dir.'/'.strtolower($class_name).'.php')) {
            require_once($dir.'/'.strtolower($class_name).'.php');
            return;
        }
    }
});