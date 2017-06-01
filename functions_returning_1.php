<?php
// Managing the Code -- Fucntions: Returing Values
function returnsNoValue()
{
  echo '<br />Returns No Value';
}

returnsNoValue();


// use the return command
function returnsStringValue()
{
  return '<br />Returns String Value';
}

echo returnsStringValue();

function  returnsVariableValue()
{
  $value = '<br />Returns Variable Value';
  return $value;
}

echo returnsVariableValue();
