<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}


if(isset($_POST['add'])){
    $_SESSION['Wcounter'] += 1;
    header("Location: score.php");
}

if(isset($_POST['dec'])){
    $_SESSION['Wcounter'] -= 1;
    header("Location: score.php");
}

if(isset($_POST['gun'])){
    $_SESSION['Wcounter'] = -7;
    header("Location: score.php");
}