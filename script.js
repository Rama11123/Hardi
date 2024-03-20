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
//memuat data ke cart-script//
function addToCart(name, price) {
  // Mendapatkan data keranjang belanja dari local storage atau membuat array baru jika belum ada
  let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

  // Menambahkan barang ke dalam keranjang belanja
  cartItems.push({ name, price });

  // Menyimpan kembali data keranjang belanja ke local storage
  localStorage.setItem('cart', JSON.stringify(cartItems));
}

