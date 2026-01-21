<?php


   
    $notes=[
        (float)$_POST['note1'],
        $_POST['note2'],
        $_POST['note3'],

    ];




    function checkRange($notes){
        foreach($notes as $note){
            
            if ($note <0 || $note>20 )
             {

               return false;
            }
        }
        return true;
    }

    

    function calculateAVG($notes)
    {
     $check=checkRange($notes);
        if($check)
            return ($notes[0]+ $notes[1]+$notes[2]) / 3;
}



function getMention($AVG){
     $name=$_POST['nom'];
    if($AVG <10) return 'ratrapage';
    if ($AVG<=11) return 'passable';
    if ($AVG<=14) return 'assez bien ';
    if ($AVG<=16) return 'bieen';
    if ($AVG<=18) return 'tres tres bien ';
    if ($AVG<=20) return 'congratulation  '.$name."     you are genius 🚀 ";


}


function PrintResult($notes){
     $check=checkRange($notes);
    if( $check){
    echo"the average is  <br>";
    echo calculateAVG($notes)."<br>";
    echo  "the mention is    <br>";
    echo getMention(calculateAVG($notes))."<br>";
    }
    else
         echo "Please enter number between 1 and 20  ";
 

}

PrintResult($notes);
