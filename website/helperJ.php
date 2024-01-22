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
    $sql ="INSERT INTO producten (titel, land, moeilijkheidsgraad, spicyness, vlees_soort, afbeelding, inhoud)VALUES('$naamRecepten', '$land', '$moeilijkheidsgraad', '$spicyness', '$vlees_soort', '$afbeelding', '$inhoud')";

    connect()->query($sql);
    echo "recept is toegevoegd!";
}
?>