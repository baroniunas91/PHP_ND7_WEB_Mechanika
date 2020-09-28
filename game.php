<?php
echo '11) ----------------------------------------------------------------------------------------------------';
echo '<br>';
?>

<body style="background-color: #4287f5">
    <?php
    if (isset($_POST['p1Points'])) {
        if ($_POST['p1Points'] >= 30) {
            $player1 = $_POST['player1'];
            echo "Laimėtojas: $player1";
            echo '<br>';
            echo '<br>';
            echo '<a style="padding: 5px 15px; text-decoration:none; background-color: white; color: black;" href="http://localhost/BIT/ND7_WEB_Mechanika/eleventh.php">Žaisti iš naujo</a>';
            die();
        } else if ($_POST['p2Points'] >= 30) {
            $player2 = $_POST['player2'];
            echo "Laimėtojas: $player2";
            echo '<br>';
            echo '<br>';
            echo '<a style="padding: 5px 15px; text-decoration:none; background-color: white; color: black;" href="http://localhost/BIT/ND7_WEB_Mechanika/eleventh.php">Žaisti iš naujo</a>';
            die();
        }
    }

    $player1 = $_POST['player1'];
    $player2 = $_POST['player2'];
    $player1Points = $_POST['p1Points'] ?? 0;
    $player2Points = $_POST['p2Points'] ?? 0;
    $rand = rand(1, 6);
    ?>
    <p>Žaidėjų taškai:</p>
    <p><?= $player1 ?> - <?= $player1Points ?> taškai(-ų)</p>
    <p><?= $player2 ?> - <?= $player2Points ?> taškai(-ų)</p>
    <br>
    <?php
    echo "
        <form action=\"game2.php\" method=\"post\">
            <p>Kauliuką meta - $player1</p>
            <br>
            ";
    $player1Points += $rand;
    ?>
    <input type="hidden" name="player1" value="<?= $player1 ?>">
    <input type="hidden" name="player2" value="<?= $player2 ?>">
    <input type="hidden" name="p1Points" value="<?= $player1Points ?>">
    <input type="hidden" name="p2Points" value="<?= $player2Points ?>">
    <?php
    echo "
            <button name=\"submit\" value=\"1\" type=\"submit\">MESTI KAULIUKĄ</button>
        </form>
    ";
    if (isset($_GET['1'])) {
        header("Location: http://localhost/BIT/ND7_WEB_Mechanika/game2.php");
        die();
    }
    ?>
</body>