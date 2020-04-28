<div class="col-xl-9 col-lg-8 col-md-7">
  <!-- Start Filter Bar -->
  <div class="filter-bar d-flex flex-wrap align-items-center">
    <div class="sorting">
      <select>
        <option value="1">Default sorting</option>
        <option value="1">Price sorting</option>
        <option value="1">Consonant sorting</option>
      </select>
    </div>
    <div class="sorting mr-auto">
      <select>
        <option value="1">Show 12</option>
        <option value="1">Show 20</option>
        <option value="1">Show 24</option>
      </select>
    </div>
    <div>
      <div class="input-group filter-bar-search">
        <input type="text" placeholder="Search">
        <div class="input-group-append">
          <button type="button"><i class="ti-search"></i></button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Filter Bar -->
  <!-- Start Best Seller -->
  <section class="lattest-product-area pb-40 category-list">
    <div class="row">
      <?php foreach ($products as $key => $row) { ?>
        <div class="col-md-6 col-lg-4">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="<?php echo base_url('public/img/product/product1.png') ?>" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Accessories</p>
              <h4 class="card-product__title"><a href="#"><?php echo $row['name'] ?></a></h4>
              <p class="card-product__price"><?php echo $row['price'] ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
  <!-- End Best Seller -->
</div>
</div>
</div>
</section>
<!-- ================ category section end ================= -->


<!-- ================ Subscribe section start ================= -->
<section class="subscribe-position">
  <div class="container">
    <div class="subscribe text-center">
      <h3 class="subscribe__title">Get Update From Anywhere</h3>
      <p>Bearing Void gathering light light his eavening unto dont afraid</p>
      <div id="mc_embed_signup">
        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
          <div class="form-group ml-sm-auto">
            <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
            <div class="info"></div>
          </div>
          <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
          <div style="position: absolute; left: -5000px;">
            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
          </div>

        </form>
      </div>

    </div>
  </div>
</section>
<!-- ================ Subscribe section end ================= -->