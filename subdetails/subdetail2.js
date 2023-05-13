const hotel = localStorage.getItem('hotel');
const checkin = localStorage.getItem('checkin');
const checkout = localStorage.getItem('checkout');
const price = localStorage.getItem('price');
const name = localStorage.getItem('name');
const card = localStorage.getItem('card');
const expiration = localStorage.getItem('expiration');

document.getElementById('hotel').textContent = hotel;
document.getElementById('checkin').textContent = checkin;
document.getElementById('checkout').textContent = checkout;
document.getElementById('price').textContent = price;
document.getElementById('name').textContent = name;
document.getElementById('card').textContent = card;
document.getElementById('expiration').textContent = expiration;