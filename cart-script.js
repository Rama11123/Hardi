document.addEventListener('DOMContentLoaded', function() {
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    let total = 0;
    const cartElement = document.getElementById('cart-items');
    cartItems.forEach(item => {
      const li = document.createElement('li');
      li.textContent = `${item.name} - $${item.price}`;
      cartElement.appendChild(li);
      total += item.price;
    });
    const totalElement = document.getElementById('cart-total');
    totalElement.textContent = total.toFixed(2);
  });
  