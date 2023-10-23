const products = [
    { id: 1, name: "Smartphone", price: 500.00 },
    { id: 2, name: "Laptop", price: 1000.00 },
    { id: 3, name: "Tablet", price: 300.00 },
    { id: 3, name: "Tablet", price: 300.00 },
    { id: 3, name: "Tablet", price: 300.00 },
    { id: 3, name: "Tablet", price: 300.00 },
    { id: 3, name: "Tablet", price: 300.00 },
    { id: 3, name: "Tablet", price: 300.00 },
];

const cart = [];

function renderProducts() {
    const productsSection = document.querySelector('.products');
    productsSection.innerHTML = '';

    products.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('product');
        productDiv.innerHTML = `
            <img src="product-image.jpg" alt="${product.name}">
            <h2>${product.name}</h2>
            <p>R$ ${product.price.toFixed(2)}</p>
            <button class="button" onclick="addToCart(${product.id})">Adicionar ao Carrinho</button>
        `;
        productsSection.appendChild(productDiv);
    });
}

function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    cart.push(product);
    updateCart();
}

function updateCart() {
    const cartItems = document.querySelector('#cart-items');
    const cartTotal = document.querySelector('#cart-total');
    cartItems.innerHTML = '';
    let total = 0;

    cart.forEach(item => {
        const cartItem = document.createElement('li');
        cartItem.textContent = item.name;
        cartItems.appendChild(cartItem);
        total += item.price;
    });

    cartTotal.textContent = total.toFixed(2);
}

renderProducts();
