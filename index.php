<?php

/**
 * Define some constants
 */

define ("WORKING_FOLDER", dirname(__FILE__));


/**
 * Include Twig
 */
require_once '/system/include/autoload.php';
$loader = new Twig_Loader_Filesystem(WORKING_FOLDER . '/src');
$twig = new Twig_Environment($loader, array(
  'cache' => WORKING_FOLDER . '/_cache',
));


include "system/routing.php";