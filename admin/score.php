<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

echo $_SESSION['Wcounter'];
?>

<form method="post" action="scoreadd.php">
    <input type="submit" name="add" value="Add 1">
    <input type="submit" name="dec" value="Minus 1">
    <input type="submit" name="gun" value="auto gun">
<form>