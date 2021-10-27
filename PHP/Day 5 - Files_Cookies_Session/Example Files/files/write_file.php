<?php

/*
  Open the file in writing mode
  If it doesn't exists, it'll create one
*/
$file_handle = fopen("test_file.txt", "a");
$file_content = "Helloooooo, how r u ?";

// Write inside the file
fwrite($file_handle, $file_content);
// Close the file
fclose($file_handle);

echo "File created !";
