<?php
echo '1) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo '<br>';
// Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su 
// failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu 
// kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju 
// fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų 
// juodas.
if (isset($_GET['color'])) {
    $color = 'red';
} else {
    $color = 'lightblue';
}
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';
?>

<body style="background-color: <?= $color ?>">
    <a style="color: black; background-color: white; text-decoration: none; padding: 5px 20px; border-radius: 5px;" href="http://localhost/BIT/ND7_WEB_Mechanika/index.php">1 Nuoroda</a>
    <a style="color: black; background-color: white; text-decoration: none; padding: 5px 20px; border-radius: 5px;" href="http://localhost/BIT/ND7_WEB_Mechanika/index.php?color=1">2 Nuoroda GET</a>
</body>

<?php
echo '<br>';
echo '<br>';
echo '2) ----------------------------------------------------------------------------------------------------';
echo '<br>';
