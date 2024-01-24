<?php
require_once "dbconnect.php";

function createRecept($data){
    $titelRecepten = $data["titel"];
    $land = $data["land"];
    $moeilijkheidsgraad = $data["moeilijkheidsgraad"];
    $spicyness = $data["spicyness"];
    $vlees_soort = $data["vlees_soort"];
    $inhoud = $data["inhoud"];

    // Controleer of het bestand is geüpload
    if(isset($_FILES['afbeelding'])) {
        // Afbeelding uploaden
        $uploadedImage = uploadImage($_FILES['afbeelding']);

        if ($uploadedImage) {
            // Afbeelding succesvol geüpload, voeg de gegevens toe aan de database
            $sql = "INSERT INTO recepten (titel, land, moeilijkheidsgraad, spicyness, vlees_soort, afbeelding, inhoud) VALUES ('$titelRecepten', '$land', '$moeilijkheidsgraad', '$spicyness', '$vlees_soort', '$uploadedImage', '$inhoud')";
            
            if (connect()->query($sql)) {
                echo "Recept is toegevoegd!";
            } else {
                echo "Fout bij het toevoegen van het recept aan de database.";
            }
        } else {
            echo "Fout bij het uploaden van de afbeelding.";
        }
    } else {
        echo "Geen afbeelding geüpload.";
    }
}
function uploadImage($file) {
    $uploadDirectory = 'img/'; // Map waarin je de afbeeldingen wilt opslaan

    // Controleer of een bestand is geüpload en of er geen fouten zijn opgetreden
    if(isset($file['name']) && $file['error'] === UPLOAD_ERR_OK) {
        $image_name = basename($file['name']); // Bestandsnaam uit het uploadformulier halen
        $image_path = $uploadDirectory . $image_name;

        // Verplaats het bestand naar de img-map
        if (move_uploaded_file($file['tmp_name'], $image_path)) {
            return $image_path; // Retourneer het pad naar het opgeslagen bestand
        } else {
            return false; // Uploaden mislukt
        }
    } else {
        return false; // Geen afbeelding geüpload of er is een fout opgetreden
    }
}
?>