<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nail Services | Kristine's Beauty Station</title>
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
            <div>
                <h2> General </h2>
            </div>
            <div class="service-item">
                <div class="service-image">
                    <img src="manicure.jpg" alt="Manicure">
                </div>
                <div class="service-description">
                    <h2>Manicure</h2>
                    <p>A cosmetic beauty treatment for the fingernails and hands, including filing, shaping, and polishing.</p>
                    <p>Price: PHP 100</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="pedicure.jpg" alt="Pedicure">
                </div>
                <div class="service-description">
                    <h2>Pedicure</h2>
                    <p>A cosmetic beauty treatment for the toenails and feet, including trimming, shaping, and polishing.</p>
                    <p>Price: PHP 100</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="foot-spa.jpg" alt="Foot Spa">
                </div>
                <div class="service-description">
                    <h2>Foot Spa</h2>
                    <p>A relaxing treatment for the feet, often including soaking, exfoliating, massage, and moisturizing.</p>
                    <p>Price: PHP 300</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="hand-paraffin.jpg" alt="Hand Paraffin">
                </div>
                <div class="service-description">
                    <h2>Hand Paraffin</h2>
                    <p>A moisturizing treatment for the hands, using warm paraffin wax to soften and hydrate the skin.</p>
                    <p>Price: PHP 150</p>
                </div>
            </div>
            
            <div>
                <h2> Soft Gel Extension </h2>
            </div>

            <div class="service-item">
                <div class="service-image">
                    <img src="plain.jpg" alt="Plain">
                </div>
                <div class="service-description">
                    <h2>Plain</h2>
                    <p>Adding length and durability to nails using soft gel without additional design or embellishments.</p>
                    <p>Price: PHP 450</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="basic-design.jpg" alt="Basic Design">
                </div>
                <div class="service-description">
                    <h2>Basic Design</h2>
                    <p>Adding length and durability to nails using soft gel with simple designs or patterns.</p>
                    <p>Price: PHP 500</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="unli-stones.jpg" alt="Unli Stones">
                </div>
                <div class="service-description">
                    <h2>Unli Stones</h2>
                    <p>Adding length and durability to nails using soft gel with unlimited rhinestone embellishments.</p>
                    <p>Price: PHP 600</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="removal.jpg" alt="Removal">
                </div>
                <div class="service-description">
                    <h2>Removal</h2>
                    <p>Safely removing soft gel extensions from nails without damaging the natural nails.</p>
                    <p>Price: PHP 100</p>
                </div>
            </div>

            <div>
                <h2> Gel Polish </h2>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="plainn.jpg" alt="Plain">
                </div>
                <div class="service-description">
                    <h2>Plain</h2>
                    <p>Applying soft gel polish without additional design or embellishments.</p>
                    <p>Price: PHP 300</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="designn.jpg" alt="Design">
                </div>
                <div class="service-description">
                    <h2>Design</h2>
                    <p>Applying soft gel polish with simple designs or patterns.</p>
                    <p>Price: PHP 350</p>
                </div>
            </div>
            
            <div class="service-item">
                <div class="service-image">
                    <img src="unli-stonee.jpg" alt="Unli Stone">
                </div>
                <div class="service-description">
                    <h2>Unli Stone</h2>
                    <p>Applying soft gel polish with unlimited rhinestone embellishments.</p>
                    <p>Price: PHP 400</p>
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