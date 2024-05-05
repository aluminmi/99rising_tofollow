<!DOCTYPE html>
<html lang="en">
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
            <?php include 'navigation.php'; ?>
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

        <br><br><br>
        <!-- Whole Review Page -->
        <div class = "title">
                 <label class="reviewlabel">Reviews</label>
        </div>
        <div class="Wholepage">
            <div class="ReviewsInfoBox" id="RIB">
                <div class="ReviewsBox" id="reviewsBox">
                    <!-- New Review Entry -->
                    <div id="newReviewEntry" style="display: none;">
                        <h2>New Entry</h2>
                    </div>
                    <div class="reviews">
                        <div class="reviewstarname">
                            <label class="ReviewName1" id="reviewName1">Jamie Smith</label>
                            <div class="R1stars">
                                <label>Rated:</label>
                                <label id="ratenum1">5 &#9733;</label>  
                            </div>
                        </div>
                        <p class="Review">One of the best nail technicians in Las Pi!</p>
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
                                <label id="ratenum2">4 &#9733;</label> 
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
                                <label id="ratenum3">3 &#9733;</label>
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
    document.querySelector(".slider .wrapper").addEventListener("mouseover", function () {
        clearInterval(slideInterval);
    });
    document.querySelector(".slider .wrapper").addEventListener("mouseout", function () {
        slideInterval = setInterval(nextSlide, 3000);
    });



  /* Form */
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

    /* Hearts and Smiles*/
    var hearts = [];
    var smiles = [];

    for (var i = 1; i <= 3; i++) {
      var heart = document.querySelector('#heartsymbol' + i);
      var smile = document.querySelector('#smilesymbol' + i);
      
      if (heart) {
        hearts.push(heart);
      }
      
      if (smile) {
        smiles.push(smile);
      }
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

    hearts.forEach(function(heart) {
      heart.addEventListener('click', handleClick);
    });

    smiles.forEach(function(smile) {
      smile.addEventListener('click', handleClick);
    });

    /* Total Reviews*/
    var ratings = [];
    var totalReviews = Math.floor(Math.random() * 15) + 1;
    var sum = generateTotal();
    var addedRev = 3

    /*Random Total Reviews*/
    function generateTotal() {
      for (var i = 0; i < totalReviews; i++) {
        var rating = Math.floor(Math.random() * 5) + 1;
        ratings.push(rating);
      }

      // Calculate the sum of ratings
      var sum = ratings.reduce((a, b) => a + b, 0);
      return sum;
    }

    function placeRandoms() {
      var names = ['Juan Dela Cruz','Maria Santos','Pedro Reyes','Ana Gonzales','Jose Fernandez','Cristina Lim','Manuel Tan','Teresa Ocampo','Ricardo Cruz',
        'Sofia Reyes','Luisa Ramirez','Miguel Sy','Angelica Castro'];
      var rr1 = ['I had a disappointing experience at this food stall. The food was tasteless and poorly cooked. The portion size was also very small, leaving me hungry. I would not recommend it to anyone.', 'I was highly disappointed with the food stalls offerings. The service was slow, and the staff seemed disinterested. The food itself was bland and lacked any flavor. I regretted spending my money there.'];
      var rr2 = ['The food stall had an average selection of dishes, but the taste was just okay. It did not impress me, but it also did not leave a bad taste in my mouth. Its an average place to grab a quick bite.','I found the food stall to be quite mediocre. The food lacked flavor and freshness, and the presentation was unappealing. Its not the worst place to eat, but there are definitely better options out there.'];
      var rr3 = ['',''];
      var rr4 = ['',''];
      var rr5 = ['',''];

    }

    function placeTotalReviews(add) {
      var label = document.getElementById('totalReviewLabel');
      label.textContent = (totalReviews+add).toString();
    }

    /* Total Star Numbercode*/
    function totalStar() {
      var label1 = parseInt(document.getElementById("ratenum1").textContent, 10);
      var label2 = parseInt(document.getElementById("ratenum2").textContent, 10);
      var label3 = parseInt(document.getElementById("ratenum3").textContent, 10);
      var average = Math.round((sum+label1+label2+label3)/(totalReviews+addedRev));
      var totalrate = document.getElementById("totalrating");
      totalrate.textContent = average.toString();
    }

    /* Star Coloring Rating*/
    function starColor1() {
      var label = parseInt(document.getElementById("ratenum1").textContent, 10);
      var stars1 = document.getElementsByClassName("r1star")
      
      for (var i = 0; i < stars1.length; i++) {
        if (i < label) {
          stars1[i].style.color = "var(--green)";
        } else {
          stars1[i].style.color = "var(--black)";
        }
      }
    }

    function starColor2() {
      var label = parseInt(document.getElementById("ratenum2").textContent, 10);
      var stars2 = document.getElementsByClassName("r2star")

      for (var i = 0; i < stars2.length; i++) {
        if (i < label) {
          stars2[i].style.color = "var(--green)";
        } else {
          stars2[i].style.color = "var(--black)";
        }
      }
    }

    function starColor3() {
      var label = parseInt(document.getElementById("ratenum3").textContent, 10);
      var stars3 = document.getElementsByClassName("r3star")

      for (var i = 0; i < stars3.length; i++) {
        if (i < label) {
          stars3[i].style.color = "var(--green)";
        } else {
          stars3[i].style.color = "var(--black)";
        }
      }
    }

    function totalstarColor() {
      var label = parseInt(document.getElementById("totalrating").textContent, 10);
      var tstars = document.getElementsByClassName("tstar")

      for (var i = 0; i < tstars.length; i++) {
        if (i < label) {
          tstars[i].style.color = "var(--yellow-gold)";
        } else {
          tstars[i].style.color = "var(--black)";
        }
      }
    }


    /* Getting Form info and putting it per review box */
    function getFormStar() {
      var valueSelected = 0;
      var radioBTN = document.getElementsByName('rating');

      for (var i = 0; i < radioBTN.length; i++) {
        if (radioBTN[i].checked) {
          valueSelected = radioBTN[i].value;
          break;
        }
    }
      return valueSelected;
    }

    function getFormReview() {
      var reviewInput = document.getElementById('feedback').value;
      if (reviewInput === '') {
        return 'Has not given any review description for the food stall.';
      } else
        return reviewInput;
    }

    function getFormName() {
      var nameInput = document.getElementById('name').value;
      if (nameInput === '') {
        return 'Anonymous';
      } else
        return nameInput;
    }

    
    function placingNames(name) {
      var nameArray = [
      document.getElementById('reviewName1'),
      document.getElementById('reviewName2'),
      document.getElementById('reviewName3')
      ];

      nameArray[2].textContent = nameArray[1].textContent;
      nameArray[1].textContent = nameArray[0].textContent;
      nameArray[0].textContent = name.toString();
      
    }

    function placingReview(review) {
      var revArray = document.getElementsByClassName('Review');

      revArray[2].textContent = revArray[1].textContent;
      revArray[1].textContent = revArray[0].textContent;
      revArray[0].textContent = review.toString();
    }

    function placingStar(stars) {
      var starArray = [
      document.getElementById('ratenum1'),
      document.getElementById('ratenum2'),
      document.getElementById('ratenum3')
      ];

      starArray[2].innerHTML = starArray[1].innerHTML;
      starArray[1].innerHTML = starArray[0].innerHTML;
      starArray[0].innerHTML = stars.toString() + " &#9733;";
      sum += parseInt(stars, 10);
    }

    function movingHS() {
      var h1elem = document.getElementById('heartsymbol1');
      var h2elem = document.getElementById('heartsymbol2');
      var h3elem = document.getElementById('heartsymbol3');
      var s1elem = document.getElementById('smilesymbol1');
      var s2elem = document.getElementById('smilesymbol2');
      var s3elem = document.getElementById('smilesymbol3');

      var smileArray = [
      document.getElementById('smilenum1'),
      document.getElementById('smilenum2'),
      document.getElementById('smilenum3')
      ];

      var heartsArray = [
      document.getElementById('heartnum1'),
      document.getElementById('heartnum2'),
      document.getElementById('heartnum3')
      ];

      if (heartsArray[1].textContent == '1') {
        h2elem.classList.remove('clicked');
        h2elem.classList.remove('pindot');
        h3elem.classList.add('clicked');
        h3elem.classList.add('pindot');
      } else {
        h3elem.classList.remove('clicked');
        h3elem.classList.remove('pindot');
      }

      if (smileArray[1].textContent == '1') {
        s2elem.classList.remove('clicked');
        s2elem.classList.remove('pindot');
        s3elem.classList.add('clicked');
        s3elem.classList.add('pindot');
      } else {
        s3elem.classList.remove('clicked');
        s3elem.classList.remove('pindot');
      }

      if (heartsArray[0].textContent == '1') {
        h1elem.classList.remove('clicked');
        h1elem.classList.remove('pindot');
        h2elem.classList.add('clicked');
        h2elem.classList.add('pindot');
      } else {
        h2elem.classList.remove('clicked');
        h2elem.classList.remove('pindot');
      }

      if (smileArray[0].textContent == '1') {
        s1elem.classList.remove('clicked');
        s1elem.classList.remove('pindot');
        s2elem.classList.add('clicked');
        s2elem.classList.add('pindot');
      } else {
        s2elem.classList.remove('clicked');
        s2elem.classList.remove('pindot');
      }

      heartsArray[2].textContent = heartsArray[1].textContent;
      heartsArray[1].textContent = heartsArray[0].textContent;
      heartsArray[0].textContent = '0'.toString();

      smileArray[2].textContent = smileArray[1].textContent;
      smileArray[1].textContent = smileArray[0].textContent;
      smileArray[0].textContent = '0'.toString();
    }

    /* Reset Form*/
    var reviewform = document.getElementById('reviewform');
    var openForm = document.getElementById('reviewformbtn');

    openForm.addEventListener('click', function() {
      reviewform.reset();
      showLightbox();
    });


    /* Button to close the Form when submitting*/
    // Listen to form submission event
    document.getElementById('reviewform').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            var starFormValue = getFormStar();
            var reviewValue = getFormReview();
            var nameValue = getFormName();

            if (starFormValue != 0 && (nameValue != 'Anonymous' || reviewValue != 'Has not given any review description for the food stall.')) {
                addedRev++;
                alert("Review has been submitted");
                closeLightbox();
                //document.querySelector('.lightbox-close').click();
                placingNames(nameValue);
                placingReview(reviewValue);
                placingStar(starFormValue);
                movingHS();
                placeTotalReviews(addedRev);
                starColor1();
                starColor2();
                starColor3();
                totalStar();
                totalstarColor();
                resize();

              } else {
                alert("Pick Your Rating and Write your Name or Review");
              }
            });

    /*Loading Functions ar page reload or startup*/
    window.onload = function() {
      placeTotalReviews(addedRev);
      starColor1();
      starColor2();
      starColor3();
      totalStar();
      totalstarColor();
      resize();
    }

    /* Box make it equal to each other*/

    function resize() {
      var div1 = document.getElementById('reviewsBox');
      var div2 = document.getElementById('tallyBox');
      var div3 = document.getElementById('buttonBox');
      var div4 = document.getElementById('RIB');
  
      var div1Height = div1.clientHeight;

      div2.style.height = div1Height + 'px';
      div3.style.height = div1Height + 'px';
      div4.style.height = div1Height + 25 + 'px';
    }
    window.addEventListener('resize', resize);
    </script>
</body>

</html>
