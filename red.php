<?php
echo '5) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo '<br>';
// Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save 
// (abu į save ne į kitą puslapį!). Padarykite taip, kad paspaudus ant  linko puslapis ne 
// tiesiog persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą 
// puslapį (iš raudono į mėlyną ir atvirkščiai).

// echo '<pre>';
// print_r($_GET);
// echo '</pre>';
?>

<body style="background-color: red">
    <form action="" method="get">
        <button name="a" href="http://localhost/BIT/ND7_WEB_Mechanika/red.php" type="submit" style="color: black; background-color: white; padding: 5px 20px; border-radius: 5px; border: 1px solid black;">Nuoroda į save</button>
    </form>
</body>

<?php
if (isset($_GET['a'])) {
    header('Location: http://localhost/BIT/ND7_WEB_Mechanika/blue.php');
    die();
}
