<?php 
$a = 5;   // 00000101
$b = 3;   // 00000011

// Bitwise AND (&)
$result = $a & $b;  // 00000001
echo $result;  // Output: 1

// Bitwise OR (|)
$result = $a | $b;  // 00000111
echo $result;  // Output: 7

// Bitwise XOR (^)
$result = $a ^ $b;  // 00000110
echo $result;  // Output: 6

// Bitwise NOT (~)
$result = ~$a;  // 11111010
echo $result;  // Output: -6

// Bitwise Left Shift (<<)
$result = $a << 1;  // 00001010
echo $result;  // Output: 10

// Bitwise Right Shift (>>)
$result = $a >> 1;  // 00000010
echo $result;  // Output: 2

?>