<?php

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://ifconfig.io',
    CURLOPT_USERAGENT => 'curl'
  ));
  $result = curl_exec($curl);
  print("This is my Egress IP");
  print($result);

  curl_close($curl);

?>
