function search() {
    // Haal de zoektekst op
    var searchText = document.getElementById("searchInput").value.toLowerCase();

    // Controleer of de zoektekst overeenkomt met een van de links in de navbar
    var navbarLinks = document.querySelectorAll(".navbar a");
    navbarLinks.forEach(function(link) {
        var linkText = link.textContent.toLowerCase();
        if (linkText.includes(searchText)) {
            // Navigeer naar de overeenkomende link
            link.click();
        }
    });
}