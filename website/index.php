<?php
require_once "helperJ.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food website</title>

    <link rel="stylesheet" href="css/Pizza website.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
		<a href="#" class="logo"><img src="img/MicrosoftTeams-image (7) (1).png" alt="logo"></a>
		<ul class="navbar">
			<li><a href="./index.php">Home</a></li>
			<li><a href="./aboutUs.php">About</a></li>
			<li><a href="#menu">Menu</a></li>
			<li><a href="./contact.php">Contact</a></li>
			<li><a href="./review.php">Reviews</a></li>
		</ul>

		<div class="h-icons">
			<input type="text" id="searchInput" placeholder="">
            <button onclick="search()">Zoeken</button>
			<a href="#"><i class='bx bx-cart' ></i></a>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
	</header>


		<section class="home" id="home">
			<div class="home-text">
				<h1><span>Welkom</span> bij de heerlijke wereld van barbecue-genot!</h1>
				<p>
					Ontdek het volledige barbecuekookboek hier en  <br> laat je smaakpapillen feestvieren!</p>
				<a href="https://www.bol.com/nl/nl/p/sterke-recepten/9300000163873691/?bltgh=sqRUFpxW48GVZXTNQuROhw.2_18.20.ProductTitle" class="btn">Koop kookboek</a>
			</div>

			<div class="home-img rotate-image">
				<img src="img/hero.png" alt="home">
			</div>
		</section>


		<section class="about" id="about">
			<div class="about-img">
				<img src="img/burger.png" alt="">
			</div>

			<div class="about-text">
				<h2>Heerlijke eten <br> Met Mooie recepten</h2>
				<p>Wil je nou ook lekker gaan eten maar weet je niet wat je moet maken<br><br> Klik dan op de knop hier beneden en wodt verwijst naar onze beste recepten</p>
				<a href="recepten.php" class="btn">Bekijk recepten</a>
			</div>

		</section>

		<section class="menu" id="menu">
    <article class="main-text">
        <h2>3 recente Recepten</h2>
        <p>Dit zijn de <br> meest gevraagde recepten </p>
    </article>
    <article class="menu-content">
        <?php 
     
            $receptenList = getAllRecepten();

    
            $recentRecipes = array_slice($receptenList, -3, 3);

            foreach($recentRecipes as $recepten){ 
        ?>
            <article class="row">
                <img src="../website/<?= $recepten[7]; ?>" alt="<?= $recepten[7]; ?>">
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
                <article class="star">
                    <a href="#"><i class='bx bxs-star' ></i></a>
                    <a href="#"><i class='bx bxs-star' ></i></a>
                    <a href="#"><i class='bx bxs-star' ></i></a>
                    <a href="#"><i class='bx bxs-star' ></i></a>
                    <a href="#"><i class='bx bxs-star' ></i></a>
                </article>
            </article>
        <?php }?>
    </article>
</section>

		<section class="contact" id="contact">
			<div class="main-contact">
				<div class="contact-content">
					<h4>Services</h4>
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#menu">Menu</a></li>
					<li><a href="#contact">Contact</a></li>
				</div>

			</div>
		</section>

		<div class="last-text">
			<p>© Developed by ayoub  juan  quinten  yassine</p>
		</div>


	<a href="#home" class="scroll-top">
		<i class='bx bx-up-arrow-alt' ></i>
	</a>



	<script src="https://unpkg.com/scrollreveal"></script>
	<script type="text/javascript" src="js/Pizza website.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

   
</body>
</html>
