<?php
function isIsomorphic($s, $t) {
    if (strlen($s) != strlen($t)) return false;

    $map1 = [];
    $map2 = [];

    for ($i = 0; $i < strlen($s); $i++) {
        $ch1 = $s[$i];
        $ch2 = $t[$i];

        if (($map1[$ch1] ?? null) !== ($map2[$ch2] ?? null)) {
            return false;
        }

        $map1[$ch1] = $i;
        $map2[$ch2] = $i;
    }

    return true;
}

if (isset($_POST['string1']) && isset($_POST['string2'])) {
    $str1 = strtolower(trim($_POST['string1']));
    $str2 = strtolower(trim($_POST['string2']));

    if (isIsomorphic($str1, $str2)) {
        echo "'$str1' and '$str2' are Isomorphic.";
    } else {
        echo "'$str1' and '$str2' are not Isomorphic.";
    }
}
?>
