<?php
$nom = "fati";
$age = 18;
$isConetcter = true;
$prix = 19.99;

echo "Le nom est " . $nom."<br>";
echo "L age est " . $age."<br>";
echo "Le prix est " . $prix."<br>";
echo "Conecter " . ($isConetcter ? "oui":"non")."<br>";

$intprix = (int)$prix;
echo "Le prix est apres conversion " . $intprix."<br>";
