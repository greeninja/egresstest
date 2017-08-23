<?php

  $url = .$_ENV["URL"] ?? 'http://ifconfig.io';

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'curl'
  ));
  $result = curl_exec($curl);
  print("This is my Egress IP<br>");
  print($result);

  curl_close($curl);

?>
