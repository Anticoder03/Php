<?php 
$a = 5;   // 00000101
$b = 3;   // 00000011
$result = $a & $b;  // 00000001
echo $result,"<br>";  // Output: 1
$result = $a | $b;  // 00000111
echo $result,"<br>";  // Output: 7
$result = $a ^ $b;  // 00000110
echo $result,"<br>";  // Output: 6
$result = ~$a;  // 11111010
echo $result,"<br>";  // Output: -6
$result = $a << 1;  // 00001010
echo $result,"<br>";  // Output: 10
$result = $a >> 1;  // 00000010
echo $result,"<br>";  // Output: 2
echo "<br>String Operator <br>";
$str1 = "Ashish";
$str2 = "Prajapati";
echo "<br>Using . operator <br>";
echo $str1 . "  " . $str2;
echo "<br>Using == Operator "  . "<br>";
echo  var_dump($str1 == $str2);

echo "<br><br><br> Array Operator <br>";
echo "Array element access operator: []<br>";
$arr = array(1,2,3,4,5);
$arr2 = array(6,7,8,9,10);
echo "The 3rd index Value is: " .  $arr[2];

echo "<br>Array add Operator: + ";
$arr3 = $arr + $arr2;
var_dump($arr3);

?>