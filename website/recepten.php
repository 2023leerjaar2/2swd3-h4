<?php
	require_once "helperJ.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
	<header>
		<!-- <a href="#" class="logo">Food<span>Fun</span></a> -->
		<a href="#" class="logo"><img src="img/MicrosoftTeams-image (7) (1).png" alt="logo"></a>
		<ul class="navbar">
			<li><a href="./index.php">Home</a></li>
			<li><a href="./aboutUs.php">About</a></li>
			<li><a href="#menu">Menu</a></li>
			<li><a href="./contact.php">Contact</a></li>
			<li><a href="./review.php">Reviews</a></li>
		</ul>

		<article class="h-icons">
			<a href="#"><i class='bx bx-search' ></i></a>
			<a href="#"><i class='bx bx-cart' ></i></a>
			<article class="bx bx-menu" id="menu-icon"></article>
		</article>
	</header>
	<section class="menu" id="menu">
		<article class="main-text">
			<h2>Recepten</h2>
			<p>Dit zijn de <br> meest gevraagde recepten </p>
		</article>
		<article class="menu-content">
		<?php foreach(getAllRecepten() as $recepten){ ?>
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
   
</body>
</html>