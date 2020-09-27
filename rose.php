<?php
echo '8) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo '<br>';
if (!isset($_SERVER['HTTP_REFERER'])) {
    header('Location: http://localhost/BIT/ND7_WEB_Mechanika/pink.php');
    die();
}

?>

<body style="background-color: #C02E4C">
</body>