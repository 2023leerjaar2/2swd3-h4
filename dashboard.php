<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        nav {
            background-color: #555;
            color: #fff;
            padding: 1em;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 1em;
        }

        section {
            padding: 20px;
        }

        .reviews, .comments, .klachten, .home, .recepten {
            display: none;
        }

        #tab-selector {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Mijn Dashboard</h1>
    </header>

    <nav>
        <a href="#" onclick="showTab('home')">Home</a>
        <a href="#" onclick="showTab('reviews')">Reviews</a>
        <a href="#" onclick="showTab('comments')">Comments</a>
        <a href="#" onclick="showTab('klachten')">Klachten</a>
        <a href="#" onclick="showTab('recepten')">Recepten</a>
    </nav>

    <div id="tab-selector">
        <label for="tab-select">Selecteer een tab:</label>
        <select id="tab-select" onchange="showTab(this.value)">
            <option value="home">Home</option>
            <option value="reviews">Reviews</option>
            <option value="comments">Comments</option>
            <option value="klachten">Klachten</option>
            <option value="recepten">Recepten</option>
        </select>
    </div>

    <section class="home">
        <h2>Welkom op de Home-pagina</h2>
        <!-- Inhoud van de Home-pagina -->
    </section>

    <section class="reviews">
        <h2>Reviews</h2>
        <!-- Inhoud van de Reviews-sectie -->
    </section>

    <section class="comments">
        <h2>Comments</h2>
        <!-- Inhoud van de Comments-sectie -->
    </section>

    <section class="klachten">
        <h2>Klachten</h2>
        <!-- Inhoud van de Klachten-sectie -->
    </section>

    <section class="recepten">
        <h2>Recepten</h2>
        <!-- Inhoud van de Recepten-sectie -->
    </section>

    <script>
        function showTab(tabName) {
            // Verberg alle secties
            document.querySelectorAll('section').forEach(section => {
                section.style.display = 'none';
            });

            // Toon de geselecteerde sectie
            document.querySelector(`.${tabName}`).style.display = 'block';
        }
    </script>

</body>
</html>
