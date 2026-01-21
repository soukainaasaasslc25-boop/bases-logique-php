<?php


function calculerMoyenne($mesNotes) {
    $somme = array_sum($mesNotes); 
    $nombre = count($mesNotes);    
    return $somme / $nombre;
}

function checkote($mesNotes,$nom){
      $erreur = false;
    foreach ($mesNotes as $n) {
        if ($n < 0 || $n > 20) {
            $erreur = true; 
        }
    }

    if ($erreur) {
        echo "Attention : Les notes doivent être entre 0 et 20 !";
    } else {
        
        $moy = calculerMoyenne($mesNotes);
        $mention = donnerMention($moy);

        echo "<h1>Étudiant : $nom</h1>";
        echo "Moyenne : " . round($moy, 2) . "/20 <br>";
        echo "Résultat : <strong>$mention</strong>";
    }
}
function donnerMention($moyenne) {
    if ($moyenne >= 16) return "Très Bien";
    if ($moyenne >= 14) return "Bien";
    if ($moyenne >= 12) return "Assez Bien";
    if ($moyenne >= 10) return "Passable";
    return "Rattrapage";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    
    $mesNotes = [
        (float)$_POST['note1'],
        (float)$_POST['note2'],
        (float)$_POST['note3']
    ];
    $functionckeck=checkote($mesNotes,$nom);

  
}
?>