<?php



if (isset($_POST["submit"])) {


    $notes = [
        "Frontend" => [ (float)$_POST["frontend1"], (float)$_POST["frontend2"] ,5 ],
        "Backend" => [ $_POST["backend1"], $_POST["backend2"],5],
        "Entreprenariat" => [ $_POST["entre1"], $_POST["entre2"],2],
        "Anglais" => [ $_POST["anglais1"], $_POST["anglais2"] ,2],
        "Soft Skills" => [ $_POST["soft1"], $_POST["soft2"] , 3]
    ];

   


    
    function checkRange($notes){
       foreach ($notes as $matiere => $notesMatiere){
            
            if ($notesMatiere[0] < 0 || $notesMatiere[0] > 20 || $notesMatiere[1] < 0 || $notesMatiere[1] > 20) {
          

               return false;
            }
        }
        return true;
    }


  function calculateBulletin    ($notes) {
    if (!checkRange($notes)) {
        return "Erreur : Notes hors limites (0-20)";
    }
     $Sum_Cofficient =0;
      $SumMoyenne_cofficient = 0;
    foreach ($notes as $matiere => $notesMatiere){

      $MoyenneDesNots= ($notesMatiere[0]+ $notesMatiere[1])/(count($notesMatiere)-1);
      $Cofficient = $notesMatiere[count($notesMatiere)-1];
      $SumMoyenne_cofficient += ($Cofficient * $MoyenneDesNots);
     
      $Sum_Cofficient += $notesMatiere[count($notesMatiere)-1];

    }
return  round(($SumMoyenne_cofficient / $Sum_Cofficient),2);
}


function getMention($Bull){
     $name=$_POST['nom'];
    if($Bull <10) return 'ratrapage';
    if ($Bull<=11) return 'passable';
    if ($Bull<=14) return 'assez bien ';
    if ($Bull<=16) return 'bieen';
    if ($Bull<=18) return 'tres tres bien ';
    if ($Bull<=20) return 'congratulation  '.$name."     you are genius 🚀 ";

}

 function PrintResult($notes){

    $nom=$_POST["nom"];
  $prenom=$_POST["prenom"];
   $filier=$_POST["filiere"];
    $dateN=$_POST["Date"];

    echo "<strong> Le builletin    </strong>  <br>";

    echo"le nom est le prenom d'etudiant est  : ".$nom."  ".$prenom."<br>";

    echo"Né le  : ".$dateN."<br>";
    echo"Filiére    : ".$filier."<br>";

     echo"the average is  :".calculateBulletin($notes)."<br>";
     
     echo  "the mention is    <br>";
     echo getMention(calculateBulletin($notes))."<br>";
     if(calculateBulletin($notes)>=10){
      echo  "Vous   etes   <strong> Admis </strong>  <br>";
     }

     else{
      echo  "Vous   etes  <strong > Ajourné  </strong> <br>";
     }
 }

 PrintResult($notes);

 echo "<a href='index.php'>Réinitialiser</a>";

}
?>