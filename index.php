<!DOCTYPE html>
<html>
<head>
<link href="stylesheets/styles.css" rel="stylesheet" />
</head>
<body>
<?php
echo "<table>\n\n";
$f = fopen("market_research.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
        	if (substr($cell, 0,4) == "http") {
        		echo "<td>" ."<a href='" . $cell . "'>Go!</a>";
        	} else
                echo "<td>" . htmlspecialchars($cell);
        }
        echo "<tr>\n";
}
fclose($f);
echo "\n</table></body></html>";

?>