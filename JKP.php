<!--     
     if(OppResult == 1){
            console.log('Rock')
        }else{
        
            if(OppResult == 2){
                console.log('Paper')
            }else{
                if(OppResult == 3){
                    console.log('Scissor')
                }
            }
        } 
-->

<?php

class JKP {

    public function Jankenpon(){
        $result = $_POST['jankenpon'];
        $OppResult = $_POST['Oppresult'];

        echo $OppResult;
        if($result == 1){
            if($OppResult == $result){
                echo "<h1>Rock vs Rock</h1> <br>";
                echo "Tie";
            }
            if($OppResult == 2){
                echo "<h1>Rock vs Rock</h1> <br>";
                echo "You Lose";
            }
        }else{
            if($result == 2){
                echo "paper";
            }else{
                if($result == 3){
                    echo "scissor";
                }
            }
        }
    }

}