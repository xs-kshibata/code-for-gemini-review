#!/usr/bin/php5.6-cgi
<?php
ini_set("error_reporting", E_ALL & ~E_STRICT & ~E_DEPRECATED);
ini_set( "display_errors", "on");

require_once('/home/xserver/searcher/app/Searcher_Controller.php');

Searcher_Controller::main('Searcher_Controller', array(
'admin_*','api2*',
),
'admin_index');
?>
