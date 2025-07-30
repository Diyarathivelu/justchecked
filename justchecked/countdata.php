
<?php
if (isset($_POST['input'])) {
    $input = trim($_POST['input']);
    $length = strlen($input);
    echo "Length: $length character" . ($length !== 1 ? "s" : "");
}
?>
