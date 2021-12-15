<?php

// Read configuration
include('core/Config.php');

if (_Debug)
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
else
    // Turn off all error reporting
    error_reporting(0);

// Exception handler
include('core/Exceptions.php');

// Exception handler
include('lib/HttpMethods.php');

// Controllers core
include('core/Controller.php');

// Router
include('core/App.php');

new App;
