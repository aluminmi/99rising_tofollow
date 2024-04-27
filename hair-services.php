<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hair Services | Kristine's Beauty Station</title>
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
        <section class="service-details">
            <div class="service-item">
                <div class="service-image">
                    <img src="hair-cut.jpg" alt="Hair Cut">
                </div>
                <div class="service-description">
                    <h2>Haircut</h2>
                    <p>A classic haircut to suit your style.</p>
                    <p>Price: PHP 100</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="hot-oil.jpg" alt="Hot Oil">
                </div>
                <div class="service-description">
                    <h2>Hot Oil</h2>
                    <p>Deep conditioning treatment for nourished hair.</p>
                    <p>Price: PHP 250</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="hair-spa.jpg" alt="Hair Spa">
                </div>
                <div class="service-description">
                    <h2>Hair Spa</h2>
                    <p>Relaxing spa treatment for your hair and scalp.</p>
                    <p>Price: PHP 350</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="keratin-treatment.jpg" alt="Keratin Treatment">
                </div>
                <div class="service-description">
                    <h2>Keratin Treatment</h2>
                    <p>Smoothing treatment to reduce frizz and add shine.</p>
                    <p>Price: PHP 450</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="power-dose.jpg" alt="Power Dose">
                </div>
                <div class="service-description">
                    <h2>Power Dose</h2>
                    <p>Intensive treatment for stronger and healthier hair.</p>
                    <p>Price: PHP 500</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="hair-color.jpg" alt="Hair Color">
                </div>
                <div class="service-description">
                    <h2>Hair Color</h2>
                    <p>Change your look with a vibrant hair color.</p>
                    <p>Starting Price: PHP 500</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="bleaching.jpg" alt="Bleaching">
                </div>
                <div class="service-description">
                    <h2>Bleaching</h2>
                    <p>Lighten your hair for a bold new style.</p>
                    <p>Starting Price: PHP 700</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="highlights.jpg" alt="Highlights">
                </div>
                <div class="service-description">
                    <h2>Highlights</h2>
                    <p>Add dimension and brightness to your hair.</p>
                    <p>Starting Price: PHP 700</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="brazilian-botox.jpg" alt="Brazilian Botox">
                </div>
                <div class="service-description">
                    <h2>Brazilian Botox</h2>
                    <p>Revitalize your hair with a botox treatment.</p>
                    <p>Starting Price: PHP 800</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="brazilian-blowout.jpg" alt="Brazilian Blowout">
                </div>
                <div class="service-description">
                    <h2>Brazilian Blowout</h2>
                    <p>Smooth and straighten your hair with this treatment.</p>
                    <p>Starting Price: PHP 800</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="balayage.jpg" alt="Balayage">
                </div>
                <div class="service-description">
                    <h2>Balayage</h2>
                    <p>Create a natural-looking hair color blend.</p>
                    <p>Starting Price: PHP 700</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="rebond.jpg" alt="Rebond">
                </div>
                <div class="service-description">
                    <h2>Rebond</h2>
                    <p>Straighten and smoothen your hair permanently.</p>
                    <p>Starting Price: PHP 1000</p>
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