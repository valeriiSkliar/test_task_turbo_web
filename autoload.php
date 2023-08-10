<?php

spl_autoload_register(function ($className) {
    // Convert namespace to directory separator for standard PSR-4 compliance
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    
    $filename = __DIR__ . "/classes/" . $className . ".php";
    
    if (file_exists($filename)) {
        require_once($filename);
        if (class_exists($className, false)) {
            return true;
        }
    }
    return false;
});
