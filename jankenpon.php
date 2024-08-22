<?php require("./part/header.php")?>

<?php
require('./JKP.php');
$jkp = new JKP();

if(isset($_POST['submit'])){
    $jkp->jankenpon();
}

echo "<br><a href='index.php'><button class='back-button'>back</button></a>";

require_once('./part/footer.php');