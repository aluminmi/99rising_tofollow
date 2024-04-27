<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Kristine's Beauty Station</title>
    <link rel="stylesheet" href="homestyle.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo">
            <h1>Kristine's Beauty Station</h1>
        </div>
        <nav>
            <?php require 'navigation.php'; ?>
        </nav>
    </header>
    <main>
        <section class="about">
            <h2>About Us</h2>
            <div class="about-content">
                <div class="business-info">
                    <div class="business-image">
                        <img src="business.jpg" alt="Business Image">
                    </div>
                    <div class="business-details">
                        <h3>About Our Business</h3>
                        <p>Information about the business...</p>
                    </div>
                </div>
                <div class="separator"></div>
                <div class="owner-info">
                    <div class="owner-image">
                        <img src="owner.jpg" alt="Owner Image">
                    </div>
                    <div class="owner-details">
                        <h3>About the Owner</h3>
                        <p>Information about the owner...</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero">
            <img src="logo.png" alt="Logo" class="logo-image">
            <h2>Sit back, relax, & pamper.</h2>
            <a href="#" class="btn">Book an Appointment</a>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Kristine's Beauty Station. All rights reserved.</p>
    </footer>
    <script src="main.js"></script>
</body>
</html>
