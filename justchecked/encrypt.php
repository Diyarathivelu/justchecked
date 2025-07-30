<?php








define('SECRET_KEY','justchecked@2025'); 
define('SECRET_IV', 'justchecked#123');       
define('ENCRYPT_METHOD', 'AES-256-CBC');

function encrypt_url($string) {
    $key = hash('sha256', SECRET_KEY);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);
    $output = openssl_encrypt($string, ENCRYPT_METHOD, $key, 0, $iv);
    return urlencode(base64_encode($output));
}

function decrypt_url($string) {
    $key = hash('sha256', SECRET_KEY);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);
    $decoded = base64_decode(urldecode($string));
    return openssl_decrypt($decoded, ENCRYPT_METHOD, $key, 0, $iv);
}


?>
