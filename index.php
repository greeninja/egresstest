<?php

  $url = getenv('URL') or $url = 'http://ifconfig.io';

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'curl'
  ));
  $result = curl_exec($curl);
  print("This is my Egress IP<br>");
  print($result);
  print "<br>Using $url";
  curl_close($curl);

?>
