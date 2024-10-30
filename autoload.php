<?php
function myAutoloader($className)
{
    // Convert namespace to full file path
    $filePath = __DIR__ . '/src/' . str_replace('\\', '/', $className) . '.php';

    if (file_exists($filePath)) {
        include $filePath;
    } else {
        echo "Class file for {$className} not found.<br>";
    }
}

// Register the autoloader
spl_autoload_register('myAutoloader');