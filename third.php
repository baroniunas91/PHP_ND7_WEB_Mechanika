<?php
echo '3) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo '<br>';
// Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku 
// GET metodu formoje.
if (isset($_GET['color'])) {
    $color = $_GET['color'];
}

// echo '<pre>';
// print_r($_GET);
// echo '</pre>';
?>

<body style="background-color: <?= $color ?? 'none' ?>">
    <form action="" method="get">
        <label>Įveskite spalvą:</label>
        <br>
        <input type="text" name="color">
        <button href="http://localhost/BIT/ND7_WEB_Mechanika/third.php" type="submit" style="color: black; background-color: white; padding: 5px 20px; border-radius: 5px; border: 1px solid black;">Nustatyti</button>
    </form>
</body>