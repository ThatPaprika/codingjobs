<?php

/*
		1. Create a PHP script that will display the contents of a message.txt file, 
		located in the same folder as this script.

		2. View the contents of the transform_to_table.txt file in an HTML table.
	*/

$daFile = fopen('message.txt', 'r');
echo fgets($daFile);

echo '<hr>';

$daHTMLFile = fopen('transform_to_table.txt', 'r');

?>
<table border="1">
	<tr>
		<th>LOGS</th>
	</tr>
	<?php
	while (!feof($daHTMLFile)) {
		$line = fgets($daHTMLFile);
		echo '<tr><td>' . $line . '</td></tr>';
	}
	fclose($daHTMLFile);
	?>
</table>