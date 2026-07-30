/* =========================================================
   AURA — Shared Cart Engine
   Handles: product catalog, cart state (localStorage),
   add/remove/update, badge sync, and dynamic rendering
   for the cart and checkout pages.
   ========================================================= */

/* ---------- PRODUCT CATALOG ---------- */
const PRODUCTS = {
  "mug-cream": {
    name: "Stoneware Mug, Cream",
    category: "Ceramics",
    price: 28.00,
    image: "https://images.unsplash.com/photo-1584589167171-541ce45f1eea?q=80&w=300&auto=format&fit=crop"
  },
  "linen-throw": {
    name: "Heavy Linen Throw",
    category: "Textiles",
    price: 74.00,
    compareAt: 96.00,
    image: "https://images.unsplash.com/photo-1600585152220-90363fe7e115?q=80&w=300&auto=format&fit=crop"
  },
  "cast-pan": {
    name: "Seasoned Cast Pan",
    category: "Kitchen",
    price: 112.00,
    image: "https://images.unsplash.com/photo-1584982751601-97dcc096659c?q=80&w=300&auto=format&fit=crop"
  },
  "rattan-lamp": {
    name: "Rattan Pendant Lamp",
    category: "Lighting",
    price: 145.00,
    image: "https://images.unsplash.com/photo-1517705008128-361805f42e86?q=80&w=300&auto=format&fit=crop"
  },
  "canvas-tote": {
    name: "Waxed Canvas Tote",
    category: "Carry & Bags",
    price: 88.00,
    image: "https://images.unsplash.com/photo-1591561954557-26941169b49e?q=80&w=300&auto=format&fit=crop"
  },
  "bowl-set": {
    name: "Nesting Bowl Set",
    category: "Ceramics",
    price: 64.00,
    image: "https://images.unsplash.com/photo-1603204077167-71bc6ce4bd25?q=80&w=300&auto=format&fit=crop"
  },
  "wool-throw": {
    name: "Wool Lambswool Throw",
    category: "Textiles",
    price: 130.00,
    image: "https://images.unsplash.com/photo-1509391366360-2e959784a276?q=80&w=300&auto=format&fit=crop"
  },
  "gift-set": {
    name: "The Housewarming Set",
    category: "Gifting",
    price: 56.00,
    image: "https://images.unsplash.com/photo-1578662996442-48f60103fc96?q=80&w=300&auto=format&fit=crop"
  }
};

const CART_KEY = "aura_cart";
const LAST_ORDER_KEY = "aura_last_order";
const TAX_RATE = 0.05;
const FREE_SHIP_THRESHOLD = 75;
const EXPRESS_SHIP_COST = 14.00;

/* ---------- CORE CART STATE ---------- */
function getCart() {
  try {
    return JSON.parse(localStorage.getItem(CART_KEY)) || {};
  } catch (e) {
    return {};
  }
}

function saveCart(cart) {
  localStorage.setItem(CART_KEY, JSON.stringify(cart));
  updateCartBadge();
}

function addToCart(id, qty = 1) {
  if (!PRODUCTS[id]) return;
  const cart = getCart();
  cart[id] = (cart[id] || 0) + qty;
  saveCart(cart);
  showToast(`${PRODUCTS[id].name} added to cart`);
  if (document.getElementById("cartItemsBody")) renderCartPage();
}

function setQty(id, qty) {
  const cart = getCart();
  qty = parseInt(qty, 10);
  if (isNaN(qty) || qty < 1) qty = 1;
  cart[id] = qty;
  saveCart(cart);
  if (document.getElementById("cartItemsBody")) renderCartPage();
}

function removeFromCart(id) {
  const cart = getCart();
  delete cart[id];
  saveCart(cart);
  if (document.getElementById("cartItemsBody")) renderCartPage();
}

function clearCart() {
  localStorage.removeItem(CART_KEY);
  updateCartBadge();
}

function cartCount() {
  const cart = getCart();
  return Object.values(cart).reduce((sum, q) => sum + q, 0);
}

function cartLines() {
  const cart = getCart();
  return Object.keys(cart)
    .filter(id => PRODUCTS[id])
    .map(id => ({
      id,
      qty: cart[id],
      ...PRODUCTS[id],
      lineTotal: PRODUCTS[id].price * cart[id]
    }));
}

function cartSubtotal() {
  return cartLines().reduce((sum, l) => sum + l.lineTotal, 0);
}

/* ---------- BADGE SYNC (runs on every page) ---------- */
function updateCartBadge() {
  const count = cartCount();
  document.querySelectorAll(".cart-count").forEach(el => {
    el.textContent = count;
    el.style.display = count > 0 ? "flex" : "none";
  });
}

/* ---------- TOAST NOTIFICATION ---------- */
function showToast(message) {
  let toast = document.getElementById("auraToast");
  if (!toast) {
    toast = document.createElement("div");
    toast.id = "auraToast";
    toast.style.cssText = `
      position:fixed; bottom:24px; right:24px; z-index:2000;
      background:#1F1B16; color:#F5F1E8; padding:0.9rem 1.4rem;
      border-radius:2px; font-family:'Work Sans', sans-serif;
      font-size:0.9rem; box-shadow:0 10px 30px rgba(0,0,0,0.25);
      opacity:0; transform:translateY(10px); transition:all .25s ease;
    `;
    document.body.appendChild(toast);
  }
  toast.textContent = message;
  requestAnimationFrame(() => {
    toast.style.opacity = "1";
    toast.style.transform = "translateY(0)";
  });
  clearTimeout(toast._timer);
  toast._timer = setTimeout(() => {
    toast.style.opacity = "0";
    toast.style.transform = "translateY(10px)";
  }, 2200);
}

/* ---------- CART PAGE RENDERING ---------- */
function money(n) {
  return "$" + n.toFixed(2);
}

function renderCartPage() {
  const body = document.getElementById("cartItemsBody");
  const emptyState = document.getElementById("cartEmptyState");
  const tableWrap = document.getElementById("cartTableWrap");
  const summaryWrap = document.getElementById("cartSummaryWrap");
  if (!body) return;

  const lines = cartLines();

  if (lines.length === 0) {
    if (tableWrap) tableWrap.style.display = "none";
    if (summaryWrap) summaryWrap.style.display = "none";
    if (emptyState) emptyState.style.display = "block";
    return;
  }
  if (tableWrap) tableWrap.style.display = "";
  if (summaryWrap) summaryWrap.style.display = "";
  if (emptyState) emptyState.style.display = "none";

  body.innerHTML = lines.map(l => `
    <tr>
      <td>
        <div class="d-flex gap-3 align-items-center">
          <img src="${l.image}" class="cart-thumb" alt="${l.name}">
          <div>
            <div class="cart-item-name">${l.name}</div>
            <div class="cart-item-meta">${l.category}</div>
          </div>
        </div>
      </td>
      <td>
        <div class="qty-stepper small">
          <button type="button" onclick="setQty('${l.id}', ${l.qty - 1})">−</button>
          <input type="text" value="${l.qty}" onchange="setQty('${l.id}', this.value)">
          <button type="button" onclick="setQty('${l.id}', ${l.qty + 1})">+</button>
        </div>
      </td>
      <td class="mono">${money(l.lineTotal)}</td>
      <td><a href="#" class="remove-link" onclick="removeFromCart('${l.id}'); return false;">Remove</a></td>
    </tr>
  `).join("");

  const subtotal = cartSubtotal();
  const shipping = subtotal >= FREE_SHIP_THRESHOLD || subtotal === 0 ? 0 : 8.00;
  const tax = subtotal * TAX_RATE;
  const total = subtotal + shipping + tax;

  setText("cartSubtotal", money(subtotal));
  setText("cartShipping", shipping === 0 ? "Free" : money(shipping));
  setText("cartTax", money(tax));
  setText("cartTotal", money(total));
}

/* ---------- CHECKOUT PAGE RENDERING ---------- */
function renderCheckoutSummary() {
  const container = document.getElementById("checkoutItemsList");
  if (!container) return;

  const lines = cartLines();

  if (lines.length === 0) {
    container.innerHTML = `<p style="color:rgba(31,27,22,0.6);font-size:0.9rem;">Your cart is empty. <a href="shop-listing.html" class="link-ink">Go shopping →</a></p>`;
    setText("checkoutSubtotal", money(0));
    setText("checkoutTax", money(0));
    setText("checkoutTotal", money(0));
    const placeOrderBtn = document.getElementById("placeOrderBtn");
    if (placeOrderBtn) placeOrderBtn.classList.add("disabled");
    return;
  }

  container.innerHTML = lines.map(l => `
    <div class="d-flex gap-3 mb-3">
      <img src="${l.image}" class="cart-thumb" style="width:60px;height:60px;" alt="${l.name}">
      <div class="flex-grow-1">
        <div class="cart-item-name" style="font-size:0.92rem;">${l.name}</div>
        <div class="cart-item-meta">Qty ${l.qty}</div>
      </div>
      <span class="mono">${money(l.lineTotal)}</span>
    </div>
  `).join("");

  const expressSelected = document.querySelector('input[name="shipMethod"]:checked')?.dataset.cost === "express";
  const subtotal = cartSubtotal();
  const shipping = expressSelected ? EXPRESS_SHIP_COST : (subtotal >= FREE_SHIP_THRESHOLD ? 0 : 8.00);
  const tax = subtotal * TAX_RATE;
  const total = subtotal + shipping + tax;

  setText("checkoutSubtotal", money(subtotal));
  setText("checkoutShipping", shipping === 0 ? "Free" : money(shipping));
  setText("checkoutTax", money(tax));
  setText("checkoutTotal", money(total));
}

function placeOrder(event) {
  event.preventDefault();
  const lines = cartLines();
  if (lines.length === 0) {
    showToast("Your cart is empty");
    return;
  }
  const email = document.getElementById("checkoutEmail")?.value || "you@email.com";
  const total = document.getElementById("checkoutTotal")?.textContent || money(cartSubtotal());
  const order = {
    id: "AURA-" + Math.floor(10000 + Math.random() * 89999),
    email,
    total,
    items: lines.length,
    date: new Date().toISOString()
  };
  localStorage.setItem(LAST_ORDER_KEY, JSON.stringify(order));
  clearCart();
  window.location.href = "order-confirmation.html";
}

function renderOrderConfirmation() {
  const el = document.getElementById("orderSummaryBox");
  if (!el) return;
  let order;
  try {
    order = JSON.parse(localStorage.getItem(LAST_ORDER_KEY));
  } catch (e) {
    order = null;
  }
  if (!order) {
    order = { id: "AURA-10482", total: "$0.00" };
  }
  setText("orderNumber", "#" + order.id);
  setText("orderTotal", order.total);
}

/* ---------- HELPERS ---------- */
function setText(id, value) {
  const el = document.getElementById(id);
  if (el) el.textContent = value;
}

/* ---------- INIT ON EVERY PAGE ---------- */
document.addEventListener("DOMContentLoaded", () => {
  updateCartBadge();
  if (document.getElementById("cartItemsBody")) renderCartPage();
  if (document.getElementById("checkoutItemsList")) renderCheckoutSummary();
  if (document.getElementById("orderSummaryBox")) renderOrderConfirmation();

  // re-render checkout totals when shipping method changes
  document.querySelectorAll('input[name="shipMethod"]').forEach(r => {
    r.addEventListener("change", renderCheckoutSummary);
  });

  // wire quick-add buttons that carry data-product-id
  document.querySelectorAll("[data-product-id]").forEach(btn => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      addToCart(btn.dataset.productId, 1);
    });
  });

  const placeOrderBtn = document.getElementById("placeOrderBtn");
  if (placeOrderBtn) placeOrderBtn.addEventListener("click", placeOrder);
});
