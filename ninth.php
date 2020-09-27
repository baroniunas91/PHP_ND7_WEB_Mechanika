<?php
echo '9) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo '<br>';
$letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
$color = isset($_POST['post']) ? 'white' : 'black';
?>

<body style="background-color: <?= $color ?>">
    <?php
    if (isset($_POST['post'])) {
        $length = count($_POST) - 1;
        echo "Pažymėtų checkbox'ų yra $length";
        echo '<br>';
    } else {
        echo "
    <form action=\"\" method=\"post\">
        <button name=\"post\" value=\"white\" type=\"submit\" style=\"color: black; background-color: white; padding: 5px 20px; border-radius: 5px; border: 1px solid black;\">POST SUBMIT</button>
        <br>";

        foreach (range(0, rand(2, 9)) as $key) {
            $letter = $letters[$key];
            echo '<br>';
            echo "<label style=\"color: white;\"for=\"$letter\">$letter</label>";
            echo "<input type=\"checkbox\" name=\"$letter\" id=\"$letter\">";
            echo '<br>';
        }

        echo "
    </form>
    ";
    }
    ?>

</body>