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
    <h1>Exercise 2</h1>
    <h3>Proposal:</h3>
    <p>Using for loop strcuctures make the following table of powers:</p>
    <div>
    <ol class="problem">
        <li>1 power until 10</li>
        <li>2 power until 1024</li>
        <li>3 power until 59049</li>
        <li>4 power until 1048576</li>
        <li>5 power until 9765625</li>
        <li>6 power until 60466176</li>
        <li>7 power until 282475249</li>
        <li>8 power until 1073741824</li>
        <li>9 power until 3486784401</li>
        <li>10 power until 10000000000</li>
    </ol>
    </div>
    <h4>Loop Structure 'For'</h4>
    <table class="solving">
        <tr>
            <th>Powers</th>
        </tr>
        <tr>
            <td class="impares">
                <?php 
                for ($i=1; $i <=10 ; $i++) { 
                    echo $i.' ';
                }
                ?>
            </td>
        </tr>
        <tr>   
            <td class="pares">
            <?php 
                for ($i=2; $i <=1024 ; $i*=2) { 
                    echo $i.' ';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="impares">
                <?php 
                for ($i=3; $i <=59049 ; $i*=3) { 
                    echo $i.' ';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="pares">
            <?php 
                for ($i=4; $i <=1048576 ; $i*=4) { 
                    echo $i.' ';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="impares">
                <?php 
                for ($i=5; $i <=9765625 ; $i*=5) { 
                    echo $i.' ';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="pares">
            <?php 
                for ($i=6; $i <=60466176 ; $i*=6) { 
                    echo $i.' ';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="impares">
            <?php 
                for ($i=7; $i <=282475249 ; $i*=7) { 
                    echo $i.' ';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="pares">
            <?php 
                for ($i=8; $i <=1073741824 ; $i*=8) { 
                    echo $i.' ';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="impares">
            <?php 
                for ($i=9; $i <=3486784401 ; $i*=9) { 
                    echo $i.' ';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="pares">
            <?php 
                for ($i=10; $i <=10000000000 ; $i*=10) { 
                    echo $i.' ';
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html> 