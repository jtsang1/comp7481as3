<?php

// Include and instantiate the class.
require_once 'vendor/mobiledetect/mobiledetectlib/Mobile_Detect.php';
$detect = new Mobile_Detect;

if( $detect->isMobile() ){
  echo "<p>This is an android device</p>"; 
}
elseif( $detect->isTablet()) {
  echo "<p>This is a tablet</p>";
}
else{
  echo "<p>This is a desktop browser</p>"; 
}


