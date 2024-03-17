<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.hamza.com|Task06</title>
</head>

<body>
    <?php
    function findrootsusingswitch($a,$b,$c){
        $discriminat = ($b*$b)-(4*$a*$c);
        $roots = [];

        switch(true){
            case($discriminat > 0):
                $root1 = (-$b+sqrt($discriminat))/(2*$a) ;
                $root2 = (-$b-sqrt($discriminat))/(2*$a) ;
                $roots = array($root1,$root2);
                break;

            case($discriminat == 0):
                $root1 = (-$b)/(2*$a) ;
                $roots = array($root1);
                break;

            default:
                $realpart = (-$b)/(2*$a);
                $imaginarypart = (sqrt(abs($discriminat)))/(2*$a);
                $roots = array($realpart." + ".$imaginarypart."i",$realpart." - ".$imaginarypart."i");
                break; 
        }
        return $roots;
    }
    function findrootsusingif($a,$b,$c){
        $discriminat = ($b*$b)-(4*$a*$c);
        $roots = [];

        if($discriminat > 0){
            $root1 = (-$b+sqrt($discriminat))/(2*$a) ;
            $root2 = (-$b-sqrt($discriminat))/(2*$a) ;
            $roots = array($root1,$root2);
        }
        else if($discriminat == 0){
            $root1 = (-$b)/(2*$a) ;
            $roots = array($root1);
        }
        else{
            $realpart = (-$b)/(2*$a);
                $imaginarypart = (sqrt(abs($discriminat)))/(2*$a);
                $roots = array($realpart." + ".$imaginarypart."i",$realpart." - ".$imaginarypart."i");
        }
        return $roots;
    }

    $a=1;
    $b=-3;
    $c=2;

    $root=findrootsusingswitch($a,$b,$c);
    $roots = findrootsusingif($a,$b,$c);

    echo"<h1>Finding roots using swithc</h1>";
    echo "Roots of the quadratic equation $a*x^2 + $b*x + $c = 0 are: ";
    foreach ($roots as $root) {
    echo "$root ,";
    }

    echo "<h1>Finding roots using if-else</h1>";
    echo "Roots of the quadratic equation $a*x^2 + $b*x + $c = 0 are: ";
    foreach ($roots as $root) {
    echo "$root ,";
    }



     ?>
    <!-- // In terms of performance or clarity, both switch case and if else statements can be used interchangeably for this task. The choice between them mainly depends on personal preference and coding style conventions within a team. switch case might be preferred when there are multiple conditions to check against a single variable, whereas if else statements might be more readable for simpler conditions or when branching based on different variables. -->
</body>

</html>