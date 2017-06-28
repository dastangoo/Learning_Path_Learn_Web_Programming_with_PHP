<?php
// Managing Web Operations: Handling Cookies
// setcookie(name, value, expiration, path)

// read the cookie using $_COOKIE['name_of_cookie']
// use strip_tags() to strip out any malicious tags
$value = strip_tags($_COOKIE['info']);
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta http-equiv="content-type" content="text/html;charset=utf-8" />
     <title>Cookies</title>
   </head>
   <body>
     <h1>Cookies</h1>
     <!--  use htmlspecialchars() to echo value of cookies as it is untrusted -->
     <b>Value: </b><?php echo htmlspecialchars($value); ?>
     <?php echo phpinfo(INFO_VARIABLES); ?>
   </body>
 </html>
