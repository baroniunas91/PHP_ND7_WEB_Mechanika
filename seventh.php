<?php
echo '7) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo '<br>';
// Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skirtingas formas- vieną GET 
// ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik tikrindami pačius 
// masyvus, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai 
// iš POST.
$color = 'none';
if (!empty($_GET)) {
    $color = 'green';
}
if (isset($_SERVER['HTTP_REFERER']) && (empty($_GET))) {
    $color = 'yellow';
}
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
if (!empty($_POST)) {
    // 7 uždavinio papildymas
    header('Location: http://localhost/BIT/ND7_WEB_Mechanika/seventh.php');
    die();
}

?>

<body style="background-color: <?= $color ?>">
    <form action="" method="get">
        <button name="get" value="green" type="submit" style="color: black; background-color: white; padding: 5px 20px; border-radius: 5px; border: 1px solid black;">GET</button>
    </form>
    <form action="" method="post">
        <button name="post" value="yellow" type="submit" style="color: black; background-color: white; padding: 5px 20px; border-radius: 5px; border: 1px solid black;">POST (REDIRECT)</button>
    </form>
</body>