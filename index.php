<?php
//Error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload
require_once('vendor/autoload.php');

//Creates the instance of the base class
$f3 = Base::instance();

//Specified the default route
$f3->route('GET /', function () {
    echo "GRC Students"
});

////Displays a view
//$view = new Template();//Class in the Fat-Free Framework
//echo $view->render('views/home.html');//uses views render method that returns the content of the page.

//run the framework
$f3->run();