<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $data = "$name|$email|$message\n";
    
    file_put_contents('contacts.txt', $data, FILE_APPEND);
    
    echo "<p class='success'>Contact information submitted successfully</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form - Success</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Thank You!</h1>
        <p>Your message has been sent successfully. <a href="index.php">Go back</a></p>
    </div>
</body>
</html>
