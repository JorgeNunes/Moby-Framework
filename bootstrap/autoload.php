<?php

/*
| -------------------------------------------------------------------
|  Session start
| -------------------------------------------------------------------
|   
|   Start in session before everything
|
*/
session_start();


/*
| -------------------------------------------------------------------
|  Autoload of application
| -------------------------------------------------------------------
|
|  Starting the autoload of application
|  Autoload pattern of PSR-4
|
*/
require_once __DIR__ . '/../vendor/autoload.php';


/*
| -------------------------------------------------------------------
|  Config of application
| -------------------------------------------------------------------
|
|  Starting the basic configurations of system
|  
|  Database
|  Server email
|  Format date and time
|  
*/
require_once __DIR__ . '/../App/Config/config.php';


/*
| -------------------------------------------------------------------
|  Config of vendor
| -------------------------------------------------------------------
|
|   If verify diplay erros is true 
|
*/
$CONFIG_DATABASE = require_once __DIR__ . '/../App/Config/database.php';
$CONFIG_EMAIL    = require_once __DIR__ . '/../App/Config/mail.php';


/*
| -------------------------------------------------------------------
|  Curtom Error
| -------------------------------------------------------------------
|
|
*/
require_once __DIR__ . '/../vendor/moby/Helpers/customError.php';


/*
| -------------------------------------------------------------------
|  Config of vendor
| -------------------------------------------------------------------
|
|  Starting the basic configurations of system in vendor
|  
*/
require_once __DIR__ . '/../vendor/moby/Config/config.php';


/*
| -------------------------------------------------------------------
|  Redirect
| -------------------------------------------------------------------
|
|  Starting the function in redirecting the application
|  Example in call: redirec('/');
|
*/
require_once __DIR__ . '/../vendor/moby/Helpers/redirect.php';


/*
| -------------------------------------------------------------------
|  View
| -------------------------------------------------------------------
|
|  Starting the function returning views
|  Example in call: view('index');
|
*/
require_once __DIR__ . '/../vendor/moby/Helpers/view.php';


/*
| -------------------------------------------------------------------
|  URL
| -------------------------------------------------------------------
|
|  Starting the functions URL
|
*/
require_once __DIR__ . '/../vendor/moby/Helpers/url.php';


/*
| -------------------------------------------------------------------
|  Console Moby
| -------------------------------------------------------------------
|
|   Verify if has console moby
|
*/
if (isset($consoleMoby)) {
    return;
}


/*
| -------------------------------------------------------------------
|  Instance of routes
| -------------------------------------------------------------------
|
|  Instantiating the class in route for the variable $app
|
*/
$app = new Routing\Route();

/*
| -------------------------------------------------------------------
|  File routes (routes.php)
| -------------------------------------------------------------------
|
|  Including the page in routes
|
*/
require_once __DIR__ . '/../App/Http/routes.php';

/*
| -------------------------------------------------------------------
|  Run the applicaiton
| -------------------------------------------------------------------
|
|  Call the run application for roll in route
|
*/
$app->run();