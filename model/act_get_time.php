<?php

$timeNow = microtime();
$timeNow = (substr($timeNow,-strpos($timeNow,' ')))*1000;
$myApp =& $myFusebox->getApplication();
$myAppData = $myApp->getApplicationData();
$startTime = $myAppData['startTime'];

if ( floor(($timeNow - $startTime)/86400000) > 1 ) {
	$runTime = floor(($timeNow - $startTime)/86400000) . " day(s)";
} else if ( floor(($timeNow - $startTime)/3600000) > 0 ) {
	$runTime = floor(($timeNow - $startTime)/3600000) . " hour(s)";
} else if ( floor(($timeNow - $startTime)/60000) > 0 ) {
	$runTime = floor(($timeNow - $startTime)/60000) . " minute(s)";
} else if ( floor(($timeNow - $startTime)/1000) > 0 ) {
	$runTime = floor(($timeNow - $startTime)/1000) . " seconds(s)";
} else {
	$runTime = "less than a second";
}
?>