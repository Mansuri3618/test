<?php

$players = array("Dhni"=>"07", "Smith"=>"49", "Warner"=>"31", "Rohit"=>"45");

ksort($players);

foreach($players as $key => $value) {
	
echo "<table border=1>";
	echo "<th>Key</th>";
	echo "<th>value</th>";
	echo "<br>";
	echo "<tr>";
	echo "<td>".$key;
	echo "<td>".$value;
	echo "</tr>";
	echo "</table>";
}
?>
