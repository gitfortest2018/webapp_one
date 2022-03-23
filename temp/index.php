<?php

while ($times_run < 1000) {
   $encrypted = openssl_encrypt($string, $method, $key, null, $iv);
   $decrypted = openssl_decrypt($encrypted, $method, $key, null, $iv);
   $times_run++;
}


phpinfo();




?>

