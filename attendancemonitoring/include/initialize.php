<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'AttendanceMonitoring');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once("config.php");
require_once("function.php");
require_once("session.php");
require_once("accounts.php");
require_once("autonumbers.php");
require_once("departments.php");
require_once("courses.php"); 
require_once("sidebarFunction.php");  
require_once("events.php");  
require_once("students.php"); 
require_once("candidates.php"); 
require_once("eventswinners.php"); 
require_once("verifytimeintimeout.php");  
require_once("timetable.php");   
 

require_once("database.php");
?>


