<?php
if (isset($_POST['input'])) {
    $input = trim($_POST['input']);
    $reversed = strrev($input);
    echo " Reverse of given number is $reversed";
}
?>
