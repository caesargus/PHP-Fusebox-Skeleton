<?php 
// application name defaults to "cacheddata", put it here if you want to reference it in the app include
$FUSEBOX_APPLICATION_NAME = "skeleton";

// application path defaults to "", put it here if you want to reference it in the app include
$FUSEBOX_APPLICATION_PATH = "";

// application key defaults to "fusebox", put it here if you want to specify an alternative
$FUSEBOX_APPLICATION_KEY = "fusebox";

@include($FUSEBOX_APPLICATION_PATH."parsed/app_".$FUSEBOX_APPLICATION_NAME.".php");
include("../phpfb5test/fusebox5.php");
?>