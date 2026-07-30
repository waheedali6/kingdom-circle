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

<div class="event-page">

    <section class="inner-banner" style="background-image: url(assets/images/event-banner.jpeg)">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="main-hd" data-aos="fade-up" data-aos-duration="1000">Shop<span></span></h1>
                </div>
                <div class="col-md-5">
                    <p class="para white" data-aos="fade-up" data-aos-duration="1000">Discover the ministries that serve our church and community. Find the perfect place to grow, connect, and use your God-given gifts.</p>
                </div>
            </div>
        </div>
    </section>








<!-- BREADCRUMB -->


<!-- MAIN LISTING -->
<section class="pb-5 shop_sec">
  <div class="container">
    <div class="row g-4">

      <!-- SIDEBAR FILTERS -->
      <aside class="col-lg-3">
        <div class="filter-card mb-3">
          <h6>Price Range</h6>
          <div class="form-check"><input class="form-check-input" type="checkbox" id="p1"><label class="form-check-label" for="p1">Under $30</label></div>
          <div class="form-check"><input class="form-check-input" type="checkbox" id="p2"><label class="form-check-label" for="p2">$30 – $75</label></div>
          <div class="form-check"><input class="form-check-input" type="checkbox" id="p3"><label class="form-check-label" for="p3">$75 – $150</label></div>
          <div class="form-check"><input class="form-check-input" type="checkbox" id="p4"><label class="form-check-label" for="p4">$150 and above</label></div>
        </div>
        <div class="filter-card mb-3">
          <h6>Material</h6>
          <div class="form-check"><input class="form-check-input" type="checkbox" id="m1"><label class="form-check-label" for="m1">Stoneware</label></div>
          <div class="form-check"><input class="form-check-input" type="checkbox" id="m2"><label class="form-check-label" for="m2">Linen</label></div>
          <div class="form-check"><input class="form-check-input" type="checkbox" id="m3"><label class="form-check-label" for="m3">Cast Iron</label></div>
          <div class="form-check"><input class="form-check-input" type="checkbox" id="m4"><label class="form-check-label" for="m4">Rattan</label></div>
          <div class="form-check"><input class="form-check-input" type="checkbox" id="m5"><label class="form-check-label" for="m5">Canvas</label></div>
        </div>
        <div class="filter-card mb-3">
          <h6>Availability</h6>
          <div class="form-check"><input class="form-check-input" type="checkbox" id="a1" checked><label class="form-check-label" for="a1">In Stock</label></div>
          <div class="form-check"><input class="form-check-input" type="checkbox" id="a2"><label class="form-check-label" for="a2">On Sale</label></div>
        </div>
        <button class="btn-outline-ink w-100 d-none">Clear Filters</button>
      </aside>

      <!-- PRODUCT GRID -->
      <div class="col-lg-9">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
          <span class="mono" style="font-size:0.85rem;color:rgba(31,27,22,0.6);">Showing 1–8 of 24 results</span>
          <select class="sort-select">
            <option>Sort: Featured</option>
            <option>Price, Low to High</option>
            <option>Price, High to Low</option>
            <option>Newest</option>
            <option>Best Rated</option>
          </select>
        </div>

        <div class="row g-4">

          <div class="col-6 col-md-4">
            <div class="product-card position-relative">
              <div class="product-thumb">
                <span class="badge-new">New</span>
                <img src="assets/images/book.jpg" alt="Hand-thrown stoneware mug in matte cream glaze">
                <button class="quick-add">+ Add to Cart</button>
              </div>
              <div class="product-info">
                <div class="product-cat">Ceramics</div>
                <div class="product-name"><a href="product-detail.php">Stoneware Mug, Cream</a></div>
                <div class="product-price">$28.00</div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="product-card position-relative">
              <div class="product-thumb">
                <span class="badge-sale">Sale</span>
                <img src="assets/images/book.jpg" alt="Woven linen throw blanket folded on a bench">
                <button class="quick-add">+ Add to Cart</button>
              </div>
              <div class="product-info">
                <div class="product-cat">Textiles</div>
                <div class="product-name"><a href="product-detail.php">Heavy Linen Throw</a></div>
                <div class="product-price"><span class="price-strike">$96.00</span>$74.00</div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="product-card position-relative">
              <div class="product-thumb">
                <img src="assets/images/book.jpg" alt="Cast iron pan with wooden handle on kitchen counter">
                <button class="quick-add">+ Add to Cart</button>
              </div>
              <div class="product-info">
                <div class="product-cat">Kitchen</div>
                <div class="product-name"><a href="product-detail.php">Seasoned Cast Pan</a></div>
                <div class="product-price">$112.00</div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="product-card position-relative">
              <div class="product-thumb">
                <img src="assets/images/book.jpg" alt="Rattan pendant lamp hanging against a plain wall">
                <button class="quick-add">+ Add to Cart</button>
              </div>
              <div class="product-info">
                <div class="product-cat">Lighting</div>
                <div class="product-name"><a href="product-detail.php">Rattan Pendant Lamp</a></div>
                <div class="product-price">$145.00</div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="product-card position-relative">
              <div class="product-thumb">
                <img src="assets/images/book.jpg" alt="Canvas tote bag with leather straps resting on stool">
                <button class="quick-add">+ Add to Cart</button>
              </div>
              <div class="product-info">
                <div class="product-cat">Carry &amp; Bags</div>
                <div class="product-name"><a href="product-detail.php">Waxed Canvas Tote</a></div>
                <div class="product-price">$88.00</div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="product-card position-relative">
              <div class="product-thumb">
                <img src="assets/images/book.jpg" alt="Set of ceramic bowls stacked on a shelf">
                <button class="quick-add">+ Add to Cart</button>
              </div>
              <div class="product-info">
                <div class="product-cat">Ceramics</div>
                <div class="product-name"><a href="product-detail.php">Nesting Bowl Set</a></div>
                <div class="product-price">$64.00</div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="product-card position-relative">
              <div class="product-thumb">
                <span class="badge-new">New</span>
                <img src="assets/images/book.jpg" alt="Folded wool blanket in earth tones">
                <button class="quick-add">+ Add to Cart</button>
              </div>
              <div class="product-info">
                <div class="product-cat">Textiles</div>
                <div class="product-name"><a href="product-detail.php">Wool Lambswool Throw</a></div>
                <div class="product-price">$130.00</div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4">
            <div class="product-card position-relative">
              <div class="product-thumb">
                <img src="assets/images/book.jpg" alt="Wrapped gift box tied with twine on a table">
                <button class="quick-add">+ Add to Cart</button>
              </div>
              <div class="product-info">
                <div class="product-cat">Gifting</div>
                <div class="product-name"><a href="product-detail.php">The Housewarming Set</a></div>
                <div class="product-price">$56.00</div>
              </div>
            </div>
          </div>

        </div>

        <!-- PAGINATION -->
        <nav class="mt-5" aria-label="Product pagination">
          <ul class="pagination pagination-shop justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>

    <?php include 'includes/community-sec.php';?>
    <?php include 'includes/faq-sec.php';?>


</div>

<?php include 'includes/footer.php';?>
<script>
  document.querySelectorAll('.cat-chip').forEach(chip=>{
    chip.addEventListener('click', function(e){
      e.preventDefault();
      document.querySelectorAll('.cat-chip').forEach(c=>c.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>




