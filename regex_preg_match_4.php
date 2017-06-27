<?php
// Using Regular Expression: Using "preg_match ()" for Form Validation
// putting it all together: validating an address and postal code from a web form

// initialize variables
$houseNumber = 'Number';
$postalCode = 'A9A 9A9';
$validHouseNo = '<b style="color: red;">House number must only contain letters, numbers of punctuaiton!</b>';
$validPostalCode = '<b style="color: red;">Postal code must be in the form A9A 9A9 or 99999-9999!</b>';


// $_GET[] is used to get form data from the URL
// $_GET[] ia discussed in more detail on chapter on web forms
if (isset($_GET['houseNumber'])) {
  $houseNumber = $_GET['houseNumber'];
}

if (isset($_GET['postalCode'])) {
  $postalCode = $_GET['postalCode'];
}

// validating house number = total of 16 alpha numeric characters or spaces
if(preg_match('/^(\w|\s){1,16}$/', $houseNumber)) {
  $validHouseNo = '<b style="color: green;">Houe number validates OK!</b>';
}

// validating postal code = letter-number-letter <space> number-letter-number or nnnnn-nnnn
if (preg_match('/^[A-Z][0-9][A-Z]\s[0-9][A-Z][0-9]$/i', $postalCode) ||
    preg_match('/^\d{5}(-\d{4})?$/i', $postalCode)){
  $validPostalCode = '<b style="color: green;">Postal code validates OK!</b>';
}
?>
<!--  // display the form -->
<form>
  <br><input type="text" name="houseNumber" value="<?php echo htmlspecialchars($houseNumber); ?>" size="16" />
  <br><?php echo $validHouseNo; ?>
  <br>
  <br><input type="text" name="postalCode" value="<?php echo htmlspecialchars($postalCode); ?>" size="10" />
  <br>
  <br><?php echo $validPostalCode; ?>
  <br>
  <br><input type="submit" />
</form>
