<?php
// Managing Web Operations: Handling Cookies
// setcookie(name, value, expiration, path)

// set a cookie by specifying name, value, and expiration time into the future
$futureTime = time() + 3600;
setcookie('info', 'Cookie Info', $futureTime, '/');
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta http-equiv="content-type" content="text/html;charset=utf-8" />
     <title>Cookies</title>
   </head>
   <body>
     <h1>Cookies</h1>
     <?php phpinfo(INFO_VARIABLES); ?>
   </body>
 </html>
