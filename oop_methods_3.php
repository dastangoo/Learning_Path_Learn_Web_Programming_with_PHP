<?php
class User
{
  public $firstName = '';
  public $lastName = '';
  public $accountNumber = '';
  public $balance = 0;
  public $isMember = FALSE;
  public $preferences = array();


  public function __construct($fname, $lname, $accNc, $balance, $isMemb, $prefs)
  {
    $this->firstName = $fname;
    $this->lastName = $lname;
    $this->accountNumber = $accNc;
    $this->balance = $balance;
    $this->isMember = $isMemb;
    $this->preferences = $prefs;
  }
}

$user = new User('Amelia', 'Earhart', 887799, 234567.89, TRUE, array('Airplane', 'sp', 'Flying'));

printf('<br />Name: %s %s', $user->firstName, $user->lastName);
printf('<br />Account Number: %d', $user->accountNumber);
printf('<br />Balance: %8.2f', $user->balance);
