<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SantiDev|Practical4</title>
</head>
<body>
    <h1>Practical 4</h1>
    <h2>Exercise 1</h2>

    <!--Choice one element and send the choice-->
    <form action="" method="POST">
        <label> <input type="submit" name="player_choice" value="ROCK"></label>
        <label> <input type="submit" name="player_choice" value="SCISSOR"></label>
        <label> <input type="submit" name="player_choice" value="PAPER"></label>
    </form>

    <P>Current game status</P>
    <p>Your choice</p>
    <p>Computer choice</p>
    <p>Total Throws</p>
    <p>Wins</p>
    <p>Losses</p>
    <p>Draws</p>
    <!--receive the choice sent before-->
    <form action="" method="GET">
        <input type="submit" value="RESET COUNT">
    </form>

    <?php
        //set initial variables
        $throwcount = 0;
        $wincount = 0;
        $losscount = 0;
        $drawcount = 0;
        $winlossdraw = "No games played yet";
        $playerthrow = "N/A";
        $computerthrow = "N/A";
    ?>

        <p>CURRENT GAME STATUS: <?php echo $winlossdraw; ?></p>

        <p>You threw: <?php echo $playerthrow; ?></p>

        <p>Computer threw: <?php echo $computerthrow; ?></p>

        <p>Total Throws: <?php echo $throwcount; ?></p>

        <p>Wins: <?php echo $wincount; ?></p>

        <p>Losses: <?php echo $losscount; ?></p>

        <p>Draws: <?php echo $drawcount; ?></p>
</body>
</html>