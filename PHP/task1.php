<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.hamza.com|Task01</title>
</head>
<body>
<?php
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }

$integer_var = 10;
$float_var = 3.14;
$string_var = "Hello, world!";
$bool_var = true;
$array_var = array(1, 2, 3, 4, 5);
$nul = null;

$ii=0;
while($ii<=5)
{
echo "Integer Variable: $integer_var\n";
var_dump($integer_var);
echo("<br>");
echo "Floating-Point Variable: $float_var\n";
var_dump($float_var);
echo("<br>");
echo "String Variable: $string_var\n";
var_dump($string_var);
echo("<br>");
echo "Boolean Variable: " . ($bool_var ? "true" : "false") . "\n";
var_dump($bool_var);
echo("<br>");
echo "Null Variable: $nul";
var_dump($nul);
echo("<br>");
$myCar = new Car("red", "Volvo");
var_dump($myCar);
echo("<br>");
echo "Array Variable:\n";
for ($i = 0; $i < count($array_var); $i++) {
    echo $array_var[$i] . "\n";
    var_dump($array_var[$i]);
    echo("<br>");
}
$ii++;
}
?>

</body>
</html>