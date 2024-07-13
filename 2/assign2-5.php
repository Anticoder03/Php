<!-- <?php

// original array
$array = array('apple', 'banana', 'cherry');

// items to add to the start of the array
$new_items = array('orange', 'grape', 'kiwi');

// use array_merge to add the new item to the start of the array
$array = array_merge($new_items, $array);

// print the updated array
print_r($array);

?>
 -->

 <?php

// Original array
$array = array('apple', 'banana', 'orange');

// New item to add
$newItem = 'grape';

// Add the new item to the start of the array
$array = array_merge(array($newItem), $array);

// Print the updated array
print_r($array);

?>
