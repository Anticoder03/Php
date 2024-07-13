<?php

echo "Example 1: Loose comparison (==)<br>";
$a = 5;
$b = "5";
if ($a == $b) {
    echo "$a is equal to $b<br>";
} else {
    echo "$a is equal not to $b<br>";
}

echo "<br>Example 2: Strict comparison (===)<br>";
$a = 5;
$b = "5";
if ($a === $b) {
    echo "$a is equal to $b<br>";
} else {
    echo "$a is not equal to $b<br>";
}

?>