<?php
require_once "dbconnect.php";

function createRecept($data){
    $titelRecepten = $data["titel"];
    $land = $data["land"];
    $moeilijkheidsgraad = $data["moeilijkheidsgraad"];
    $spicyness = $data["spicyness"];
    $vlees_soort = $data["vlees_soort"];
    $afbeelding = $data["afbeelding"];
    $inhoud = $data["inhoud"];
    $sql ="INSERT INTO recepten (titel, land, moeilijkheidsgraad, spicyness, vlees_soort, afbeelding, inhoud)VALUES('$titelRecepten', '$land', '$moeilijkheidsgraad', '$spicyness', '$vlees_soort', '$afbeelding', '$inhoud')";

    connect()->query($sql);
    echo "recept is toegevoegd!";
}
?>