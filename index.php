<?php require("./part/header.php"); require_once("./part/footer.php");?>
<?php
    if(isset($_SESSION['Message'])){
        echo $_SESSION['Message'];
        unset($_SESSION['Message']);
    }
?>
<center>
    <h1>choose one!</a></h1>
    <form method="post" action="jankenpon.php" class="jkp">
        <input type="submit" name="rock" class="button-rock unv-btn" value="Rock">
        <input type="submit" name="paper" class="button-paper unv-btn" value="Paper">
        <input type="submit" name="scissor" class="button-scissor unv-btn" value="Scissor">
        <input type="submit" name="gun" class="button-gun" value="gun">
    </form>
</center>
