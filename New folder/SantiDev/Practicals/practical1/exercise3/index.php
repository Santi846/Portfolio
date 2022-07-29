<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../assets/css/stylesE1.css">
    <title>SantiDev|Practical1</title>
</head>
<body>
    <header>
        <a href="../../index.php">Practicals</a>
    </header>
    <h1>Exercise 3</h1>
    <h3>Proposal:</h3>
    <p>Using for loop strcuctures make the following table of powers:</p>
    <dl>    
            <dt class = "circle">Use the functions</dt>
            <dt class = "empty">Sin()</dt>
            <dd class="little_square">sine of an angle</dd>
            <dt class="empty">cos()</dt>
            <dd class="little_square">cosine of an angle</dd>
        </dl>
         
    <p>These functions works in radians, therefore we must use the function:</p>
    <dl>    
            <dt class = "empty">dec2rad()</dt>
            <dd class="little_square">decimal a radianes</dd>
    </dl>
    <h4>Proposal</h4> 
    <img src="proposal.jpg" alt="proposal">
    <h4>Output</h4>
    <h5>Sine and Cosine table</h5>
    <table id="sen_cos">
        <tr>
            <th>Value</th>
            <th>Sine</th>
            <th>Cosine</th>
        </tr>
        <tr>
            <th>
                <?php
                echo "0";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(0)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(0)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "15";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(15)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(15)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "30";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(30)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(30)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "45";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(45)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(45)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "60";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(60)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(60)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "75";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(75)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(75)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "90";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(90)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(90)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "105";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(105)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(105)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "120";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(120)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(120)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "135";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(135)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(135)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "150";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(150)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(150)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "165";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(165)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(165)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "180";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(180)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(180)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "195";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(195)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(195)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "210";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(210)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(210)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "225";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(225)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(225)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "240";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(240)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(240)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "255";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(255)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(255)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "270";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(270)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(270)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "285";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(285)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(285)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "300";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(300)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(300)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "315";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(315)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(315)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "330";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(330)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(330)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "345";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(345)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(345)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
        <tr>
            <th>
                <?php
                echo "360";
                ?>
            </th>
            <th>
            <?php

            $sine = sin(deg2rad(360)); 
            echo $sine;
                ?>
            </th>
            <th>
            <?php

            $cosine = cos(deg2rad(360)); 
            echo $cosine;
           ?>  
            </th>
        </tr>
    </table>
</body>
</html>