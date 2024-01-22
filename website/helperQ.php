<?php 
    require_once "dbconnect.php";

    
    function probleem($klacht){
        $naam = $klacht['naam'];
        $email = $klacht['email'];
        $product = $klacht['product'];
        $probleem = $klacht['probleem'];
        $sql = "INSERT INTO problemen VALUES (NULL, '$naam', '$email', '$product', '$probleem')";
        $result = connect()->query($sql);


        if(isset($_POST['submit'])){
            if(empty($_POST['naam']) && empty($_POST['email']) && empty($_POST['product']) && empty($_POST['product']) && empty($_POST['probleem'])){
                echo "vul alles is";
            }else {
                try{
                    connect()->query($sql);
        
                    connect()->close();
                    echo "gebruiker is toegevoegd";
        
                } catch(Exception $e){
                    $error = "query is niet goed";
                    die($error);
                }
            }
            }
        }
    
?>