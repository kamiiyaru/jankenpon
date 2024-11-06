<?php require("./part/jkp_header.php")?>

<div id="loading">
    <h1 id="jan">Jan</h1>
    <h1 id="ken">ken</h1>
    <h1 id="pon">pon!!</h1>
</div>

<div id="content" style="display: none;">
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
?>
</div>

<script>
    function myFunction() {
       myVar = setTimeout(showPage, 3000);
    }
  
    function showPage() {
        document.getElementById("loading").style.display = "none";
        document.getElementById("content").style.display = "block";
    }
</script>