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




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate and sanitize the input
  if (isset($_POST['name'])) {
    $name = htmlspecialchars(filter_var($_POST["name"], FILTER_SANITIZE_STRING));

    // Set the file permissions
    $file = "usernames.txt";
    chmod($file, 0600);

    // Open the file in append mode
    $fp = fopen($file, "a");

    // Write the name to the file
    fwrite($fp, $name . "\n");

    // Close the file
    fclose($fp);

    // Send a success response
    http_response_code(200);
    echo "Name stored successfully!";
  } else {
    // Send a bad request response if the input is invalid
    http_response_code(400);
    echo "Invalid input!";
  }
}
?>
