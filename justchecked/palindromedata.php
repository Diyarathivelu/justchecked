<?php
if (isset($_POST['inputString'])) {
    $input = strtolower(trim($_POST['inputString']));
    $reversed = strrev($input);

    if ($input === $reversed) {
        echo "'$input' is a Palindrome.";
    } else {
        echo "'$input' is not a Palindrome.";
    }
}
?>
