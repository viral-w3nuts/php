<?php

set_time_limit(0); //prevent timeout

$ch2=curl_init();
$file2 = fopen('http://abcxyz.com/abcd/final.zip','w+');
curl_setopt($ch2, CURLOPT_URL, $this->URL);

curl_setopt($ch2, CURLOPT_FILE, $file2); //auto write to file

curl_setopt($ch2, CURLOPT_TIMEOUT, 5040);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS,$this->XMLRequest);
# don't use this. please verify your host & peer properly :)
# curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, 1);
# curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt($ch2, CURLOPT_SSLVERSION, 3); 
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);

curl_exec($ch2);

curl_close($ch2);
fclose($file2);

?>