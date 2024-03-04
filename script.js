let slideIndex = 0;
showSlide(slideIndex);

function prevSlide() {
  showSlide(slideIndex -= 1);
}

function nextSlide() {
  showSlide(slideIndex += 1);
}

function showSlide(n) {
  const slides = document.getElementsByClassName("slide");
  
  if (n >= slides.length) {
    slideIndex = 0;
  }
  if (n < 0) {
    slideIndex = slides.length - 1;
  }
  
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  slides[slideIndex].style.display = "block";  
}

//product slide//
let productIndex = 0;
    const productSlides = document.querySelectorAll('.product-slide');
    showProductSlide();

    function showProductSlide() {
        for (let i = 0; i < productSlides.length; i++) {
            productSlides[i].style.display = 'none';
        }
        productIndex++;
        if (productIndex > productSlides.length) {
            productIndex = 1;
        }
        productSlides[productIndex - 1].style.display = 'block';
        setTimeout(showProductSlide, 5000); // Change slide every 5 seconds
    };
      