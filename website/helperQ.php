<?php 
    require_once "dbQuinten.php";

    
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

        function review($review){
            $naam = $review['naam'];
            $recept = $review['recept'];
            $comment = $review['comment'];
            $cijfer = $review['cijfer'];
            $sql = "INSERT INTO reveiw VALUES (NULL, '$naam',  '$recept', '$comment','$cijfer')";
            $result = connect()->query($sql);

            if(isset($_POST['submit'])){
                if(empty($_POST['naam'])  && empty($_POST['recept']) && empty($_POST['review'])  && empty($_POST['cijfer'])) {
                    echo "Vul alle velden in!";
            }else {
                try{
                    connect()->query($sql);

                    connect()->close();
                    echo "review is geplaatst";
                } catch (Excetion $e){
                    $error = "query is niet goed";
                    die($error);                
                }
            }
        }
    }
    

    function getReviews(){
        $sql = "SELECT * FROM reveiw";
        $result = connect()->query($sql);
        return $result->fetch_all();
    }
?>