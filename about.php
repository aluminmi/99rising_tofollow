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
                        <img src="logo.png" alt="Business Image">
                    </div>
                    <div class="business-details">
                        <h3>About the Business</h3>
                        <p>Kristine's Beauty Station is a self-managed by Kristine Zamora, an employee for almost a decade in a small beauty salon who decided to fly solo. The business offers multiple beauty care, focusing on hair and nails. It offers home service catering the needs of the residents in Pilar Village, Las Pinas City.</p>
                    </div>
                </div>
                <div class="separator"></div>
                <div class="owner-info">
                    <div class="owner-image">
                        <img src="owner.jpg" alt="Owner Image">
                    </div>
                    <div class="owner-details">
                        <h3>About the Owner</h3>
                        <p>Kristine Camille Zamora is a beauty technician residing in Royal South Village, Las Pinas City. A mother of two kids, Kristine manages her business while also taking care of her family. With her vast experience in the beauty industry for over ten years, Kristine has honed her skills to perfection.

                        Moreover, Kristine's journey began in a nail salon, where she dedicated her time and effort to mastering the art of nail care. However, she eventually felt the urge to break free from the constraints of employment and embark on her entrepreneurial journey.</p>
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
