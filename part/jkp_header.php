<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/kermit.jpeg">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/button.css">
    <link rel="stylesheet" href="assets/css/animation.css">
    <title>Jankenpon!!</title>
</head>
<body onload="myFunction()">
    <div id="header"><img src="./assets/img/pfp.jpg" alt="" class="header-image">
        <p class="word">fucking hell</p>
        <?php require("./part/scoreCounter.php"); ?>
    </div>

<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if($_SESSION['Wcounter'] <= -7){
    $_SESSION['Message'] = "BRO HOW TF U'RE SO BAD, HERE's A GUN FOR YOU DUMBFCUK";
}else{
    echo "<style>.button-gun{display:none;</style>";
}