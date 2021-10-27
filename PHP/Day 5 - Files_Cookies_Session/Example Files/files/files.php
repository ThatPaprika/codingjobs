<?php
/*
// Read a file (but no nice format style)
$file_content = readfile("files/movies.txt");
echo $file_content;

// Another function to read a file.
$file_content = file_get_contents("files/movies.txt");
echo $file_content;
*/

// Check if a file exists
if (file_exists("files/movies.txt")) {
  // Fopen - Open a file
  $file_handle = fopen("files/movies.txt", "r");

  // Loop until you reach the end of file (eof)
  while (!feof($file_handle)) {
    // Retrieve the current line and move on to the next
    $current_line = fgets($file_handle);
    echo $current_line . "<br>";
  }

  // Close the open file
  fclose($file_handle);
} else
  echo "File doestn't exist";
