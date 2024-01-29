<?php
// comment_recipe.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipeId = $_POST["recipe_id"];
    $userId = $_SESSION["user_id"]; // Assuming you have user authentication
    $commentText = $_POST["comment"];

    // Insert the comment into the database
    addRecipeComment($recipeId, $userId, $commentText);

    // Redirect back to the recipe page
    header("Location: recipe_page.php");
    exit();
}
?>