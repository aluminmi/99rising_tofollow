<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Kristine's Beauty Station</title>
    <link rel="stylesheet" href="homestyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="reviewstyle.css?v=<?php echo time(); ?>">
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
        <div class="slider">
            <div class="wrapper">
                <div class="left">
                    <div>
                        <h2>One of the best Nail Technicians in the South!</h2>
                        <p>One of the pioneers here in Pilar, Kristine has been in service for 10 years.</p>
                    </div>
                    <div>
                        <h2>Homebased Beautician in Las Pinas </h2>
                        <p> Located at Royal South, Pilar Village, Las Pinas City, We bring the service to you right at your doorstep.</p>
                    </div>
                    <div>
                        <h2>Affordable Care for your Hair and Nails!</h2>
                        <p>For as low as 100 pesos, you can get your dream self!</p>
                    </div>
                </div>
                <div class="right">
                    <div>
                        <img src="nail-art-1.jpg" alt="Nail Art 1">
                    </div>
                    <div>
                        <img src="hair-1.jpg" alt="Hair Service 1">
                    </div>
                    <div>
                        <img src="nail-art-2.jpg" alt="Hair Service 1">
                    </div>
                    <div>
                        <img src="nail-art-3.jpg" alt="Hair Service 1">
                    </div>
                </div>
            </div>
        </div>
        <!-- Whole Review Page -->
        <div class="Wholepage">
            <div class="ReviewsInfoBox" id="RIB">
                <div class="ReviewsBox" id="reviewsBox">
                    <div>
                        <label class="reviewlabel">Reviews</label>
                        <label class="totalreviewers">Total Reviewers: <em style="font-size: 20" id="totalReviewLabel">10</em></label>
                    </div>
                    <div class="reviews">
                        <div class="reviewstarname">
                            <label class="ReviewName1" id="reviewName1">Jamie Smith</label>
                            <div class="R1stars">
                                <label>Rated:</label>
                                <label id="ratenum1">5</label>  
                                <label class="r1star" id="r1star1">&#9733;</label>
                                <label class="r1star" id="r1star2">&#9733;</label>
                                <label class="r1star" id="r1star3">&#9733;</label>
                                <label class="r1star" id="r1star4">&#9733;</label>
                                <label class="r1star" id="r1star5">&#9733;</label>
                            </div>
                        </div>
                        <p class="Review">One of the best nail Technicians in Las Pi!</p>
                        <div class="seenheart1">
                            <label class="heart2" id="heartsymbol1">&#9829;</label>
                            <label class="seenheartNum" id="heartnum1">0</label>
                            <label class="smile2" id="smilesymbol1">&#9786;</label>
                            <label class="seenheartNum" id="smilenum1">0</label>
                        </div>
                    </div>
                    <div class="reviews">
                        <div class="reviewstarname">
                            <label class="ReviewName2" id="reviewName2">Isabella Cyrille</label>
                            <div class="R2stars">
                                <label>Rated:</label>
                                <label id="ratenum2">4</label> 
                                <label class="r2star" id="r2star1">&#9733;</label>
                                <label class="r2star" id="r2star2">&#9733;</label>
                                <label class="r2star" id="r2star3">&#9733;</label>
                                <label class="r2star" id="r2star4">&#9733;</label>
                                <label class="r2star" id="r2star5">&#9733;</label>
                            </div>
                        </div>
                        <p class="Review">She's good at doing her job. </p>
                        <div class="seenheart2">
                            <label class="heart2" id="heartsymbol2">&#9829;</label>
                            <label class="seenheartNum" id="heartnum2">0</label>
                            <label class="smile2" id="smilesymbol2">&#9786;</label>
                            <label class="seenheartNum" id="smilenum2">0</label>
                        </div>
                    </div>
                    <div class="reviews">
                        <div class="reviewstarname">
                            <label class="ReviewName3" id="reviewName3">Anya Dela Cruz</label>
                            <div class="R3stars">
                                <label>Rated:</label>
                                <label id="ratenum3">3</label> 
                                <label class="r3star" id="r3star1">&#9733;</label>
                                <label class="r3star" id="r3star2">&#9733;</label>
                                <label class="r3star" id="r3star3">&#9733;</label>
                                <label class="r3star" id="r3star4">&#9733;</label>
                                <label class="r3star" id="r3star5">&#9733;</label>
                            </div>
                        </div>
                        <p class="Review">My nail chipped off immediately. Probably my fault, though. </p>
                        <div class="seenheart3">
                            <label class="heart3" id="heartsymbol3">&#9829;</label>
                            <label class="seenheartNum" id="heartnum3">0</label>
                            <label class="smile3" id="smilesymbol3">&#9786;</label>
                            <label class="seenheartNum" id="smilenum3">0</label>
                        </div>
                    </div>
                    <div class="ButtonOpen" id="buttonBox">
                        <br><br><br>
                        <button class="reviewbtn" id="reviewformbtn">Open Review Form</button>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <!-- Review Form -->
        <div id="lightbox" class="lightbox">
            <div class="lightbox-content">
                <button class="lightbox-close" onclick="closeLightbox()">&#10006;</button>
                <form action="" method="post" id="reviewform">
                    <fieldset>
                        <legend style="text-align: center;">Review Form for Kristine's Beauty Station </legend>

                        <label class="label" for="name">Name (optional):</label>
                        <input class="reviewtxt" type="text" id="name" name="name" maxlength="25">

                        <label class="label" for="feedback">Feedback:</label>
                        <textarea class="reviewtxtarea" id="feedback" name="feedback" rows="5" maxlength="200"></textarea>

                        <label class="label" for="rating">Rating:</label>
                        <div class="rating">
                            <input type="radio" id="star1" name="rating" value="5" required>
                            <label class="label" for="star1">&#9733;</label>
                            <input type="radio" id="star2" name="rating" value="4">
                            <label class="label" for="star2">&#9733;</label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label class="label" for="star3">&#9733;</label>
                            <input type="radio" id="star4" name="rating" value="2">
                            <label class="label" for="star4">&#9733;</label>
                            <input type="radio" id="star5" name="rating" value="1">
                            <label class="label" for="star5">&#9733;</label>
                        </div>
                        <br>
                        <div class="submit">
                            <input class="formSubmit" type="submit" value="Submit" id="reloadButton">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <section class="hero">
            <img src="logo.png" alt="Logo" class="logo-image">
            <h2>Sit back, relax, & pamper.</h2>
            <a href="#" class="btn">Book an Appointment</a>
        </section>

    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Kristine's Beauty Station. All rights reserved.</p>
    </footer>

    <script>
        // SLIDESHOW
        let currentSlide = 0;
        let totalSlides = document.querySelectorAll(".slider .wrapper .left > div").length - 1;
        let slideInterval;

        function nextSlide() {
            if (currentSlide === totalSlides) {
                currentSlide = 0;    
            } else {
                currentSlide++; 
            }
            updateSlide();
        }

        function updateSlide() {
            document.querySelector(".slider .wrapper .left div").style.marginTop = (currentSlide * -100) + 'vh';
            document.querySelector(".slider .wrapper .right div").style.marginTop = ((totalSlides - currentSlide) * -100) + 'vh';
        }

        nextSlide();
        slideInterval = setInterval(nextSlide, 3000); 
        document.querySelector(".slider").addEventListener("mouseover", function() {
            clearInterval(slideInterval);
        });
        document.querySelector(".slider").addEventListener("mouseout", function() {
            slideInterval = setInterval(nextSlide, 3000);
        });

        // REVIEW FORM
        function showLightbox() {
            var lightbox = document.getElementById('lightbox');
            lightbox.style.opacity = 0;
            lightbox.style.display = 'flex';
            var distance = -100;
            var interval = setInterval(function() {
                distance += 5;
                lightbox.style.transform = 'translateY(' + distance + 'px)';
                lightbox.style.opacity = parseFloat(lightbox.style.opacity) + 0.05;
                if (distance >= 0) {
                    clearInterval(interval);
                }
            }, 10);
        }

        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
        }

        function Exit() {
            document.getElementById('lightbox').style.display = 'none';
        }

        function handleClick() {
            this.classList.toggle('clicked');
            var numberLabel = this.nextElementSibling;
            var currentNumber = parseInt(numberLabel.textContent, 10);

            console.log(numberLabel)
            console.log(currentNumber)

            if (this.classList.contains('pindot')) {

                var newNumber = currentNumber - 1;
                numberLabel.textContent = newNumber;
                this.classList.remove('pindot');

            } else {
                this.classList.add('pindot');
                var newNumber = currentNumber + 1;
                numberLabel.textContent = newNumber;
            }
            console.log('Element clicked!');
        }

        var hearts = [];
        var smiles = [];

        for (var i = 1; i <= 3; i++) {
            hearts.push(document.getElementById('heartsymbol' + i));
            smiles.push(document.getElementById('smilesymbol' + i));
        }

        for (var i = 0; i < 3; i++) {
            hearts[i].addEventListener('click', handleClick);
            smiles[i].addEventListener('click', handleClick);
        }

        document.getElementById('reviewformbtn').addEventListener('click', showLightbox);

        // Prevent slideshow in review box
        const reviewBox = document.querySelector(".Wholepage");
        reviewBox.addEventListener("mouseover", function() {
            clearInterval(slideInterval);
        });
        reviewBox.addEventListener("mouseout", function() {
            slideInterval = setInterval(nextSlide, 3000);
        });
    </script>
</body>

</html>
