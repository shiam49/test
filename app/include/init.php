<?php
/**
 * Created by PhpStorm.
 * User: 13554
 * Date: 22.02.2018
 * Time: 16:03
 */

spl_autoload_register( function ($className) {
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
});


/*
spl_autoload_register(function ($className) {
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__;

    $className = str_replace('\\', $ds, $className);

    $file = "{$dir}{$ds}{$className}";

    if(file_exists($file.'.php')) {
        require_once $file.'.php';
    }
});
*/
