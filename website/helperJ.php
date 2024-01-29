<?php
require_once "dbconnect.php";

function createRecept($data){
    $titelRecepten = $data["titel"];
    $land = $data["land"];
    $moeilijkheidsgraad = $data["moeilijkheidsgraad"];
    $spicyness = $data["spicyness"];
    $vlees_soort = $data["vlees_soort"];
    $inhoud = $data["inhoud"];

    if(isset($_FILES['afbeelding'])) {
        $uploadedImage = uploadImage($_FILES['afbeelding']);

        if ($uploadedImage) {
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
    $uploadDirectory = 'img/';

    if(isset($file['name']) && $file['error'] === UPLOAD_ERR_OK) {
        $image_name = basename($file['name']); 
        $image_path = $uploadDirectory . $image_name;

        if (move_uploaded_file($file['tmp_name'], $image_path)) {
            return $image_path; 
        } else {
            return false; 
        }
    } else {
        return false;
    }
}

function getAllRecepten(){
    $sql = "SELECT * FROM recepten";
    $result= connect()->query($sql);
    $recepten = $result->fetch_all();
    return $recepten;
    
}

function DeleteRecept($data){
    $id = $data['recept_id'];
    $sql ="DELETE FROM recepten WHERE recept_id = '$id'";
    connect()->query($sql);
    header("Location: dashboard.php");
}

// In helperJ.php or another relevant file
function getGeneralComments() {
    $conn = connect(); // Assuming you have a connect function for database connection

    $comments = [];

    // Replace "your_general_comments_table" with your actual table name
    $sql = "SELECT * FROM your_general_comments_table ORDER BY timestamp DESC";
    $result = $conn->query($sql);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $comments[] = $row;
        }
    }

    $conn->close();

    return $comments;
}

// Voorbeeld van de addGeneralComment-functie
function addGeneralComment($userName, $commentText) {
    // Implementeer logica om een nieuwe algemene opmerking aan de database toe te voegen
    // Gebruik prepared statements om SQL-injecties te voorkomen

    // Vervang dit met de daadwerkelijke logica om opmerkingen aan de database toe te voegen
    $sql = "INSERT INTO your_table_name (user_name, comment_text) VALUES ('$userName', '$commentText')";
    connect()->query($sql);

    // Vervang bovenstaande code met de daadwerkelijke implementatie
}


?>