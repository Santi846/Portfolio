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
    <h1>Exercise 1</h1>
    <h3>Proposal:</h3>
    <p>Using loop structures 'while' make the following sequence:</p>
    <h4>Loop Structure 'While'</h4>
    <h5>First Secuence</h5>
    <h6>Problem</h6>
        <div class="problem">
        <p>1 3 5 7 10 13 15 17 19</p>
        </div>
    <h6>Solution</h6>
    <div class="solving">
    <P>Output</P>
        <?php 
        $number = 1;
        while ($number <= 19) {
            echo $number." ";
            $number += 2 ;
        }
        ?>
    </div>
    <h5>Second Secuence</h5>
    <h6>Problem</h6>
    <div class="problem">
        <p>0 5 10 15 20 25 30 35 40 45 50 55 60 65 70 75 80 85 90 95 100 105 110 115 120</p>
    </div>
    <h6>Solution</h6>
    <P>Output</P>
    <div class="solving">
        <?php 
        $number2 = 0;
        while ($number2 <= 120) {
            echo $number2." ";
            $number2 += 5 ;
        }
        ?>
    </div>
    <h5>Third Secuence</h5>
    <h6>Problem</h6>
    <div class="problem">
        <p>1 8 15 22 29 36 43 50 57 50 43 36 29 22 15 8 1</p>
    </div>
    <h6>Solution</h6>
    <P>Output</P>
    <div class="solving">
        <?php 
        $number3 = 1;
            while ($number3 <= 50) {
                echo $number3." ";
                $number3 += 7 ;
            }
            while ($number3 >= 1) {
                echo $number3." ";
                $number3 -= 7 ;
            }
        ?>  
    </div>
    <h5>Fourth Secuence</h5>
    <h6>Problem</h6>
    <div class="problem">
        <dl>
        <dt>****</dt>
        <dt>***</dt>
        <dt>**</dt>
        <dt>*</dt>
        <dt>**</dt>
        <dt>***</dt>
        <dt>****</dt>
        </dl>
    </div>
    <h6>Solution</h6>
    <P>Output</P>
    <div class="solving">
    <?php 
        $word = array('****','***','**','*','**','***','****');
        $i = 0;
        while ($i < count($word)) {
            echo $word[$i].'<br>';
            $i ++;
        }
        ?>  
    </div>
</body>
</html> 