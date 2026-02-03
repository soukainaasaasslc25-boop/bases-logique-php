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
    if ($AVG<=16) return ' tres bien';
    if ($AVG<=18) return 'excelent ';
    if ($AVG<=20) return 'congratulation  '.$name."     vous etes genius 🚀 ";


}


function PrintResult($notes){
     $check=checkRange($notes);
    if( $check){
    echo"le moyenne est    <br>";
    echo   round(calculateAVG($notes), 2)."<br>";
    echo  "la mention est    <br>";
    echo getMention(calculateAVG($notes))."<br>";
    }
    else
         echo "svp entrer un nombre entre 0 et 20  ";
 

}

PrintResult($notes);
