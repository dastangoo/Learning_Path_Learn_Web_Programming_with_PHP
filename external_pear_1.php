<?php
// Managing the Code -- External Libraries: PHP Libraries and PEAR
// NOTE: neet to install Crypt_Blowfish package from pear.php.net

include '/Applications/MAMP/bin/php/php7.1.1/lib/php';
include '/Applications/MAMP/bin/php/php7.1.1/lib/php/Crypt/Blowfish.php';

function encrypt($contents, $key)
{
  $bf = new Crypt_Blowfish($key);
  return $bf->encrypt($contents);
}

function decrypt($contents, $key)
{
  $bf = new Crypt_Blowfish($key);
  return $bf->decrypt($contents);
}

/* Read contents of test file */
$contents = file_get_contents('gettysburg.txt');

/* Encrypt & Decrypt */
$key = "Some Secret Key";
$ecnrypted = encrypt($contents, $key);
$decrpted = decrypt($contents, $key);
?>
<h3>Encrypted Output</h3>
<hr>
<pre><?php echo $encrypted; ?></pre>
<h3>Decrypted Output</h3>
<hr>
<pre><?php echo $decrypted; ?></pre>
