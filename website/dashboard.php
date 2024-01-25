<?php
require_once "helperJ.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>


    <div id="dashboard">

        <div id="sidebar">
            <a href="#" onclick="showTab('home')"><i class="fas fa-home"></i> Home</a>
            <a href="#" onclick="showTab('reviews')"><i class="fas fa-star"></i> Reviews</a>
            <a href="#" onclick="showTab('comments')"><i class="fas fa-comments"></i> Comments</a>
            <a href="#" onclick="showTab('klachten')"><i class="fas fa-exclamation-triangle"></i> Klachten</a>
            <a href="#" onclick="showTab('recepten')"><i class="fas fa-book-open"></i> Recepten</a>
        </div>

        <div id="content">
            <section class="home">
                <h2>Welkom op de Home-pagina</h2>
                <!-- Inhoud van de Home-pagina -->
                <p>Dit is de hoofdpagina van jouw dashboard. Hier kun je belangrijke informatie en meldingen weergeven.</p>
            </section>

            <section class="reviews">
                <h2>Reviews</h2>
                <!-- Inhoud van de Reviews-sectie -->
                <p>Bekijk hier de laatste reviews van gebruikers.</p>
            </section>

            <section class="comments">
                <h2>Comments</h2>
                <!-- Inhoud van de Comments-sectie -->
                <p>Bekijk en reageer op opmerkingen van gebruikers.</p>
            </section>

            <section class="klachten">
                <h2>Klachten</h2>
                <!-- Inhoud van de Klachten-sectie -->
                <p>Volg de klachten van gebruikers en neem actie waar nodig.</p>
            </section>

            <section class="recepten">
                <h2>Recepten</h2>
                <p>Voeg nieuwe recepten toe en deel ze met de community.</p>
                <?php
                if(isset($_POST["submit"]))
                createRecept($_POST); 
                ?>
            <form method="POST" enctype="multipart/form-data">
            titel:<br>
            <input type="text" name="titel"><br><br>
            land:<br>
            <input type="text" name="land"><br><br>
            moeilijkheidsgraad:<br>
            <input type="number" name="moeilijkheidsgraad"><br><br>
            spicyness:<br>
            <input type="number" name="spicyness"><br><br>
            vlees soort:<br>
            <input type="text" name="vlees_soort"><br><br>
            afbeelding: <br>
            <input type="file" name="afbeelding"><br><br>
            inhoud:<br>
            <input type ="text" name="inhoud"><br><br>
            <input type="submit" name="submit" value="submit">
            </form>

            </section>
        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function showTab(tabName) {
            // Verberg alle secties
            $('section').hide();

            // Toon de geselecteerde sectie
            $('.' + tabName).show();
        }
    </script>

</body>
</html>
