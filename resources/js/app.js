// ===== CARRINHO DE COMPRAS =====

class Cart {
    constructor() {
        this.items = JSON.parse(localStorage.getItem('cart')) || [];
    }

    addItem(product) {
        const existingItem = this.items.find(item =>
            item.id === product.id && item.color === product.color
        );

        if (existingItem) {
            existingItem.quantity += product.quantity;
        } else {
            this.items.push(product);
        }
        this.save();
    }

    removeItem(id, color) {
        this.items = this.items.filter(item => !(item.id === id && item.color === color));
        this.save();
    }

    updateQuantity(id, color, quantity) {
        const item = this.items.find(item => item.id === id && item.color === color);
        if (item) {
            item.quantity = Math.max(1, quantity);
            this.save();
        }
    }

    getTotal() {
        return this.items.reduce((total, item) => total + (item.price * item.quantity), 0);
    }

    save() {
        localStorage.setItem('cart', JSON.stringify(this.items));
    }

    clear() {
        this.items = [];
        this.save();
    }
}

const cart = new Cart();

// Ajouter produto ao carrinho (para collection-do e fiche-produit)
function addToCart(productId, productName, productPrice, productImage, collection = 'DO') {
    const quantity = parseInt(document.getElementById('qty')?.textContent || 1);
    const colorBtn = document.querySelector('.couleur-btn[style*="border-color:#3D2314"]') ||
                     document.querySelector('.couleur-btn.active');
    const color = colorBtn?.getAttribute('title') || 'Padrão';

    const product = {
        id: productId,
        name: productName,
        price: productPrice,
        image: document.getElementById('main-img')?.src || productImage,
        quantity: quantity,
        color: color,
        collection: collection
    };

    cart.addItem(product);

    // Mostrar confirmação
    const btn = event.target;
    const originalText = btn.textContent;
    btn.textContent = '✓ Ajouté au panier';
    btn.style.background = '#4CAF50';

    setTimeout(() => {
        btn.textContent = originalText;
        btn.style.background = '#E8820C';
    }, 2000);
}

// Atualizar exibição do carrinho na página panier.blade.php
function updateCartDisplay() {
    const cartEmpty = document.getElementById('panier-vide');
    const cartItems = document.getElementById('panier-items');
    const cartRecap = document.getElementById('panier-recap');

    if (cart.items.length === 0) {
        cartEmpty?.classList.remove('hidden');
        cartItems?.classList.add('hidden');
        cartRecap?.classList.add('hidden');
        return;
    }

    cartEmpty?.classList.add('hidden');
    cartItems?.classList.remove('hidden');
    cartRecap?.classList.remove('hidden');

    // Gerar HTML dos itens do carrinho
    let html = '';
    cart.items.forEach((item, index) => {
        const subtotal = item.price * item.quantity;
        html += `
            <div class="bg-white rounded-2xl p-4 shadow-sm flex gap-4">
                <img src="${item.image}" alt="${item.name}" class="w-24 h-24 object-cover rounded-lg">
                <div class="flex-1">
                    <h3 class="font-bold text-sm" style="color:#3D2314">${item.name}</h3>
                    <p class="text-xs text-gray-500 mb-2">Cor: <span class="font-semibold">${item.color}</span></p>
                    <p class="text-xs text-gray-500">Coleção ${item.collection}</p>
                    <p class="font-bold text-sm mt-2" style="color:#3D2314">${item.price.toLocaleString('fr-FR')} FCFA</p>
                </div>
                <div class="flex flex-col items-end justify-between">
                    <button onclick="removeFromCart(${item.id}, '${item.color}')" class="text-red-500 text-xs hover:text-red-700">
                        ✕ Remover
                    </button>
                    <div class="flex items-center border rounded">
                        <button onclick="updateQty(${item.id}, '${item.color}', -1)" class="px-2 py-1 text-xs">−</button>
                        <span class="px-3 py-1 text-xs font-semibold">${item.quantity}</span>
                        <button onclick="updateQty(${item.id}, '${item.color}', 1)" class="px-2 py-1 text-xs">+</button>
                    </div>
                    <p class="font-bold text-sm mt-2" style="color:#E8820C">${subtotal.toLocaleString('fr-FR')} FCFA</p>
                </div>
            </div>
        `;
    });

    if (cartItems) {
        cartItems.innerHTML = html;
    }

    // Atualizar recapitulatif
    const total = cart.getTotal();
    const sousTotal = document.getElementById('sous-total');
    const totalEl = document.getElementById('total');

    if (sousTotal) sousTotal.textContent = total.toLocaleString('fr-FR') + ' FCFA';
    if (totalEl) totalEl.textContent = total.toLocaleString('fr-FR') + ' FCFA';
}

function removeFromCart(id, color) {
    if (confirm('Tem certeza que deseja remover este item?')) {
        cart.removeItem(id, color);
        updateCartDisplay();
    }
}

function updateQty(id, color, change) {
    const item = cart.items.find(item => item.id === id && item.color === color);
    if (item) {
        cart.updateQuantity(id, color, item.quantity + change);
        updateCartDisplay();
    }
}

// Inicializar o carrinho quando a página panier.blade.php for carregada
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('panier-vide')) {
        updateCartDisplay();
    }
});

// Menu lateral (para todas as páginas)
document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('menuBtn');
    const closeMenu = document.getElementById('closeMenu');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    if (menuBtn && sidebar) {
        menuBtn.onclick = function() {
            sidebar.style.left = "0";
            if (overlay) overlay.classList.remove("hidden");
        };
    }

    if (closeMenu && sidebar) {
        closeMenu.onclick = function() {
            sidebar.style.left = "-300px";
            if (overlay) overlay.classList.add("hidden");
        };
    }

    if (overlay && sidebar) {
        overlay.onclick = function() {
            sidebar.style.left = "-300px";
            overlay.classList.add("hidden");
        };
    }
});
