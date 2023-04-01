<?php

$result = $_POST['result'];


$file = fopen("mbti_results.txt", "a");
fwrite($file, $result . "\n");
fclose($file);

?>
