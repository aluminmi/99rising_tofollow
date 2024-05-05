<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services | Kristine's Beauty Station</title>
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
        <section class="services">
            <h2>Our Services</h2>
            <div class="service-category">
                <a href="hair-services.php" class="service-link">
                    <h3><u>Hair Services</u></h3>
                </a>
                <div class="service-type">
                    <img src="hair-cut.jpg" alt="Hair Cut">
                    <p>Hair Cut</p>
                </div>
                <div class="service-type">
                    <img src="hair-color.jpg" alt="Hair Color">
                    <p>Hair Color</p>
                </div>
                <div class="service-type">
                    <img src="others.jpg" alt="Others">
                    <p>Others</p>
                </div>
            </div>
            <div class="service-category">
                <a href="nail-services.php" class="service-link">
                    <h3><u>Nail Services</u></h3>
                </a>
                <div class="service-type">
                    <img src="general.jpg" alt="General">
                    <p>General</p>
                </div>
                <div class="service-type">
                    <img src="gel-extension.jpg" alt="Soft Gel Extension">
                    <p>Soft Gel Extension</p>
                </div>
                <div class="service-type">
                    <img src="gel-polish.jpg" alt="Gel Polish">
                    <p>Gel Polish</p>
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