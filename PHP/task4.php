<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.hamza.com|Task04</title>
</head>
<body>
<h2>Fibonacci Calculator</h2>
    <?php
        echo"<h2>Fibonacci Calculator using while loop</h2>";
    $a =0;
    echo"$a ";
    $b =1;
    echo"$b ";
    $c= $a+$b;
    echo"$c ";
    $sum = $a+$b+$c;
    while($c <1000){
        $a=$b;
        $b=$c;
        $c=$a+$b;
        $sum = $c;
        echo"$c ";
    }
    echo"<h2>Fibonacci Calculator using for loop</h2> ";
    $a =1;
    echo"$a ";
    $b =1;
    echo"$b ";
    $c= $a+$b;
    echo"$c ";
    $sum = $a+$b+$c;
    for( ;$c <1000;){
        $a=$b;
        $b=$c;
        $c=$a+$b;
        $sum = $c;
        echo"$c ";
    }
    echo"<h2>Fibonacci sum divisible by 3</h2> <br> ";
    $div = $sum%3 ? "yes":"no";
    echo($div);
    echo"<h2>Fibonacci sum divisible by 5</h2> <br> ";
    $div = $sum%5 ? "yes":"no";
    echo($div);
    echo"<h2>Fibonacci sum divisible by 7</h2> <br> ";
    $div = $sum%7 ? "yes":"no";
    echo($div);
    ?>
    <!-- while loop is better efficient no boilerplating and easy to use -->
</body>
</html>