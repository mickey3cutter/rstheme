<?php 
$ch = curl_init('http://www.rovimatgroup.com/wp-content/ai1wm-backups/www.rovimatgroup.com-20170424-091243-429.wpress');  //Link from where we take
$fp = fopen('rovimatgroup.wpress', 'wb'); // Will be download here with this name
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);