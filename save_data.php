<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $recipeurl = htmlspecialchars($_POST['recipeurl']);
    $tried = isset($_POST['add_recipe']) ? $_POST['add_recipe'] : '';
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $rating = htmlspecialchars($_POST['rating']);
    
    // Create a string to save to a file or database
    $data = "Recipe URL: $recipeurl\nTried: $tried\nCategory: $category\nRating: $rating\n\n";
    
    // Specify where to save the data (e.g., a text file)
    $file = 'recipes.txt';
    
    // Write the data to the file
    file_put_contents($file, $data, FILE_APPEND);
    
    // Redirect to a thank-you page or display a success message
    echo "<h3>Thank you for submitting your recipe!</h3>";
    echo "<p><a href='home page.html'>Go back to the site</a></p>";
} else {
    echo "Invalid request method.";
}
?>