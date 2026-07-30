<?php include 'includes/header.php';?>
<style>
  p,  samll {
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
                    <h1 class="main-hd" data-aos="fade-up" data-aos-duration="1000">Order <span>Placed</span></h1>
                </div>
                <div class="col-md-5">
                    <p class="para white" data-aos="fade-up" data-aos-duration="1000">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
            </div>
        </div>
    </section>




<section class="section-pad">
  <div class="container">
    <div class="checkout-steps justify-content-center">
      <div class="checkout-step done"><span class="step-num">✓</span> Cart</div>
      <div class="step-divider"></div>
      <div class="checkout-step done"><span class="step-num">✓</span> Shipping &amp; Payment</div>
      <div class="step-divider"></div>
      <div class="checkout-step active"><span class="step-num">3</span> Confirmation</div>
    </div>

    <div class="text-center mx-auto" style="max-width:480px;">
      <div class="mx-auto mb-4 d-flex align-items-center justify-content-center" style="width:64px;height:64px;border-radius:50%;    background: #8066fa;
    color: #ffffff;">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
      </div>
      <span class="eyebrow d-block justify-content-center">Order Placed</span>
      <h1 class="page-hero-title mt-2" style="font-size:2.2rem;">Thank you, your order is confirmed.</h1>
      <p class="mt-3" style="color:rgba(31,27,22,0.7);">A confirmation email with your receipt and tracking details has been sent. Your order will ship within 2 business days.</p>

      <div class="checkout-card text-start mt-4">
        <div class="mini-line"><span>Order Number</span><span class="mono">#AURA-10482</span></div>
        <div class="mini-line"><span>Order Total</span><span class="mono">$228.90</span></div>
        <div class="mini-line"><span>Payment Method</span><span class="mono">Card ending 4242</span></div>
        <div class="mini-line" style="border-bottom:none;"><span>Estimated Delivery</span><span class="mono">Jul 15 – Jul 17</span></div>
      </div>

      <a href="index.html" class="btn-forest d-inline-block mt-4">Continue Shopping</a>
    </div>
  </div>
</section>


<?php include 'includes/footer.php';?>
