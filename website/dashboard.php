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
            <a href="#" onclick="showTab('verwijderen')"><i class="fas fa-book-open"></i> verwijderen</a>
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
            <section class="verwijderen">
                <h2>Verwijderen</h2>
                <?php foreach(getAllRecepten() as $recepten){ ?>
			<article class="row">
				<article class="menu-text">
					<article class="menu-left">
						<h4><?= $recepten[2]; ?></h4>
					</article>
					<article class="menu-right">
						<h5><?= $recepten[3]; ?></h5>
					</article>
				</article>
				<p>moeilijkheidsgraad: <?= $recepten[4]; ?></p>
				<p>spicyness: <?= $recepten[5]; ?></p>
				<p>vlees soort: <?= $recepten[6]; ?></p>
				<p>info: <?= $recepten[8]; ?></p>
			</article>
                <?php if(isset($_POST["delete"]))
                        DeleteRecept($_POST); 
                ?>
                <form method="post">
                    <input type="hidden" name="recept_id" value="<?php echo $recepten[0]; ?>">
                    <input class="button_overal" type="submit" name="delete" value="delete">
                </form>
                <?php }?>
                <p>Verwijder hier je recepten.</p>
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
