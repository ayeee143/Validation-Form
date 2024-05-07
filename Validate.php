<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Validate the email and password (you can add your validation logic here)
    // For demonstration purposes, let's just check if they are not empty
    if (!empty($email) && !empty($password)) {
        // If validation passes, you can process the form data further
        // For now, let's just print the submitted data
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
    } else {
        // If validation fails, you can handle the error accordingly
        echo "Error: Email and password are required.";
    }
}
?>
