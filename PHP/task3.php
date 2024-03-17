<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.hamza.com|Task03</title>
</head>
<body>
    <h2>Factorial Calculator</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Enter a number:
    <input type="number" name="number" required>
    <input type="submit" name="submit" value="Calculate Factorial">
</form>
    <?php
    function factorial($n){
        if($n <0){
            echo"Input number cannot be negative.Exiting program.\n";
            exit();
        }

        $factorial = 1;
        while($n>1){
            $factorial *= $n;
            $n--;
        }

        return $factorial;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input_number = $_POST["number"];

        if ($input_number >= 0) {
            $result = factorial($input_number);
            echo "Factorial of $input_number is: $result\n";
        } else {
            echo "Invalid input: Input number cannot be negative.\n";
        }
    }
    ?>
    
</body>
</html>
<!-- why while -->
<!-- Dynamic nature of factorial calculation -->
<!-- Efficiency
why other not suitable
For loop: For loops are generally used when the number of iterations is known beforehand. However, in the case of factorial calculation, the number of iterations depends on the value of the input number, which may change dynamically. Therefore, a while loop is more suitable for this scenario.

Do-while loop: Do-while loops are used when you want to execute the loop body at least once before checking the loop condition. This behavior is not required for factorial calculation, where we want to start the loop from the given number and decrement until reaching 1. Therefore, a do-while loop would add unnecessary complexity without any benefit. -->