<?php
echo '11) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo '<br>';
?>

<body style="background-color: #4287f5">
    <?php
    $player1Points = 0;
    $player2Points = 0;
    if (empty($_POST)) {
    ?>
        <form action="game.php" method="post">
            <label for="_1">Pirmas žaidėjas</label>
            <br>
            <input type="text" name="player1" id="_1">
            <br>
            <br>
            <label for="player2">Antras žaidėjas</label>
            <br>
            <input type="text" name="player2" id="2">
            <br>
            <br>
            <button type="submit">PRADĖTI</button>
        </form>
    <?php
    } else if (!empty($_POST)) {
        $player1 = $_POST['player1'];
        $player2 = $_POST['player2'];
        header("Location: http://localhost/BIT/ND7_WEB_Mechanika/game.php");
        die();
    }
    ?>
</body>