<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
	<script src="https://kit.fontawesome.com/eb30e64dc7.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"> </script>
	<script src="email.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="contact.css">
</head>

<body>
    <header>
        <div class="logo">
            <h2>Kristine's Beauty Station</h2>
        </div>
        <nav>
            <?php include 'navigation.php'; ?>
        </nav>
    </header>

    <main>

    <div id="contact-container">
        <div id="contact-info">
                <br>
                <h3>Reach Us</h3>
                <div style="margin-bottom: 20px;"></div>
                <div><i class="fa-brands fa-facebook-f fa-2xl"></i><a href="https://www.facebook.com/yourserviceTINE" class = "cinfo">https://www.facebook.com/yourserviceTINE</a></div>
                <div><i class="fa-solid fa-at fa-2xl"></i><a href="mailto:kristinecamillezamora@gmail.com" class = "cinfo">kristinecamillezamora@gmail.com</a></div>
                <div><i class="fa-solid fa-phone fa-2xl"></i><a href="tel:+639302112693" class = "cinfo">0930 211 2693</a></div>
                <div><i class="fa-solid fa-location-dot fa-2xl"></i> <a href = "https://maps.app.goo.gl/tP8fiDRNRC4zM8Xh9" class = "cinfo">Royal South Village, Talon 5, Las Piñas, Philippines</a></div>
        </div>

        <div id="contact-form">
            <h3>Please fill out the form below to send us an email.</h3>
            <div style="margin-bottom: 20px;"></div>
            <form action="#" method="post">
                <input type="text" id="name" name="name" class = "active" placeholder = "NAME" required>
                <input type="email" id="email" name="email" class = "active" placeholder = "EMAIL" required>
                <input type="text" id="subject" name="subject" class = "active" placeholder = "SUBJECT" required>
                <textarea id="message" name="message" class = "active" placeholder = "MESSAGE" required></textarea>
                <div class="submit-btn">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    
    </main>

</body>

</html>
