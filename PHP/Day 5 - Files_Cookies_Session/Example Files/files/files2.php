<?php
// Copy a file
$file = "files/movies.txt";
$copied_file = "copy.txt";
copy($file, $copied_file);

// Delete a file
unlink($file);
