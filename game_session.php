<?php
session_start();
echo '11b) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo '<br>';
?>

<body style="background-color: #ebe534">
    <?php
    if ((isset($_POST['player1']) || isset($_POST['player2'])) || isset($_SESSION['p1']) || isset($_SESSION['p2'])) {
        if (!(isset($_SESSION['p1Points'])) && !(isset($_SESSION['p2Points']))) {
            $player1 = $_POST['player1'];
            $player2 = $_POST['player2'];
            $player1Points = 0;
            $player2Points = 0;

            $_SESSION['p1'] = $player1;
            $_SESSION['p2'] = $player2;
            $_SESSION['p1Points'] = $player1Points;
            $_SESSION['p2Points'] = $player2Points;
            $_SESSION['row'] = true;
    ?>
            <p><?= $_SESSION['p1'] ?>: <?= $_SESSION['p1Points'] ?> taškai(-ų)</p>
            <p><?= $_SESSION['p2'] ?>: <?= $_SESSION['p2Points'] ?> taškai(-ų)</p>
            <br>
            <p>Kauliuką meta: <?= $_SESSION['p1'] ?></p>
            <form action="" method="get">
                <button name="b" value="1" type="submit">MESTI KAULIUKĄ</button>
            </form>
            <form action="" method="get">
                <button name="end" value="1" type="submit">BAIGTI ŽAIDIMĄ</button>
            </form>
            <?php
            if (isset($_GET['end'])) {
                session_unset();
                header("Location: http://localhost/BIT/ND7_WEB_Mechanika/eleventh_session.php");
                die();
            }
            if (isset($_GET['b'])) {
                $_SESSION['row'] = false;
                $_SESSION['p1Points'] += rand(1, 6);
                header("Location: http://localhost/BIT/ND7_WEB_Mechanika/game_session.php");
                die();
            }
        } else {
            if ($_SESSION['row']) {
                if (isset($_GET['end'])) {
                    session_unset();
                    header("Location: http://localhost/BIT/ND7_WEB_Mechanika/eleventh_session.php");
                    die();
                }
                if (isset($_GET['b'])) {
                    $_SESSION['p1Points'] += rand(1, 6);
                    if ($_SESSION['p1Points'] >= 30) {
                        echo 'Laimėtojas ' . $_SESSION['p1'];
                        session_unset();
                        echo '<br>';
                        echo '<br>';
                        echo '<a style="padding: 5px 15px; text-decoration:none; background-color: white; color: black;" href="http://localhost/BIT/ND7_WEB_Mechanika/eleventh_session.php">Žaisti dar kartą</a>';
                        die();
                    }
                    $_SESSION['row'] = false;
                    header("Location: http://localhost/BIT/ND7_WEB_Mechanika/game_session.php");
                    die();
                }
            ?>
                <p><?= $_SESSION['p1'] ?>: <?= $_SESSION['p1Points'] ?> taškai(-ų)</p>
                <p><?= $_SESSION['p2'] ?>: <?= $_SESSION['p2Points'] ?> taškai(-ų)</p>
                <br>
                <p>Kauliuką meta: <?= $_SESSION['p1'] ?></p>
                <form action="" method="get">
                    <button name="b" value="1" type="submit">MESTI KAULIUKĄ</button>
                </form>
                <form action="" method="get">
                    <button name="end" value="1" type="submit">BAIGTI ŽAIDIMĄ</button>
                </form>
            <?php

            } else {
                if (isset($_GET['end'])) {
                    session_unset();
                    header("Location: http://localhost/BIT/ND7_WEB_Mechanika/eleventh_session.php");
                    die();
                }
                if (isset($_GET['b'])) {
                    $_SESSION['p2Points'] += rand(1, 6);
                    if ($_SESSION['p2Points'] >= 30) {
                        echo 'Laimėtojas ' . $_SESSION['p2'];
                        session_unset();
                        echo '<br>';
                        echo '<br>';
                        echo '<a style="padding: 5px 15px; text-decoration:none; background-color: white; color: black;" href="http://localhost/BIT/ND7_WEB_Mechanika/eleventh_session.php">Žaisti dar kartą</a>';
                        die();
                    }
                    $_SESSION['row'] = true;
                    header("Location: http://localhost/BIT/ND7_WEB_Mechanika/game_session.php");
                    die();
                }
            ?>
                <p><?= $_SESSION['p1'] ?>: <?= $_SESSION['p1Points'] ?> taškai(-ų)</p>
                <p><?= $_SESSION['p2'] ?>: <?= $_SESSION['p2Points'] ?> taškai(-ų)</p>
                <br>
                <p>Kauliuką meta: <?= $_SESSION['p2'] ?></p>
                <form action="" method="get">
                    <button name="b" value="1" type="submit">MESTI KAULIUKĄ</button>
                </form>
                <form action="" method="get">
                    <button name="end" value="1" type="submit">BAIGTI ŽAIDIMĄ</button>
                </form>
    <?php

            }
        }
    } else {
        echo 'Neįvesti žaidėjai';
        echo '<br>';
        echo '<br>';
        echo '<a style="padding: 5px 15px; text-decoration:none; background-color: white; color: black;" href="http://localhost/BIT/ND7_WEB_Mechanika/eleventh_session.php">Grįžti ir įvesti žaidėjus</a>';
    }
    ?>
</body>