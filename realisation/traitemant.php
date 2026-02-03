<?php

if (isset($_POST["submit"])) {

    $notes = [
        "Frontend" => [ $_POST["frontend1"], $_POST["frontend2"] , 5 ],
        "Backend" => [ $_POST["backend1"], $_POST["backend2"], 5 ],
        "Entreprenariat" => [ $_POST["entre1"], $_POST["entre2"],"cof"=>2 ],
        "Anglais" => [ $_POST["anglais1"], $_POST["anglais2"] ,"cof"=>3],
        "Soft Skills" => [ $_POST["soft1"], $_POST["soft2"] ,"cof"=>3]
    ];

   


    
    function checkRange($notes){
       foreach ($notes as $matiere => $notesMatiere){
            
            if ($notesMatiere[0] < 0 || $notesMatiere[0] > 20 || $notesMatiere[1] < 0 || $notesMatiere[1] > 20) {
          

               return false;
            }
        }
        return true;
    }

    

  function calculateAVG($notes) {
    if (!checkRange($notes)) {
        return "Erreur : Notes hors limites (0-20)";
    }

    $totalPoints = 0;
    $totalCoeff = 0;

    foreach ($notes as $matiere => $data) {
        $moyenneMatiere = ($data[0] + $data[1]) / 2;
        $totalPoints += ($moyenneMatiere * $data[2]);
        $totalCoeff += $data[2];
    }

    return $totalPoints / $totalCoeff;
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
     echo"the average is  <br>";
     echo calculateAVG($notes)."<br>";
     echo  "the mention is    <br>";
     echo getMention(calculateAVG($notes))."<br>";
    ;
 

 }

 PrintResult($notes);
}
?>