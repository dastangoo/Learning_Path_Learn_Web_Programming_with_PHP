<?php
$states = array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut',
                'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa',
                'Kansas', 'Kentucky', 'Lousiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan',
                'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
                'New Jersey', 'New Mexico', 'New York', 'Norh Carolina', 'Noth Dakota', 'Ohio', 'Oklahama',
                'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee',
                'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming');

echo '<form>';
echo '<select name="state"';
for ($x=0; $x < 50 ; $x++) {
  printf('<option value="%s">%s</option>', $states[$x], $states[$x]);
}

echo '</select>';
echo '</form>';
