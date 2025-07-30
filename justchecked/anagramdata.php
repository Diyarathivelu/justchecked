<?php
if (isset($_POST['word1']) && isset($_POST['word2'])) {
    $w1 = strtolower(trim($_POST['word1']));
    $w2 = strtolower(trim($_POST['word2']));

    // Remove any non-alphanumeric characters (optional)
    $w1 = preg_replace("/[^a-z0-9]/i", "", $w1);
    $w2 = preg_replace("/[^a-z0-9]/i", "", $w2);

    // Convert to arrays, sort, and compare
    $a1 = str_split($w1);
    $a2 = str_split($w2);
    sort($a1);
    sort($a2);

    if ($a1 == $a2) {
        echo "✔ '$w1' and '$w2' are Anagrams.";
    } else {
        echo "✘ '$w1' and '$w2' are not Anagrams.";
    }
}
?>
