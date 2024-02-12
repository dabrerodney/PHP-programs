<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 20;
    $c = 30;

    if($a>$b && $a>$c)
    {
        echo"The largest no is" .$a;
    }if($b>$a && $b>$c)
    {
        echo"The largest no is" .$b;
    }else{
        echo"The largest no is" .$c;
    }
    ?>
</body>
</html>