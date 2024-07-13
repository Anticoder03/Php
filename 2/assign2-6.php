<?php

// Original array
$array = array('apple', 'banana', 'orange', 'grape');
echo
// New item to insert
$newItem = 'mango';

// Position to insert the new item (0-based index)
$position = 2;

// Insert the new item at the specified position
array_splice($array, $position, 0, $newItem);

// Print the updated array
print_r($array);

?>