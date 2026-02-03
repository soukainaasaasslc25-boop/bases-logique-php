<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calcul de Moyenne Étudiant</title>
    <style>
        
        .container { width: 300px; margin: 20px auto; }
        label { display: block; margin-top: 10px; }
        input { width: 100%; }
        button { margin-top: 15px; width: 100%; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <h2>Gestion des Notes</h2>
    
    <form action="traitemant.php" method="POST">
        <fieldset>
            <legend>Information Personnelle d'étudiant</legend>

            <label for="nom">Nom d'étudiant :</label>
            <input type="text" id="nom" name="nom" required>

            <label>Prenom d'étudiant :</label>
            <input type="text" name="prenom"  required>

            <label>Date de naissance</label>
            <input type="date" name="Date" required>

            <label>Filiere</label>
            <input type="text" name="filiere"  required>

           
        </fieldset>
    
    <fieldset>
        <legend>Liste des notes</legend>
   
    <h3>Frontend</h3>
    <input type="number" name="frontend1" placeholder="Note 1" required>
    <input type="number" name="frontend2" placeholder="Note 2" required>

    <h3>Backend</h3>
    <input type="number" name="backend1" placeholder="Note 1" required>
    <input type="number" name="backend2" placeholder="Note 2" required>

    <h3>Entreprenariat</h3>
    <input type="number" name="entre1" placeholder="Note 1" required>
    <input type="number" name="entre2" placeholder="Note 2" required>

    <h3>Anglais</h3>
    <input type="number" name="anglais1" placeholder="Note 1" required>
    <input type="number" name="anglais2" placeholder="Note 2" required>

    <h3>Soft Skills</h3>
    <input type="number" name="soft1" placeholder="Note 1" required>
    <input type="number" name="soft2" placeholder="Note 2" required>

    <br><br>
    <button type="submit" name="submit">Valider</button>
</form>
</fieldset>
</div> 
</body>
</html>