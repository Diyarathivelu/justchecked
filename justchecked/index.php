
<?php

include_once 'encrypt.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JustChecked</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.bundle.min.js">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./fontawsome/css/all.min.css">   
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <style>
      
       .header, footer,.btn-primary{
            background-color:#3e2723!important ;
            color:#fbe9e7!important;   
                }
    li a{
        font-size:12px!important;
    }
    .btn-primary{
        border:none;
    }   
    input{
        font-size:12px !important;
    }  

    </style>
</head>
<?php


if (isset($_GET['data'])) {
    $decrypted = decrypt_url($_GET['data']);
    parse_str($decrypted, $params);
    $_REQUEST = array_merge($_REQUEST, $params); // Makes param/unitheadparam available
}
function e($str) {
    return encrypt_url($str);
}
if(isset($_REQUEST['checkparam']))
{
$checkpage=$_REQUEST['checkparam'];
}
else{
$checkpage="home.php";
}
if($checkpage==''){
$checkpage="home.php";
}
switch($checkpage){
case "home":
    $checkpage="home.php";
    break;
case "armstrong":
    $checkpage="armstrong.php";
    break;

case "composite":
    $checkpage="composite.php";
    break;
case "disarium":
    $checkpage="disarium.php";
    break;
case "factorial":
    $checkpage="factorial.php";
    break;
case "fibnocci":
    $checkpage="fibnocci.php";
    break;
case "leap":
    $checkpage="leap.php";
    break;
case "palindrome":
    $checkpage="palindrome.php";
    break;
case "perfect":
    $checkpage="perfect.php";
    break;
case "reverse":
    $checkpage="reverse.php";
    break;
case "strong":
    $checkpage="strong.php";
    break;
case "sumofdigits":
    $checkpage="sumofdigits.php";
    break;
case "count":
    $checkpage="count.php";
    break;
case "anagram":
    $checkpage="anagram.php";
    break;
case "isomorphic":
    $checkpage="isomorphic.php";
    break;
case "prime":
    $checkpage="prime.php";
    break;
case "lcm":
    $checkpage="lcm.php";
    break;
case "vowels":
    $checkpage="vowels.php";
    break;
case "pangram":
    $checkpage="pangram.php";
    break;
}
?>
<body>
            <!-- navbar -->
                    <nav class="navbar header " style="height: 70px!important;">
                        <div class="container-fluid">
                            <span class="navbar-brand mb-0 h1 "style="color:#fbe9e7!important"> <i class="fa-solid fa-bolt me-2"></i>Just Checked</span>
                        </div>
                    </nav>
            <!-- second navbar -->
            <nav class="navbar second-navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid ">

                    <div class="toggler-end">
                        <!-- Toggler for mobile -->
                        <button class="navbar-toggler" style="justify-content:end; border:none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                        <i class="fa-solid fa-bars" ></i>
                        </button>
                        </div>
                        <!-- Navbar content -->
                        <div class="collapse navbar-collapse" id="navbarContent">

                        <!-- Left links -->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                            <!-- Use encrypted URLs in your navbar -->
                                                        <li class="nav-item"><a class="nav-link" href="index.php?data=<?= e('checkparam=armstrong') ?>">Armstrong</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="index.php?data=<?= e('checkparam=composite') ?>"></i>Composite</a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=disarium') ?>" >Disarium</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="index.php?data=<?= e('checkparam=factorial') ?>">Factorial</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="index.php?data=<?= e('checkparam=fibnocci') ?>">Fibnocci </a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=leap') ?>" >Leap year </a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=palindrome') ?>" >Palindrome</a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=perfect') ?>" >Perfect</a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=prime') ?>" >Prime </a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=reverse') ?>" >Reverse</a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=strong') ?>" >Strong</a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=sumofdigits') ?>" >Sum of Digits</a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=count') ?>" >Count</a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=anagram') ?>" >Anagram</a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=isomorphic') ?>" >Isomorphic</a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=lcm') ?>" >LCM & GCD</a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=pangram') ?>" >Pangram</a></li>
                                                        <li class="nav-item"><a class="nav-link"  href="index.php?data=<?= e('checkparam=vowels') ?>" >Vowels & Consonants</a></li>









                        </ul>
                       </div>
                </div>
            </nav>
            <!-- Content -->
            <div class="main-content">
                <?php include $checkpage;?>
            </div>

            <!-- fixed footer -->
                <footer class=" footer fixed-bottom text-center text-lg-start " >
                      <div class="text-center py-2" >
                                 ©just checked
                     </div>
                </footer>

    
</body>
</html>