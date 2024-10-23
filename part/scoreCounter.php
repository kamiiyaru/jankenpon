<style>
    .min-score-counter{
        position: relative;
        left: 60%;
        top: 10px;
    }

    .score-counter{
        position: relative;
        left : 65%;
        top: 20px; 
    }

@media screen and (max-width: 800px) {

    .min-score-counter{
        left: 42%;
    }

    .score-counter {
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
    if($_SESSION['Wcounter'] < 0){
        echo "<a class='min-score-counter'>Man how dumb to <br>have negative score?<br>here's your score : ".$_SESSION['Wcounter']."</a>";
    }else{
        echo "<a class='score-counter'>Score : ".$_SESSION['Wcounter']."</a>";
    }
}