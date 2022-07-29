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
    <h1>Exercise 1</h1>
    <h3>Proposal:</h3>
    <p>Using loop structures 'for' show the multiplication tables from 1 to 12, by the following way:</p>
    <img src="proposal.jpg" alt="proposal">
    <h6>Output</h6>
    <table id="multiplication_table">
        <tr id="title">
            <th>
                Multiplication table
            </th>
        </tr>
        <tr id="tables">
            <td>
                <table id="tables_1_to_4">
                    <tr>
                        <td id="_1_table">
                            <table>
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "1".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td id="_2_table">
                        <table>
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "2".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=2; $i <=24 ; $i+=2) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td id="_3_table">
                        <table>
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "3".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=3; $i <=36 ; $i+=3) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td id="_4_table">
                        <table>
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "4".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=4; $i <=48 ; $i+=4) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                    <table id="5_to_8">
                    <tr>
                    <td id="_5_table">
                            <table>
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "5".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=5; $i <=60 ; $i+=5) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td id="_6_table">
                        <table>
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "6".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=6; $i <=72 ; $i+=6) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td id="_7_table">
                        <table>
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "7".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=7; $i <=84 ; $i+=7) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td id="_8_table">
                        
                        <table >
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "8".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=8; $i <=96 ; $i+=8) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                    </table>
                    </table>
                    <table id="9_to_12">
                    <tr>
                                <td id="_9_table">
                            <table>
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "9".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=9; $i <=108 ; $i+=9) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td id="_10_table">
                        <table>
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "10".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=10; $i <=120 ; $i+=10) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td id="_11_table">
                        <table>
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "11".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=11; $i <=132 ; $i+=11) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td id="_12_table">
                        <table>
                                <tr>
                                    <td id="1">
                                        <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="2">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "X".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="3">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "12".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="4">
                                    <?php
                                            for ($i=1; $i <=12 ; $i++) { 
                                                echo "=".'<br>';
                                            }
                                        ?>
                                    </td>
                                    <td id="5">
                                    <?php
                                            for ($i=12; $i <=144 ; $i+=12) { 
                                                echo $i.'<br>';
                                            }
                                        ?>
                                    </td>
                                </tr>                        
                    </table>    
                            </table>
                        </td>
                    </tr>
                
            </td>
        </tr>
    </table>
</body>
</html> 