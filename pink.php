<?php
echo '8) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo '<br>';
if (isset($_POST['post'])) {
    header('Location: http://localhost/BIT/ND7_WEB_Mechanika/rose.php');
    die();
}

?>

<body style="background-color: pink">
    <form action="" method="post">
        <button name="post" value="pink" type="submit" style="color: black; background-color: white; padding: 5px 20px; border-radius: 5px; border: 1px solid black;">GO TO ROSE</button>
    </form>
</body>