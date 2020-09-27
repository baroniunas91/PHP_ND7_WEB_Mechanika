<?php
echo '2) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo 'Į URL eilutę įrašykite: ?color=ff1234';
echo '<br>';
echo '<br>';
// Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, 
// o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu 
// (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.
if (isset($_GET['color'])) {
    $color = $_GET['color'];
}
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';
?>

<body style="background-color: <?= $color ?? 'none' ?>">
    <a style="color: black; background-color: white; text-decoration: none; padding: 5px 20px; border-radius: 5px; border: 1px solid black;" href="http://localhost/BIT/ND7_WEB_Mechanika/second.php">Nuoroda</a>
</body>