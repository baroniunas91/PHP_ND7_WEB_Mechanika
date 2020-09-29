<?php
echo '11b) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo '<br>';
?>

<body style="background-color: #ebe534">
    <?php
    if (empty($_POST)) {
    ?>
        <form action="game_session.php" method="post">
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
        header("Location: http://localhost/BIT/ND7_WEB_Mechanika/game_session.php");
        die();
    }
    ?>
</body>