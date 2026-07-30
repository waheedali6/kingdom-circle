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
    <section class="inner-banner" style="background-image: url(assets/images/event-banner.jpeg)">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="main-hd" data-aos="fade-up" data-aos-duration="1000">Shop Detail <span></span></h1>
                </div>
                <div class="col-md-5">
                    <p class="para white" data-aos="fade-up" data-aos-duration="1000">Discover the ministries that serve our church and community. Find the perfect place to grow, connect, and use your God-given gifts.</p>
                </div>
            </div>
        </div>
    </section>


<!-- BREADCRUMB -->

<!-- PRODUCT DETAIL -->
<section class="section-pad pb-4 pd">
  <div class="container">
    <div class="row g-5">

      <!-- GALLERY -->
      <div class="col-lg-6">
        <div class="pd-gallery-main mb-3">
          <img id="mainImage" src="assets/images/bbook.jpg" alt="Heavy linen throw folded on a wooden bench, front view">
        </div>
        <div class="row g-2">
          <div class="col-3">
            <div class="pd-thumb active" onclick="swapImage(this,'assets/images/bbook.jpg')">
              <img src="assets/images/bbook.jpg" alt="Thumbnail 1">
            </div>
          </div>
          <div class="col-3">
            <div class="pd-thumb" onclick="swapImage(this,'assets/images/bbook.jpg')">
              <img src="assets/images/bbook.jpg" alt="Thumbnail 2">
            </div>
          </div>
          <div class="col-3">
            <div class="pd-thumb" onclick="swapImage(this,'assets/images/bbook.jpg')">
              <img src="assets/images/bbook.jpg" alt="Thumbnail 3">
            </div>
          </div>
          <div class="col-3">
            <div class="pd-thumb" onclick="swapImage(this,'assets/images/bbook.jpg')">
              <img src="assets/images/bbook.jpg" alt="Thumbnail 4">
            </div>
          </div>
        </div>
      </div>

      <!-- INFO -->
      <div class="col-lg-6">
        <span class="eyebrow">Textiles</span>
        <h1 class="display-serif mt-2" style="font-size:2.2rem;font-weight:600;">Heavy Linen Throw</h1>
        <div class="d-flex align-items-center gap-2 mt-2 mb-3">
          <span class="stars">★★★★★</span>
          <span class="mono" style="font-size:0.82rem;color:rgba(31,27,22,0.55);">4.8 (126 reviews)</span>
        </div>

        <div class="d-flex align-items-baseline gap-3 mb-3">
          <span class="product-price" style="font-size:1.5rem;">$74.00</span>
          <span class="price-strike" style="font-size:1rem;">$96.00</span>
          <span class="badge-sale" style="position:static;">Save 23%</span>
        </div>

        <p style="color:rgba(31,27,22,0.72);max-width:480px;">Woven from heavyweight European flax on century-old looms, this throw softens with every wash instead of pilling. Finished with a whip-stitched edge by hand.</p>

        <div class="mb-3 mt-4">
          <div class="mono mb-2" style="font-size:0.78rem;text-transform:uppercase;letter-spacing:0.08em;">Color — Clay</div>
          <span class="swatch active" style="background:#B85C38;" title="Clay"></span>
          <span class="swatch" style="background:#2F3E2E;margin-left:0.6rem;" title="Forest"></span>
          <span class="swatch" style="background:#C9A227;margin-left:0.6rem;" title="Mustard"></span>
          <span class="swatch" style="background:#1F1B16;margin-left:0.6rem;" title="Ink"></span>
        </div>

        <div class="mb-4">
          <div class="mono mb-2" style="font-size:0.78rem;text-transform:uppercase;letter-spacing:0.08em;">Size</div>
          <div class="d-flex gap-2">
            <span class="size-pill">Throw (50x60")</span>
            <span class="size-pill active">Twin (70x90")</span>
            <span class="size-pill">Queen (90x90")</span>
          </div>
        </div>

        <div class="d-flex align-items-center gap-3 mb-2">
          <span class="stock-dot"></span><span class="mono" style="font-size:0.85rem;">In stock — ships within 2 business days</span>
        </div>

        <div class="d-flex align-items-center gap-3 mt-4">
          <div class="qty-stepper">
            <button type="button" onclick="stepQty(-1)">−</button>
            <input type="text" id="qtyInput" value="1" readonly>
            <button type="button" onclick="stepQty(1)">+</button>
          </div>
          <a href="cart.php" class="btn-forest flex-grow-1">Add to Cart — $74.00</a>
        </div>
        <button class="btn-outline-ink w-100 mt-3">Buy It Now</button>

        <div class="trust-badges">
          <span>↺ 30-day returns</span>
          <span>✓ 2-year workshop guarantee</span>
          <span>◆ Carbon-neutral shipping</span>
        </div>
      </div>
    </div>

    <!-- TABS -->
    <div class="row mt-5">
      <div class="col-12">
        <ul class="nav nav-tabs-pd" id="pdTab" role="tablist">
          <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabDesc" type="button">Description</button></li>
          <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tabCare" type="button">Materials &amp; Care</button></li>
          <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tabReviews" type="button">Reviews (126)</button></li>
        </ul>
        <div class="tab-content pt-4">
          <div class="tab-pane fade show active" id="tabDesc">
            <p style="max-width:640px;color:rgba(31,27,22,0.75);">Every throw is woven in small batches of forty, on looms that have been running in the same mill for three generations. The heavier weight gives it structure on a sofa arm and warmth on cold evenings, without the bulk of a blanket.</p>
          </div>
          <div class="tab-pane fade" id="tabCare">
            <ul style="color:rgba(31,27,22,0.75);">
              <li>100% European flax linen, 320 gsm</li>
              <li>Machine wash cold, tumble dry low</li>
              <li>Softens further after 3–4 washes</li>
              <li>Do not bleach</li>
            </ul>
          </div>
          <div class="tab-pane fade" id="tabReviews">
            <div class="review-row">
              <div class="d-flex justify-content-between">
                <div><span class="stars">★★★★★</span> <strong class="ms-2">Hina R.</strong></div>
                <span class="mono" style="font-size:0.78rem;color:rgba(31,27,22,0.5);">2 weeks ago</span>
              </div>
              <p class="mt-2 mb-0">Thicker and softer than I expected from photos. Holds up beautifully after washing.</p>
            </div>
            <div class="review-row">
              <div class="d-flex justify-content-between">
                <div><span class="stars">★★★★★</span> <strong class="ms-2">Omar F.</strong></div>
                <span class="mono" style="font-size:0.78rem;color:rgba(31,27,22,0.5);">1 month ago</span>
              </div>
              <p class="mt-2 mb-0">Clay color is a true terracotta in person, not orange like some photos suggest. Very happy.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- RELATED PRODUCTS -->
<section class="section-pad pt-3">
  <div class="container">
    <div class="section-head">
      <div>
        <span class="eyebrow">You Might Also Like</span>
        <h2 class="section-title mt-2">Complete the Look</h2>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-6 col-md-3">
        <div class="product-card position-relative">
          <div class="product-thumb">
            <img src="assets/images/book.jpg" alt="Wool lambswool throw folded">
            <button class="quick-add">+ Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Textiles</div>
            <div class="product-name"><a href="product-detail.html?id=wool-throw">Wool Lambswool Throw</a></div>
            <div class="product-price">$130.00</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="product-card position-relative">
          <div class="product-thumb">
            <img src="assets/images/book.jpg" alt="Stoneware mug in cream">
            <button class="quick-add">+ Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Ceramics</div>
            <div class="product-name"><a href="product-detail.html?id=mug-cream">Stoneware Mug, Cream</a></div>
            <div class="product-price">$28.00</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="product-card position-relative">
          <div class="product-thumb">
            <img src="assets/images/book.jpg" alt="Ceramic bowl set stacked">
            <button class="quick-add">+ Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Ceramics</div>
            <div class="product-name"><a href="product-detail.html?id=bowl-set">Nesting Bowl Set</a></div>
            <div class="product-price">$64.00</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="product-card position-relative">
          <div class="product-thumb">
            <img src="assets/images/book.jpg" alt="Rattan pendant lamp">
            <button class="quick-add">+ Add to Cart</button>
          </div>
          <div class="product-info">
            <div class="product-cat">Lighting</div>
            <div class="product-name"><a href="product-detail.html?id=rattan-lamp">Rattan Pendant Lamp</a></div>
            <div class="product-price">$145.00</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php';?>
<script>
  function swapImage(el, src){
    document.getElementById('mainImage').src = src;
    document.querySelectorAll('.pd-thumb').forEach(t=>t.classList.remove('active'));
    el.classList.add('active');
  }
  function stepQty(delta){
    const input = document.getElementById('qtyInput');
    let val = parseInt(input.value) + delta;
    if(val < 1) val = 1;
    input.value = val;
  }
  document.querySelectorAll('.swatch').forEach(s=>{
    s.addEventListener('click', function(){
      document.querySelectorAll('.swatch').forEach(x=>x.classList.remove('active'));
      this.classList.add('active');
    });
  });
  document.querySelectorAll('.size-pill').forEach(s=>{
    s.addEventListener('click', function(){
      document.querySelectorAll('.size-pill').forEach(x=>x.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>