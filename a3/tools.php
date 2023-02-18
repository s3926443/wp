<?php
session_start();

// Section 3.2 Assignmnet Background
//Debugging added to bottoms of index.php and booking.php
function debugModule()
{
  echo "<pre>";
  echo 'GET Contains:';
  print_r($_GET);
  echo 'POST Contains:';
  print_r($_POST);
  echo 'SESSION Contains:';
  print_r($_SESSION);
  echo "</pre>";
}

function printMyCode()
{
  $allLinesOfCode = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre id='myCode'><ol>";
  foreach ($allLinesOfCode as $oneLineOfCode) {
    echo "<li>" . rtrim(htmlentities($oneLineOfCode)) . "</li";
  }
  echo "</ol></pre>";
}

function php2js($arr, $arrName)
{
  $arrJSON = json_encode($arr, JSON_PRETTY_PRINT);
  echo <<<"CDATA"
  <script>
  /* Variable generated with Trev's handy php2js() function */
  var $arrName = $arrJSON;
  </script>
  CDATA;
}

/* Put your PHP functions and modules here.
Many will be provided in the teaching materials,
keep a look out for them!
*/

?>