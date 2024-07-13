<?php

// Define the two arrays to merge
$array1 = array('a' => 1, 'b' => 2, 'c' => 3);
$array2 = array('d' => 4, 'e' => 5, 'f' => 6);

// Merge the two arrays using array_merge()
$mergedArray = array_merge($array1, $array2);

// Print the merged array
print_r($mergedArray);

?>