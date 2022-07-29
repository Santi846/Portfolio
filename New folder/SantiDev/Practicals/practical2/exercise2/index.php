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
    <title>SantiDev|Practical2</title>
</head>
<body>
    <header>
        <a href="../../index.php">Practicals</a>
    </header>
    <h1>Exercise 2</h1>
    <h3>Proposal:</h3>
    <p>Using loop structures 'for' show the multiplication tables from 1 to 12, by the following way:</p>
    <img src="proposal.jpg" alt="proposal">
    <h6>Output</h6>
    <table id="Numbers_1_to_1000">
        <tr id="tittle">
            <th>Prime numbers and no prime numbers</th>
        </tr>
        <tr id="numbers_table">
            <td>
                <table id="numbers">
                    <tr>
                        <td id="1">
                            <?php
                                for ($i=1; $i <=111 ; $i+=10) { 
                                    echo $i.'<br>';
                                }
                            ?>
                        </td>
                        <td id="2">
                            <?php
                                for ($i=2; $i <=112 ; $i+=10) { 
                                    echo $i.'<br>';
                                }
                            ?>
                        </td>
                        <td id="3">
                            <?php
                                for ($i=3; $i <=113 ; $i+=10) { 
                                    echo $i.'<br>';
                                }
                            ?>
                        </td>
                        <td id="4">
                            <?php
                                for ($i=4; $i <=114 ; $i+=10) { 
                                    echo $i.'<br>';
                                }
                            ?>
                        </td>
                        <td id="5">
                            <?php
                                for ($i=5; $i <=115 ; $i+=10) { 
                                    echo $i.'<br>';
                                }
                            ?>
                        </td>
                        <td id="6">
                            <?php
                                for ($i=6; $i <=116 ; $i+=10) { 
                                    echo $i.'<br>';
                                }
                            ?>
                        </td>
                        <td id="7">
                            <?php
                                for ($i=7; $i <=117 ; $i+=10) { 
                                    echo $i.'<br>';
                                }
                            ?>
                        </td>
                        <td id="8">
                            <?php
                                for ($i=8; $i <=118 ; $i+=10) { 
                                    echo $i.'<br>';
                                }
                            ?>
                        </td>
                        <td id="9">
                            <?php
                                for ($i=9; $i <=119 ; $i+=10) { 
                                    echo $i.'<br>';
                                }
                            ?>
                        </td>
                        <td id="10">
                            <?php
                                for ($i=10; $i <=120 ; $i+=10) { 
                                    echo $i.'<br>';
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html> 