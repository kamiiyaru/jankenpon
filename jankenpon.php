<?php require("./part/header.php")?>

<?php
require('./JKP.php');
$jkp = new JKP();

if(isset($_POST['submit'])){
    $opp = $_POST['Oppresult'];
    echo $opp;
    $jkp->Jankenpon();
}