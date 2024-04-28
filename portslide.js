const initSlider = () => {
    const imageList = document.querySelector("#mslider1 .slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll("#mslider1 .slider-wrapper .slide-button");
    const sliderScrollbar = document.querySelector("#mslider1 .slider-scrollbar");
    const scrollbarThumb = sliderScrollbar.querySelector("#mslider1 .scrollbar-thumb");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;


    //copy and change variable names, add id of container to every before queryselector

    // Handle scrollbar thumb drag
    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
        
        // Update thumb position on mouse move
        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;

            // Ensure the scrollbar thumb stays within bounds
            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
            
            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
        }

        // Remove event listeners on mouse up
        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        // Add event listeners for drag interaction
        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });

    // Slide images according to the slide button clicks
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

     // Show or hide slide buttons based on scroll position
    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
    }

    // Update scrollbar thumb position based on image scroll
    const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
    }

    // Call these two functions when image list scrolls
    imageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
    });
}


const initSlider2 = () => {
    const imageList2 = document.querySelector("#mslider2 .slider-wrapper .image-list");
    const slideButtons2 = document.querySelectorAll("#mslider2 .slider-wrapper .slide-button");
    const sliderScrollbar2 = document.querySelector("#mslider2 .slider-scrollbar");
    const scrollbarThumb2 = sliderScrollbar2.querySelector("#mslider2 .scrollbar-thumb");
    const maxScrollLeft2 = imageList2.scrollWidth - imageList2.clientWidth;


    //copy and change variable names, add id of container to every before queryselector

    // Handle scrollbar thumb drag
    scrollbarThumb2.addEventListener("mousedown", (e2) => {
        const startX2 = e2.clientX;
        const thumbPosition2 = scrollbarThumb2.offsetLeft;
        const maxThumbPosition2 = sliderScrollbar2.getBoundingClientRect().width - scrollbarThumb2.offsetWidth;

        // Update thumb position on mouse move
        const handleMouseMove = (e2) => {
            const deltaX2 = e2.clientX - startX2;
            const newThumbPosition2 = thumbPosition2 + deltaX2;

            // Ensure the scrollbar thumb stays within bounds
            const boundedPosition2 = Math.max(0, Math.min(maxThumbPosition2, newThumbPosition2));
            const scrollPosition2 = (boundedPosition2 / maxThumbPosition2) * maxScrollLeft2;

            scrollbarThumb2.style.left = `${boundedPosition2}px`;
            imageList2.scrollLeft = scrollPosition2;
        }

        // Remove event listeners on mouse up
        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        // Add event listeners for drag interaction
        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });

    // Slide images according to the slide button clicks
    slideButtons2.forEach(button2 => {
        button2.addEventListener("click", () => {
            const direction2 = button2.id === "prev-slide2" ? -1 : 1;
            const scrollAmount2 = imageList2.clientWidth * direction2;
            imageList2.scrollBy({ left: scrollAmount2, behavior: "smooth" });
        });
    });

    // Show or hide slide buttons based on scroll position
    const handleSlideButtons = () => {
        slideButtons2[0].style.display = imageList2.scrollLeft <= 0 ? "none" : "flex";
        slideButtons2[1].style.display = imageList2.scrollLeft >= maxScrollLeft2 ? "none" : "flex";
    }

    // Update scrollbar thumb position based on image scroll
    const updateScrollThumbPosition = () => {
        const scrollPosition2 = imageList2.scrollLeft;
        const thumbPosition2 = (scrollPosition2 / maxScrollLeft2) * (sliderScrollbar2.clientWidth - scrollbarThumb2.offsetWidth);
        scrollbarThumb2.style.left = `${thumbPosition2}px`;
    }

    // Call these two functions when image list scrolls
    imageList2.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
    });
}

window.addEventListener("resize", initSlider);
window.addEventListener("load", initSlider);

window.addEventListener("resize", initSlider2);
window.addEventListener("load", initSlider2);