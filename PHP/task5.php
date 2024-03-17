<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.hamza.com|Task05</title>
</head>
<body>
    <?php
    $a = array(5,4,3,2,1,6,10,9,7,8);
    function findelement($arr,$ele){
        if(empty($arr)){
            return false;
        }
       $first = array_shift($arr);
       
       if($first === $ele){
        return true;
       }
      return findelement($arr,$ele);
    }

    $found = findelement($a,2);
    if($found){
        echo"<h1>ELEMENT EXIST</h1>";
    }
    else{
        echo"<h1>ELEMENT DOESNOT EXIST</h1>";
    }


    ?>
    
</body>
</html>