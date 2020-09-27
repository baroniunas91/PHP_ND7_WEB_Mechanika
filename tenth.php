<?php
echo '10) ----------------------------------------------------------------------------------------------------';
echo '<br>';
echo '<br>';
$letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
$color = isset($_POST['post']) ? 'white' : 'black';
$rand = 0;
?>

<body style="background-color: <?= $color ?>">
    <?php
    if (isset($_POST['post'])) {
        // rand kintamasis rodo kiek checkbox'ų iš viso buvo
        $rand = $_POST['post'] + 1;
        // length kintamasis rodo kiek checkbox'ų buvp pažymėta
        $length = count($_POST) - 1;
        echo "Pažymėtų checkbox'ų yra $length";
        echo '<br>';
        echo "Iš viso checkbox'ų buvo $rand";
        echo '<br>';
    } else {
        $rand = rand(2, 9);
        echo "
    <form action=\"\" method=\"post\">
        <button name=\"post\" value=\"$rand\" type=\"submit\" style=\"color: black; background-color: white; padding: 5px 20px; border-radius: 5px; border: 1px solid black;\">POST SUBMIT</button>
        <br>";
        foreach (range(0, $rand) as $key) {
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