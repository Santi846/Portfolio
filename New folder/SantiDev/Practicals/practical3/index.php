<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SantiDev|Practical3</title>
</head>
<body>
    <h1>Random exercise</h1>
    <h2>Random elements inside an array</h2>
    <div>
    <?php
        //generate random elements

use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;

        for ($i = 0; $i < 100; $i++){
            $elements[] = rand(1, 100);
            }

        var_dump($elements);
        echo '<br>';
        //maxim value of 'elements' array
        echo(max($elements) . "<br>");
        //minimum value of 'elements' array
        echo(min($elements) . "<br>");
        //average value of 'elements' array
        echo (array_sum($elements)/ count($elements)). "<br>";
        // order from min to max value
        asort($elements);
        var_dump($elements);

    ?>
    </div>
    <div>
    <?php
        

        
    ?>
    </div>
</body>
</html>