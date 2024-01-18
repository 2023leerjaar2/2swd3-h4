<?php
    require_once "helperQ.php";
?>
 <?php
    require_once "helperQ.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/review.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
	<header>
		<!-- <a href="#" class="logo">Food<span>Fun</span></a> -->
		<a href="#" class="logo"><img src="./img/MicrosoftTeams-image (7) (1).png" alt="logo" width="100px"  </a>
		<ul class="navbar">
			<li><a href="./index.html">Home</a></li>
			<li><a href="aboutUs.php">About</a></li>
			<li><a href="#menu">Menu</a></li>
			<li><a href="./contact.php">Contact</a></li>
		</ul>

		<div class="h-icons">
			<a href="#"><i class='bx bx-search' ></i></a>
			<a href="#"><i class='bx bx-cart' ></i></a>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
	</header>






        <section class="invulForm">
            <form action="contact.php" method="POST">
                <p>volledige naam</p>
                <input type="text" name="naam">
                <p>emailadres</p>
                <input type="text" name="email">
                <p>product</p>
                <input type="text" name="product">
                <p>probleem</p>
                <input type="text" name="probleem"><br>
                <button type="submit" name="submit">Verstuur</button>
            </form>
        </section>


        <?php
                        if(isset($_POST['submit'])){
                            probleem($_POST);
                        }

        ?>
    </main>



    <script src="https://unpkg.com/scrollreveal"></script>
	
	<!-- custom js link -->
	<script type="text/javascript" src="js/Pizza website.js"></script>

</body>
</html>