<?php
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
echo $ip_address."<br>";
echo $_SERVER['HTTP_USER_AGENT']."<br>";
echo basename($_SERVER['PHP_SELF'])."<br>";
echo $_SERVER['HTTP_HOST']."<br>";
echo $_SERVER['REQUEST_URI']."<br>";
echo getenv('DOCUMENT_ROOT')."<br>";
?>