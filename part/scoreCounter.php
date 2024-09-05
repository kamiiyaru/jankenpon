<style>
    .score-counter{
        position: relative;
        left : 70%;   
    }

@media screen and (max-width: 800px) {
    .score-counter{
        left : 60%;
    }
}
</style>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['Wcounter'])){
    $_SESSION['Wcounter'] = 0;
    echo "<a class='score-counter'>Score : ".$_SESSION['Wcounter']."</a>";
}else{
    echo "<a class='score-counter'>Score : ".$_SESSION['Wcounter']."</a>";
}