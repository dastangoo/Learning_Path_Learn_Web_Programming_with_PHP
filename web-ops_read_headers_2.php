<?php
// Managing Web Operations: Reading Incoming Header Information
// Use $_SERVER['HTTP_HOST'] to make code portable

$url = 'http://' . $_SERVER['HTTP_HOST'] . '/web-ops_set_headers_2.php';
?>

<!DOCTYPE html>
<html>
  <body>
      <a href="<?php echo $url; ?>">Click Here to Soft Kitten</a>
  </body>
</html>
