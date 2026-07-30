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
                    <h1 class="main-hd" data-aos="fade-up" data-aos-duration="1000">Cart<span></span></h1>
                </div>
                <div class="col-md-5">
                    <p class="para white" data-aos="fade-up" data-aos-duration="1000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
            </div>
        </div>
    </section>


<!-- BREADCRUMB -->


<section class="section-pad  cart">
  <div class="container">
    <div class="row g-5">

      <!-- CART TABLE -->
      <div class="col-lg-8">
        <table class="table cart-table">
          <thead>
            <tr>
              <th style="width:52%;">Product</th>
              <th>Quantity</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex gap-3 align-items-center">
                  <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?q=80&w=300&auto=format&fit=crop" class="cart-thumb" alt="Heavy Linen Throw">
                  <div>
                    <div class="cart-item-name">Heavy Linen Throw</div>
                    <div class="cart-item-meta">Color: Clay · Size: Twin</div>
                  </div>
                </div>
              </td>
              <td>
                <div class="qty-stepper small">
                  <button type="button" onclick="stepQty(this,-1)">−</button>
                  <input type="text" value="1" readonly>
                  <button type="button" onclick="stepQty(this,1)">+</button>
                </div>
              </td>
              <td class="mono">$74.00</td>
              <td><a href="#" class="remove-link">Remove</a></td>
            </tr>
            <tr>
              <td>
                <div class="d-flex gap-3 align-items-center">
                  <img src="https://images.unsplash.com/photo-1584589167171-541ce45f1eea?q=80&w=300&auto=format&fit=crop" class="cart-thumb" alt="Stoneware Mug, Cream">
                  <div>
                    <div class="cart-item-name">Stoneware Mug, Cream</div>
                    <div class="cart-item-meta">Set of 2</div>
                  </div>
                </div>
              </td>
              <td>
                <div class="qty-stepper small">
                  <button type="button" onclick="stepQty(this,-1)">−</button>
                  <input type="text" value="2" readonly>
                  <button type="button" onclick="stepQty(this,1)">+</button>
                </div>
              </td>
              <td class="mono">$56.00</td>
              <td><a href="#" class="remove-link">Remove</a></td>
            </tr>
            <tr>
              <td>
                <div class="d-flex gap-3 align-items-center">
                  <img src="https://images.unsplash.com/photo-1591561954557-26941169b49e?q=80&w=300&auto=format&fit=crop" class="cart-thumb" alt="Waxed Canvas Tote">
                  <div>
                    <div class="cart-item-name">Waxed Canvas Tote</div>
                    <div class="cart-item-meta">Color: Olive</div>
                  </div>
                </div>
              </td>
              <td>
                <div class="qty-stepper small">
                  <button type="button" onclick="stepQty(this,-1)">−</button>
                  <input type="text" value="1" readonly>
                  <button type="button" onclick="stepQty(this,1)">+</button>
                </div>
              </td>
              <td class="mono">$88.00</td>
              <td><a href="#" class="remove-link">Remove</a></td>
            </tr>
          </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-3">
          <a href="shop-listing.html" class="link-ink">← Continue Shopping</a>
          <!-- <button class="btn-sm-outline">Update Cart</button> -->
        </div>
      </div>

      <!-- SUMMARY -->
      <div class="col-lg-4">
        <div class="summary-card">
          <h3 class="display-serif" style="font-size:1.3rem;font-weight:600;margin-bottom:1.3rem;">Order Summary</h3>

          <div class="d-flex mb-3 inputdiv">
            <input type="text" class="form-control promo-input" placeholder="Promo code">
            <button class="btn-outline-ink" style="border-radius:0 2px 2px 0;">Apply</button>
          </div>

          <div class="summary-row"><span>Subtotal</span><span class="mono">$218.00</span></div>
          <div class="summary-row"><span>Shipping</span><span class="mono" style="color:var(--green-ok);">Free</span></div>
          <div class="summary-row"><span>Estimated Tax</span><span class="mono">$10.90</span></div>
          <div class="summary-row total"><span>Total</span><span class="mono">$228.90</span></div>

          <a href="checkout.php" class="btn-forest w-100 text-center d-block mt-3">Proceed to Checkout</a>

          <div class="trust-badges justify-content-center mt-3">
            <span>↺ Free returns</span>
            <span>◆ Secure checkout</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function stepQty(btn, delta){
    const input = btn.parentElement.querySelector('input');
    let val = parseInt(input.value) + delta;
    if(val < 1) val = 1;
    input.value = val;
  }
</script>