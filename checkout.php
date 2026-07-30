<?php include 'includes/header.php';?>
<style>
  p, span, samll {
    font-family: var(--family);
    font-size: 17px;
    font-weight: 400;
    line-height: 25.5px;
    color: rgb(123, 123, 123);
}


h1, h2, h3, h4, h5, h6{ 
 
font-family: var(--family);

    font-weight: 700;

 }

</style>

<div class="about-page">

    <section class="inner-banner" style="background-image: url(assets/images/about-us-banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="main-hd" data-aos="fade-up" data-aos-duration="1000">We are a tech support company <span>providing fast.</span></h1>
                </div>
                <div class="col-md-5">
                    <p class="para white" data-aos="fade-up" data-aos-duration="1000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
            </div>
        </div>
    </section>

<section class="section-pad cehckout cart">
  <div class="container">

    <!-- STEP INDICATOR -->
    <div class="checkout-steps justify-content-center">
      <div class="checkout-step done"><span class="step-num">✓</span> Cart</div>
      <div class="step-divider"></div>
      <div class="checkout-step active"><span class="step-num">2</span> Shipping &amp; Payment</div>
      <div class="step-divider"></div>
      <div class="checkout-step"><span class="step-num">3</span> Confirmation</div>
    </div>

    <div class="row g-5">

      <!-- FORM COLUMN -->
      <div class="col-lg-7">

        <div class="checkout-card">
          <h6>Contact Information</h6>
          <div class="row g-3">
            <div class="col-12">
              <label class="form-label-shop">Email Address</label>
              <input type="email" class="form-control form-control-shop" placeholder="you@email.com">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="newsOptIn" checked>
                <label class="form-check-label" for="newsOptIn" style="font-size:0.85rem;">Email me with news and offers</label>
              </div>
            </div>
          </div>
        </div>

        <div class="checkout-card">
          <h6>Shipping Address</h6>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label-shop">First Name</label>
              <input type="text" class="form-control form-control-shop" placeholder="First name">
            </div>
            <div class="col-md-6">
              <label class="form-label-shop">Last Name</label>
              <input type="text" class="form-control form-control-shop" placeholder="Last name">
            </div>
            <div class="col-12">
              <label class="form-label-shop">Street Address</label>
              <input type="text" class="form-control form-control-shop" placeholder="House number and street name">
            </div>
            <div class="col-md-6">
              <label class="form-label-shop">City</label>
              <input type="text" class="form-control form-control-shop" placeholder="newyork">
            </div>
            <div class="col-md-3">
              <label class="form-label-shop">Province</label>
              <select class="form-select form-select-shop">
                <option>lorem</option>
                <option>lorem</option>
                <option>lorem</option>
                <option>lorem</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label-shop">zip Code</label>
              <input type="text" class="form-control form-control-shop" placeholder="000000">
            </div>
            <div class="col-12">
              <label class="form-label-shop">Phone Number</label>
              <input type="tel" class="form-control form-control-shop" placeholder="+123456789">
            </div>
          </div>
        </div>

        <div class="checkout-card">
          <h6>Shipping Method</h6>
          <div class="pay-option active d-flex justify-content-between align-items-center mb-2">
            <div class="d-flex align-items-center gap-2">
              <input type="radio" name="shipMethod" checked>
              <div>
                <div style="font-weight:500;">Standard Shipping</div>
                <div class="cart-item-meta">3–5 business days</div>
              </div>
            </div>
            <span class="mono" style="color:var(--green-ok);">Free</span>
          </div>
          <div class="pay-option d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-2">
              <input type="radio" name="shipMethod">
              <div>
                <div style="font-weight:500;">Express Shipping</div>
                <div class="cart-item-meta">1–2 business days</div>
              </div>
            </div>
            <span class="mono">$14.00</span>
          </div>
        </div>

        <div class="checkout-card mb-0">
          <h6>Payment Method</h6>
          <div class="pay-option active mb-2">
            <div class="d-flex align-items-center gap-2 mb-2">
              <input type="radio" name="payMethod" checked>
              <span style="font-weight:500;">Credit / Debit Card</span>
            </div>
            <div class="row g-2 mt-1">
              <div class="col-12">
                <input type="text" class="form-control form-control-shop" placeholder="Card Number">
              </div>
              <div class="col-6">
                <input type="text" class="form-control form-control-shop" placeholder="MM / YY">
              </div>
              <div class="col-6">
                <input type="text" class="form-control form-control-shop" placeholder="CVC">
              </div>
            </div>
          </div>
          <div class="pay-option d-flex align-items-center gap-2 mb-2">
            <input type="radio" name="payMethod">
            <span style="font-weight:500;">lorem ipsum</span>
          </div>
          <div class="pay-option d-flex align-items-center gap-2">
            <input type="radio" name="payMethod">
            <span style="font-weight:500;">lorem ipsum</span>
          </div>
        </div>

      </div>

      <!-- ORDER REVIEW -->
      <div class="col-lg-5">
        <div class="summary-card">
          <h3 class="display-serif" style="font-size:1.3rem;font-weight:600;margin-bottom:1.3rem;">Order Review</h3>

          <div class="d-flex gap-3 mb-3">
            <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?q=80&w=200&auto=format&fit=crop" class="cart-thumb" style="width:60px;height:60px;" alt="Heavy Linen Throw">
            <div class="flex-grow-1">
              <div class="cart-item-name" style="font-size:0.92rem;">Heavy Linen Throw</div>
              <div class="cart-item-meta">Qty 1 · Clay / Twin</div>
            </div>
            <span class="mono">$74.00</span>
          </div>
          <div class="d-flex gap-3 mb-3">
            <img src="https://images.unsplash.com/photo-1584589167171-541ce45f1eea?q=80&w=200&auto=format&fit=crop" class="cart-thumb" style="width:60px;height:60px;" alt="Stoneware Mug">
            <div class="flex-grow-1">
              <div class="cart-item-name" style="font-size:0.92rem;">Stoneware Mug, Cream</div>
              <div class="cart-item-meta">Qty 2</div>
            </div>
            <span class="mono">$56.00</span>
          </div>
          <div class="d-flex gap-3 mb-3">
            <img src="https://images.unsplash.com/photo-1591561954557-26941169b49e?q=80&w=200&auto=format&fit=crop" class="cart-thumb" style="width:60px;height:60px;" alt="Waxed Canvas Tote">
            <div class="flex-grow-1">
              <div class="cart-item-name" style="font-size:0.92rem;">Waxed Canvas Tote</div>
              <div class="cart-item-meta">Qty 1 · Olive</div>
            </div>
            <span class="mono">$88.00</span>
          </div>

          <hr style="border-color:var(--line);">

          <div class="summary-row"><span>Subtotal</span><span class="mono">$218.00</span></div>
          <div class="summary-row"><span>Shipping</span><span class="mono" style="color:var(--green-ok);">Free</span></div>
          <div class="summary-row"><span>Estimated Tax</span><span class="mono">$10.90</span></div>
          <div class="summary-row total"><span>Total</span><span class="mono">$228.90</span></div>

          <a href="order.php" class="btn-forest w-100 text-center d-block mt-3">Place Order</a>
          <a href="cart.php" class="link-ink d-block text-center mt-3">← Back to Cart</a>

          <div class="trust-badges justify-content-center mt-3">
            <span>◆ 256-bit SSL secured</span>
            <span>↺ 30-day returns</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.querySelectorAll('input[name="payMethod"], input[name="shipMethod"]').forEach(radio=>{
    radio.addEventListener('change', function(){
      const group = this.name;
      document.querySelectorAll(`input[name="${group}"]`).forEach(r=>{
        r.closest('.pay-option').classList.remove('active');
      });
      this.closest('.pay-option').classList.add('active');
    });
  });
</script>