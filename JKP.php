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

class JKP {

    public function Jankenpon(){
        $OppPick = rand(1, 3);
        $OurPick = $_POST['jankenpon'];

        if($OurPick == 1){
            if($OppPick == $OurPick){
                echo "<center><img src='./assets/img/Rvr.png'><br>";
                echo "<h1>Rock vs Rock</h1><br>";
                echo "<b class='battle-result-tie'>tie</b>";
            }else{
                if($OppPick == 2){
                    echo "<center><img src='./assets/img/RvP.png'><br>";
                    echo "<h1>Rock vs Paper</h1><br>";
                    echo "<b class='battle-result-lose'>Lose</b>";
                }else{
                    if($OppPick == 3){
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
                        echo "<center><img src='./assets/img/PvR.png'><br>";
                        echo "<h1>Paper vs Rock</h1><br>";
                        echo "<b class='battle-result-lose'>Lose</b>";
                    }else{
                        if($OppPick == 3){
                            echo "<center><img src='./assets/img/PvS.png'><br>";
                            echo "<h1>Paper vs Scissor</h1><br>";
                            echo "<b class='battle-result-win'>Win</b>";
                        }
                    }
                }
            }
            if($OurPick == 3){
                if($OppPick == $OurPick){
                    echo "<center><img src='./assets/img/SvS.png'><br>";
                    echo "<h1>Scissor vs Scissor</h1><br>";
                    echo "<p class='battle-result-tie'><b>tie</b></p>";
                }else{
                    if($OppPick == 1){
                        echo "<center><img src='./assets/img/SvR.png'><br>";
                        echo "<h1>Scissor vs Rock</h1><br>";
                        echo "<p class='battle-result-lose'><b>Lose</b></p>";
                    }else{
                        if($OppPick == 2){
                            echo "<center><img src='./assets/img/SvP.png'><br>";
                            echo "<h1>Scissor vs Paper</h1><br>";
                            echo "<p class='battle-result-win'><b>Win</b></p>";
                        }
                    }
                }
            }
        
    }
}