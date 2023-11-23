<!DOCTYPE html>
<html lang="fr">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Game</title>
    <link rel="stylesheet" href="../styles/styleGame.css"> 
</head>
<body>
    <div class="back-to-menu">
        <a href="index.php" title="Back to menu">
            <img src="../images/back.png">
        </a>
    </div>

    <div class="container">
        <button id="lancerDe" class="dice-btn">Throw Dice</button>
        <div id="diceContainer" class="dice-container">
            <img id="dice" src="../images/die1.png" alt="Dé">
        </div>
    </div>
    <script src="../game.js"></script>
</body>
</html>
