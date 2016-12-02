<?php

namespace Config;

/*
| -------------------------------------------------------------------
|  Global variables
| -------------------------------------------------------------------
|
|  Declaration of global application variables
|
*/
global $HOST, $USER, $PASS, $CHARSET, $DATABASE, $DNS, $BASEURL, 
       $DISPLAY_ERRORS, $MAIL;


/*
| -------------------------------------------------------------------
|  DISPLAY ERRORS
| -------------------------------------------------------------------
|
|  Sets config display errors
|
*/
$GLOBALS['DISPLAY_ERRORS']  = $DISPLAY_ERRORS;


/*
| -------------------------------------------------------------------
|  BASEURL
| -------------------------------------------------------------------
|
|  Sets config base url
|
*/
$GLOBALS['BASEURL']         = $BASEURL;
$GLOBALS['localhost']       = $localhost;


/*
| -------------------------------------------------------------------
|  MAIL
| -------------------------------------------------------------------
|
|  Sets config mail
|
*/
$GLOBALS['MAIL']            = $CONFIG_EMAIL;


/*
| -------------------------------------------------------------------
|  DATABASE
| -------------------------------------------------------------------
|
|  Sets config database
|
*/
$GLOBALS['HOST']            = $CONFIG_DATABASE[$CONFIG_DATABASE['default']]['host'];
$GLOBALS['USER']            = $CONFIG_DATABASE[$CONFIG_DATABASE['default']]['user'];
$GLOBALS['PASS']            = $CONFIG_DATABASE[$CONFIG_DATABASE['default']]['pass'];
$GLOBALS['CHARSET']         = $CONFIG_DATABASE[$CONFIG_DATABASE['default']]['charset'];
$GLOBALS['DNS']             = $CONFIG_DATABASE[$CONFIG_DATABASE['default']]['dns'];
$GLOBALS['DATABASE']        = $CONFIG_DATABASE[$CONFIG_DATABASE['default']]['database'];


/*
| -------------------------------------------------------------------
|  Show errors
| -------------------------------------------------------------------
|
|  Set display errors and errors reporting
|
*/
ini_set('display_errors', 0);

if ($GLOBALS['DISPLAY_ERRORS']) {
    ini_set('error_reporting', E_ALL);
} else {
    ini_set('error_reporting', 0);
}