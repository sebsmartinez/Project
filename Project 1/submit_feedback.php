<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/Leica3.jpg" type="image/x-icon" />
    <script src="js/script.js" defer></script>
    <title>About Leica M3</title>
</head>
<body>

    <!-- Global Navigation -->
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="promotion.html">Promotion Details</a></li>
            <li><a href="about.html">About the Product/Service</a></li>
            <li><a href="feedback.html">Rate or Add Comments</a></li>
            <li><a href="support.html">Support</a></li>
            <li><a href="corporate.html">Corporate Information</a></li>
        </ul>
    </nav>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the feedback and rating from the form
    $feedback = $_POST["feedback"];
    $rating = $_POST["rating"];

    // Validate the data (you can add more validation as needed)
    if (empty($feedback)) {
        echo "Feedback is required.";
    } else {
        // Process the feedback (for now, just echoing it)
        echo "<h2>Feedback Submitted</h2>";
        echo "<p>Your feedback: $feedback</p>";
        echo "<p>Your rating: $rating</p>";

        // You can add code here to store the feedback in a database or perform other actions
    }
} else {
    // If the form is not submitted, redirect to the feedback page
    header("Location: feedback.html");
    exit();
}
?>
