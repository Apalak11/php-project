<?php
include '../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Replace this with your actual form processing and user registration logic
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform data validation and insert user into database
    // Remember to hash the password before storing it

    // Redirect to a different page after successful registration
    header('Location: registration_success.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
        <a href="#" class="logo">
            <img src="" alt="">
        </a>
        <nav class="navbar">
            <a href="./home.php">Home</a>
            <a href="./about.php">About</a>
            <a href="./register.php">Register</a>
        </nav>
</header>

    <div class="container">
        <h1>Register</h1>
        <form method="POST" action="register.php" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="profile_image">Profile Image:</label>
            <input type="file" id="profile_image" name="profile_image" accept="image/*">

            <button type="submit">Register</button>
        </form>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
