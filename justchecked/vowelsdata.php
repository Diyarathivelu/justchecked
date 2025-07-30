<?php
if (isset($_POST['vowelText'])) {
    $text = strtolower($_POST['vowelText']);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vc = 0;
    $cc = 0;

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (ctype_alpha($char)) {
            if (in_array($char, $vowels)) {
                $vc++;
            } else {
                $cc++;
            }
        }
    }

    echo "<span style='color:green;'>Vowels: $vc | Consonants: $cc</span>";
}
?>
