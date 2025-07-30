<?php
if (isset($_POST['pangramText'])) {
    $text = strtolower($_POST['pangramText']);
    $letters = range('a', 'z');
    $isPangram = true;

    foreach ($letters as $char) {
        if (strpos($text, $char) === false) {
            $isPangram = false;
            break;
        }
    }

    if ($isPangram) {
        echo "<span style='color:green;'> It's a Pangram!</span>";
    } else {
        echo "<span style='color:red;'>Not a Pangram.</span>";
    }
}
?>
