let slider = document.querySelector(".slider");
let currentSlide = 0;
let totalSlides = slider.querySelectorAll(".wrapper .left > div").length - 1;
let slideInterval = setInterval(nextSlide, 4000); 

function nextSlide() {
    if (currentSlide === totalSlides) {
        currentSlide = 0;    
    } else {
        currentSlide++; 
    }
    updateSlide();
}

function updateSlide() {
    slider.querySelector(".wrapper .left div").style.marginTop = (currentSlide * -100) + 'vh';
    slider.querySelector(".wrapper .right div").style.marginTop = ((totalSlides - currentSlide) * -100) + 'vh';
}

// Stop automatic sliding on hover
slider.addEventListener("mouseover", function() {
    clearInterval(slideInterval);
});

// Resume automatic sliding when mouse leaves
slider.addEventListener("mouseout", function() {
    slideInterval = setInterval(nextSlide, 5000);
});
