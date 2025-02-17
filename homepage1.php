<?php
session_start();
$conn = new mysqli('localhost', 'root', 'root', 'cafeteria', 8889);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Cafeteria</title>
    <meta name="description" content="Order your meal easily from the university cafeteria">
</head>
<body>

    <header>
        <div class="logo">
            <a href="home.php"><img src="C:/University cafeteria/University cafeteria1.png" alt="Cafeteria Logo" width="120"></a>
        </div>
        <nav>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="Profile.php">Profile</a></li>
            </ul>
        </nav>
    </header>

    <section id="popular-dishes">
        <h2><a href="menu.php" style="text-decoration: none; color: inherit;">Popular Dishes</a></h2>
        <div class="dish-grid">
            <div class="dish">
                <img src="dish1.png" alt="Dish 1">
                <p>Dish 1 Description</p>
            </div>
            <div class="dish">
                <img src="dish2.png" alt="Dish 2">
                <p>Dish 2 Description</p>
            </div>
            <div class="dish">
                <img src="dish3.png" alt="Dish 3">
                <p>Dish 3 Description</p>
            </div>
            <div class="dish">
                <img src="dish4.png" alt="Dish 4">
                <p>Dish 4 Description</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div>
                <h3>📞 Contact Us</h3>
                <p>📍 Address: University X - Cafeteria Building</p>
                <p>📧 Email: cafe@university.com</p>
                <p>📞 Phone: 055-123-4567</p>
                <p>&copy; 2025 University Cafeteria - All rights reserved</p>
            </div>
            <div>
                <h3>📍 Our Location</h3>
                <iframe 
                    src="https://seu.edu.sa/" 
                    width="300" 
                    height="200" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </footer>

    <script src="main.js"></script>
</body>
</html>
