<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>www.hamza.com|Task02</title>
</head>
<body>
   

<?php

function demonstrateOperators($a, $b) {
    echo "Arithmetic Operators:\n";
    echo"<br>";
    echo "Addition: " . ($a + $b) . "\n";
    echo"<br>";
    echo "Subtraction: " . ($a - $b) . "\n";
    echo"<br>";
    echo "Multiplication: " . ($a * $b) . "\n";
    echo"<br>";
    echo "Division: " . ($a / $b) . "\n";
    echo"<br>";
    echo "Modulus: " . ($a % $b) . "\n";
    echo"<br>";

    echo "Assignment Operators:\n";
    $c = $a;
    echo"<br>";
    echo "Simple Assignment: c = $c\n";
    $c += $b;
    echo"<br>";
    echo "Addition Assignment: c += $b (result: $c)\n";
    $c -= $b;
    echo"<br>";
    echo "Subtraction Assignment: c -= $b (result: $c)\n";
    $c *= $b;
    echo"<br>";
    echo "Multiplication Assignment: c *= $b (result: $c)\n";
    $c /= $b;
    echo"<br>";
    echo "Division Assignment: c /= $b (result: $c)\n";
    $c %= $b;
    echo"<br>";
    echo "Modulus Assignment: c %= $b (result: $c)\n";
    echo"<br>";

   
    echo "Comparison Operators:\n";
    echo"<br>";
    echo "Equal to: " . ($a == $b ? 'true' : 'false') . "\n";
    echo"<br>";
    echo "Identical to: " . ($a === $b ? 'true' : 'false') . "\n";
    echo"<br>";
    echo "Not equal to: " . ($a != $b ? 'true' : 'false') . "\n";
    echo"<br>";
    echo "Not identical to: " . ($a !== $b ? 'true' : 'false') . "\n";
    echo"<br>";
    echo "Greater than: " . ($a > $b ? 'true' : 'false') . "\n";
    echo"<br>";
    echo "Less than: " . ($a < $b ? 'true' : 'false') . "\n";
    echo"<br>";
    echo "Greater than or equal to: " . ($a >= $b ? 'true' : 'false') . "\n";
    echo"<br>";
    echo "Less than or equal to: " . ($a <= $b ? 'true' : 'false') . "\n";
    echo"<br>";

    echo "Logical Operators:\n";
    echo"<br>";
    echo "Logical AND: " . ($a && $b ? 'true' : 'false') . "\n";
    echo"<br>";
    echo "Logical OR: " . ($a || $b ? 'true' : 'false') . "\n";
    echo"<br>";
    echo "Logical NOT for a: " . (!$a ? 'true' : 'false') . "\n";
    echo"<br>";
    echo "Logical NOT for b: " . (!$b ? 'true' : 'false') . "\n";
    echo"<br>";

    echo "Increment Operator:\n";
    echo"<br>";
    echo "Original value of a: $a\n";
    $a++;
    echo"<br>";
    echo "After incrementing: $a\n";
    echo"<br>";

    echo "Decrement Operator:\n";
    echo"<br>";
    echo "Original value of a: $a\n";
    $a--;
    echo"<br>";
    echo "After decrementing: $a\n";
    echo"<br>";
}
function demonstrateStringOperators($str1, $str2) {
    echo"<br>";
    echo "String Concatenation Operator:\n";
    echo"<br>";
    echo "Concatenating '$str1' and '$str2': " . $str1 . $str2 . "\n";

    echo"<br>";
    echo "Concatenating Assignment Operator:\n";
    $str1 .= $str2;
    echo"<br>";
    echo "After concatenating '$str2' to '$str1': $str1\n";
}

function demonstrateArrayOperators($arr1, $arr2) {
    echo"<br>";
    echo "Array Union Operator:\n";
    $union = $arr1 + $arr2;
    print_r($union);
    echo"<br>";
    echo "\n";
    echo"<br>";

    echo"<br>";
    echo "Array Equality\n";
    $eq = $arr1 == $arr2;
    print_r($eq);
    echo"<br>";
    echo "\n";

    echo"<br>";
    echo "Array Identity\n";
    $eq = $arr1 === $arr2;
    print_r($eq);
    echo"<br>";
    echo "\n";
    echo"<br>";
    
    echo "Array Inequality\n";
    $eq = $arr1 != $arr2;
    print_r($eq);
    echo"<br>";
    echo "\n";
    echo"<br>";
    
    echo "Array Inequality\n";
    $eq = $arr1 <> $arr2;
    print_r($eq);
    echo"<br>";
    echo "\n";

    echo"<br>";
    echo "Array Non-Identity\n";
    $eq = $arr1 !== $arr2;
    print_r($eq);
    echo"<br>";
    echo "\n";
    
}

function demonstrateConditionalAssignmentOperators($a, $b) {
    echo"<br>";
    echo "Conditional Assignment Operator (Ternary Operator):\n";
    $max = ($a > $b) ? $a : $b;
    echo"<br>";
    echo "Maximum value between $a and $b is: $max\n";
    
    echo"<br>";
    echo "Conditional Assignment Operator (NULL coalescing):\n";
    $max = ($a > $b) ?? ($a == $b);
    echo"<br>";
    echo "Maximum value between $a and $b is: $max\n";
}


$a = 5;
$b = 3;
demonstrateOperators($a, $b);
$str1 = "Hello";
$str2 = "World";
demonstrateStringOperators($str1, $str2);

$arr1 = array(1, 2, 3);
$arr2 = array(4, 5, 6);
demonstrateArrayOperators($arr1, $arr2);

$a = 5;
$b = 3;
demonstrateConditionalAssignmentOperators($a, $b);

?>

    
</body>
</html>