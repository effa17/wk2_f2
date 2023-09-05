<?php
if (isset($_POST['submit'])) {
    $input_text = $_POST['input_text'];

    $bil_perkataan = str_word_count($input_text);
    $bil_huruf = strlen(str_replace(' ', ' ', $input_text));
    $perkataanTerbalik = strrev($input_text);


    echo "<p>Ayat ini mengandungi $bil_perkataan perkataan</p>";
    echo "<p>Ayat ini mengandungi $bil_huruf huruf</p>";
    echo "<br>";

    $perkataanTerbalik = strrev($input_text);
    echo "<p> Ayat terbalik: $perkataanTerbalik</p>";
}
?>

