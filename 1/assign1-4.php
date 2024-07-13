<?php

// Assignment Operators
echo "Assignment Operators:<br>";
$a = 10;
$b = 20;
echo "Value of a: $a, Value of b: $b<br>";
$a += $b; 
echo "After a += b, Value of a: $a, Value of b: $b<br>";
$a -= $b;
echo "After a -= b, Value of a: $a, Value of b: $b<br>";
$a *= $b; 
echo "After a *= b, Value of a: $a, Value of b: $b<br>";
$a /= $b; 
echo "After a /= b, Value of a: $a, Value of b: $b<br>";
$a %= $b; 
echo "After a %= b, Value of a: $a, Value of b: $b<br>";

// Logical Operators
echo "<br>Logical Operators:<br>";
$a = true;
$b = false;
echo "Value of a: $a, Value of b: $b<br>";
echo "a AND b: ".($a && $b)."<br>";
echo "a OR b: ".($a || $b)."<br>"; 
echo "a XOR b: ".($a xor $b)."<br>"; 
echo "!a: ".!$a."<br>"; 
// Relational Operators
echo "<br>Relational Operators:<br>";
$a = 10;
$b = 20;
echo "Value of a: $a, Value of b: $b<br>";
echo "a == b: ".($a == $b)."<br>"; 
echo "a != b: ".($a != $b)."<br>"; 
echo "a === b: ".($a === $b)."<br>"; 
echo "a !== b: ".($a !== $b)."<br>";
echo "a > b: ".($a > $b)."<br>"; 
echo "a < b: ".($a < $b)."<br>"; 
echo "a >= b: ".($a >= $b)."<br>"; 
echo "a <= b: ".($a <= $b)."<br>"; 

// Type Operators
echo "<br>Type Operators:<br>";
$a = 10;
$b = "10";
echo "Value of a: $a, Value of b: $b<br>";
echo "gettype(a): ".gettype($a)."<br>";
echo "gettype(b): ".gettype($b)."<br>"; 
echo "is_int(a): ".is_int($a)."<br>"; 
echo "is_string(b): ".is_string($b)."<br>"; 
echo "isset(a): ".isset($a)."<br>"; 
echo "unset(a): "; unset($a); echo "isset(a): ".isset($a)."<br>"; 
?>