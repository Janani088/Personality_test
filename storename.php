<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $file = "usernames.txt"; // Name of the file where you want to store the names

  // Open the file in append mode
  $fp = fopen($file, "a");

  // Write the name to the file
  fwrite($fp, $name . "\n");

  // Close the file
  fclose($fp);
}
?>




