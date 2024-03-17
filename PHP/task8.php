<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.hamza.com|Task08</title>
</head>
<body>
<?php
echo"IF_ELSE STATEMENT<br>";
$age = 25;
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}

echo "SWITCH STATEMENT<br>";
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Today is Monday.<br>";
        break;
    case "Tuesday":
        echo "Today is Tuesday.<br>";
        break;
    default:
        echo "It's neither Monday nor Tuesday.<br>";
}

echo "WHILE LOOP<br>";
$count = 1;
while ($count <= 5) {
    echo "Count: $count<br>";
    $count++;
}

echo "FOR LOOP<br>";
echo "Even numbers from 2 to 10:<br>";
for ($i = 2; $i <= 10; $i += 2) {
    echo "$i ";
}
echo "<br>";

echo "FOR EACH LOOP<br>";
$colors = array("Red", "Green", "Blue");
echo "Colors:<br>";
foreach ($colors as $color) {
    echo "$color ";
}
echo "<br>";

echo "FUNCTION<br>";
function add($a, $b) {
    return $a + $b;
}

$result = add(3, 5);
echo "Result of addition: $result<br>";
?>

    
</body>
</html>