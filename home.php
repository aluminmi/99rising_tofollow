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
        <section class="hero">
        	<img src="logo.png" alt="Logo" class="logo-image">
            <h2>Sit back, relax, & pamper.</h2>
            <a href="#" class="btn">Book an Appointment</a>
        </section>
        <section class="gallery">
             <img src="nail-art-1.jpg" alt="Nail Art 1">
             <img src="nail-art-2.jpg" alt="Nail Art 2">
             <img src="hair-1.jpg" alt="Hair Service 1">
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Kristine's Beauty Station. All rights reserved.</p>
    </footer>
</body>
</html>