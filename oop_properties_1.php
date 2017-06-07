<?php

class User
{
  public $firstName = '';
  public $lastName = '';
  public $accountNumber = 0;
  public $balance = 0;
  public $isMember = FALSE;
  public $preferences = array();
}

$user = new User();
$user->firstName = 'Winston';
$user->lastName = 'Churchil';
$user->accountNumber = 998877;
$user->balance = 1230467.88;
$user->isMemeber = TRUE;
$user->preferences = array('Cigars', 'Conservative Party', 'Polo');

echo '<pre>', var_dump($user), '</pre>';
