<?php
if (isset($_COOKIE['count'])) {
  $count = (int) $_COOKIE['count'];
  if (isset($_GET['inc'])) {
    $count++;
  }
  else {
    $count--;
  }
}
else {
  $count = 0;
}
setcookie('count', $count, time() + 3600, '/');
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta http-equiv="content-type" content="html/text;charset=utf-8">
     <title>Cookies</title>
   </head>
   <body>
     <h1>Cookies</h1>
     <b>Count: </b><?php echo $count; ?>
     <form name="getForm" method="get">
       <input type="submit" name="inc" value="+">
       <input type="submit" name="dec" value="-">
     </form>
     <?php phpinfo(INFO_VARIABLES); ?>
   </body>
 </html>
