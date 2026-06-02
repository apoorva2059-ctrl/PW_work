<?php

function sanitizeInput($data) 
{
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}

function validateInput($data) 
{
  if (empty($data)) 
  {
    return "Invalid";
  }
  else
  {
    return "Valid Input";
  }
}

?>
