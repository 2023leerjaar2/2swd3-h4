<?php
    require_once "helperQ.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutUs.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
	<header>
		<!-- <a href="#" class="logo">Food<span>Fun</span></a> -->
		<a href="#" class="logo"><img src="img/logo.png" alt="logo"></a>
		<ul class="navbar">
			<li><a href="./index.php">Home</a></li>
			<li><a href="./aboutUs.php">About</a></li>
			<li><a href="#menu">Menu</a></li>
			<li><a href="./contact.php">Contact</a></li>
			<li><a href="./review.php">reviews</a></li>
		</ul>

		<div class="h-icons">
			<a href="#"><i class='bx bx-search' ></i></a>
			<a href="#"><i class='bx bx-cart' ></i></a>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
	</header>
	<main>
		<section>
		<article>
				<img src="img/callingCartoon.png" alt="" width="200px">
				<h2>Quinten Schaap</h2>
				<p>18 jaar</p>
				<p>Software developer</p>
			</article>
			<article>
				<img src="img/callingCartoon.png" alt="" width="200px">
				<h2>Juan Santiago Peralta</h2>
				<p>18 jaar</p>
				<p>Software developer</p>
			</article>
			<article>
				<img src="img/callingCartoon.png" alt="" width="200px">
				<h2>Yassine El Ouali</h2>
				<p>18 jaar</p>
				<p>Software developer</p>
			</article>
			<article>
				<img src="img/callingCartoon.png" alt="" width="200px">
				<h2>Ayoub El Ouali</h2>
				<p>17 jaar</p>
				<p>Software developer</p>
			</article>
		</section>
	</main>
	

    <script src="https://unpkg.com/scrollreveal"></script>
	
	<!-- custom js link -->
	<script type="text/javascript" src="js/Pizza website.js"></script>

</body>
</html>