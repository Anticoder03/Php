<?php

// Define the numbers for which we want to print the tables
$numbers = [2, 3, 4, 5];

// Loop through each number
foreach ($numbers as $number) {
    echo "<h2>Table of $number</h2>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>x</td>";
        echo "<td>$number</td>";
        echo "<td>=</td>";
        echo "<td>" . ($i * $number) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}

?>