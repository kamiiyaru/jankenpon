<!--     
1 = rock
2 = paper
3 = scisscor
-->

<style>
    img {
        width: 200px;
    }
</style>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class JKP {

    public function Jankenpon(){
        $WinCounter = $_SESSION['Wcounter'];
        $OppPick = rand(1, 3);
        $OurPick = $_POST['jankenpon'];
        

        if($OurPick == 1){
            if($OppPick == $OurPick){
                echo "<center><img src='./assets/img/Rvr.png'><br>";
                echo "<h1>Rock vs Rock</h1><br>";
                echo "<b class='battle-result-tie'>tie</b>";
            }else{
                if($OppPick == 2){
                    $_SESSION['Wcounter'] -= 1;
                    echo "<center><img src='./assets/img/RvP.png'><br>";
                    echo "<h1>Rock vs Paper</h1><br>";
                    echo "<b class='battle-result-lose'>Lose</b>";
                }else{
                    if($OppPick == 3){
                        $_SESSION['Wcounter'] += 1;
                        echo "<center><img src='./assets/img/RvS.png'><br>";
                        echo "<h1>Rock vs Scissor</h1><br>";
                        echo "<b class='battle-result-win'>Win</b>";
                    }
                }
            }
        }
            if($OurPick == 2){
                if($OppPick == $OurPick){
                    echo "<center><img src='./assets/img/PvP.png'><br>";
                    echo "<h1>Paper vs Paper</h1><br>";
                    echo "<b class='battle-result-tie'>tie</b>";
                }else{
                    if($OppPick == 1){
                        $_SESSION['Wcounter'] -= 1;
                        echo "<center><img src='./assets/img/PvR.png'><br>";
                        echo "<h1>Paper vs Rock</h1><br>";
                        echo "<b class='battle-result-lose'>Lose</b>";
                    }else{
                        if($OppPick == 3){
                            $_SESSION['Wcounter'] += 1;
                            echo "<center><img src='./assets/img/PvS.png'><br>";
                            echo "<h1>Paper vs Scissor</h1><br>";
                            echo "<b class='battle-result-win'>Win</b>";
                        }
                    }
                }
            }
            if($OurPick == 3){
                if($OppPick == $OurPick){
                    echo "<style> .back-button { margin-top: 0px; }</style>";
                    echo "<center><img src='./assets/img/SvS.png'><br>";
                    echo "<h1>Scissor vs Scissor</h1><br>";
                    echo "<p class='battle-result-tie'><b>tie</b></p>";
                }else{
                    if($OppPick == 1){
                        $_SESSION['Wcounter'] -= 1;

                        echo "<style> .back-button { margin-top: 0px; }</style>";
                        echo "<center><img src='./assets/img/SvR.png'><br>";
                        echo "<h1>Scissor vs Rock</h1><br>";
                        echo "<p class='battle-result-lose'><b>Lose</b></p>";
                    }else{
                        if($OppPick == 2){
                            $_SESSION['Wcounter'] += 1;

                            echo "<style> .back-button { margin-top: 0px; }</style>";
                            echo "<center><img src='./assets/img/SvP.png'><br>";
                            echo "<h1>Scissor vs Paper</h1><br>";
                            echo "<p class='battle-result-win'><b>Win</b></p>";
                        }
                    }
                }
            }
        
    }

    // 1 = rock
    // 2 = paper
    // 3 = scisscor

    public function jankenpon_v2() {

        $OppPick = rand(1,3);

        if(isset($_POST['rock'])){
            if($OppPick == 1){
                echo "<center><img src='./assets/img/Rvr.png'><br>";
                echo "<h1>Rock vs Rock</h1><br>";
                echo "<b class='battle-result-tie'>tie</b>";
            }else{
                if($OppPick == 2){
                    $_SESSION['Wcounter'] -= 1;
                    echo "<center><img src='./assets/img/RvP.png'><br>";
                    echo "<h1>Rock vs Paper</h1><br>";
                    echo "<b class='battle-result-lose'>Lose</b>";
                }else{
                    if($OppPick == 3){
                        $_SESSION['Wcounter'] += 1;
                        echo "<center><img src='./assets/img/RvS.png'><br>";
                        echo "<h1>Rock vs Scissor</h1><br>";
                        echo "<b class='battle-result-win'>Win</b>";
                    }
                }
            }
        }

        if(isset($_POST['paper'])){
            if($OppPick == 1){
                $_SESSION['Wcounter'] += 1;
                echo "<center><img src='./assets/img/PvR.png'><br>";
                echo "<h1>Paper vs Scissor</h1><br>";
                echo "<b class='battle-result-win'>Win</b>";
            }else{
                if($OppPick == 2){
                    echo "<center><img src='./assets/img/PvP.png'><br>";
                    echo "<h1>Paper vs Paper</h1><br>";
                    echo "<b class='battle-result-tie'>tie</b>";
                }else{
                    if($OppPick == 3){
                        $_SESSION['Wcounter'] -= 1;
                        echo "<center><img src='./assets/img/PvS.png'><br>";
                        echo "<h1>Paper vs Rock</h1><br>";
                        echo "<b class='battle-result-lose'>Lose</b>";
                    }
                }
            }
        }

        if(isset($_POST['scissor'])){
            if($OppPick == 1){
                $_SESSION['Wcounter'] -= 1;
                echo "<style> .back-button, .res { margin-top: 0px; margin-bottom: 0px;}</style>";
                echo "<center><img src='./assets/img/SvR.png'><br>";
                echo "<h1 class='res'>Scissor vs Rock</h1><br>";
                echo "<p class='battle-result-lose'><b>Lose</b></p>";;
            }else{
                if($OppPick == 2){
                    $_SESSION['Wcounter'] += 1;
                    echo "<style> .back-button, .res { margin-top: 0px; } </style>";
                    echo "<center><img src='./assets/img/SvP.png'><br>";
                    echo "<h1 class='res'>Scissor vs Rock</h1><br>";
                    echo "<p class='battle-result-win'><b>Win</b></p>";
                }else{
                    if($OppPick == 3){
                        echo "<style> .back-button, .res { margin-top: 0px; margin-bottom: 0px;}</style>";
                        echo "<center><img src='./assets/img/SvS.png'><br>";
                        echo "<h1 class='res'>Scissor vs Scissor</h1><br>";
                        echo "<p class='battle-result-tie'><b>tie</b></p>";
                    }
                }
            }
        }
    }

    public function dumb($gun){
        if(isset($_POST['gun'])){
            $_SESSION['Wcounter'] = 0;
        }
        ?>
        <style>
            .back-button{
                background-color: gray;
            }

            #header{
                border-bottom: 3px solid #e3e3e3;
                background-color: white;
            }

            body{
                background-color: black;
            }
            .savior-gif{
                width: 30%;
                position: relative;
                left: 35%;
            }

            .kermit {
                width: 12%;
                position: relative;
                left: 14%;
                bottom: 110px;
                border-radius: 50%;
            }

            .word{
                color: white;
                position:relative;
                top:-100px;
                left:44%;
            }
        </style>
            <img src="assets/img/savior.gif" class="savior-gif">
            <img src="assets/img/favicon/kermit.jpeg" class="kermit">
        <?php 
        echo "<p class='word'>Willy Wigger, your score now turn you Zeroger<p>";
    }
}