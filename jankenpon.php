<?php require("./part/header.php")?>

<?php
require('./JKP.php');
$jkp = new JKP();

// if(isset($_POST['submit'])){
//     $jkp->jankenpon();
// }

if(isset($_POST['rock'])){
    $jkp->jankenpon_v2();
}

if(isset($_POST['paper'])){
    $jkp->jankenpon_v2();
}

if(isset($_POST['scissor'])){
    $jkp->jankenpon_v2();
}

if(isset($_POST['gun'])){
    $jkp->dumb("cum");
}

echo "<br><a href='index.php'><button class='back-button'>back</button></a>";

require_once('./part/footer.php');