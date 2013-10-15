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
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "<tr>\n";
}
fclose($f);
echo "\n</table></body></html>";

?>