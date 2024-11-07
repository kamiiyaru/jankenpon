<?php require("./part/jkp_header.php")?>
    
    <div id="loading">
        <div class="loading-text">
            <p id="jan">Jan</p>
            <p id="ken">ken</p>
            <p id="pon">pon!!</p>
        </div>
        <div>
            <img src="assets/img/gh-pack/loading.gif">
            <img src="assets/img/gh-pack/loading-opp.gif">
        </div>
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
       myVar = setTimeout(showPage, 1700);
    }
  
    function showPage() {
        document.getElementById("loading").style.display = "none";
        document.getElementById("content").style.display = "block";
    }
</script>