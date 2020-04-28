
    <!-- ================ category section start ================= -->		  
    <section class="section-margin--small mb-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <div class="sidebar-categories">
            <div class="head">Browse Categories</div>
            <ul class="main-categories">
              <li class="common-filter-1">
                <!-- <form action="#"> -->
                  <ul>
                    <?php foreach ($categories as $key => $row) { ?> 
                      <li class="filter-list"><input class="pixel-radio" type="radio" ><a href="<?php echo base_url('categories/'.$row['_id']); ?>"><label for="men"><?php echo $row['name'] ?><span> (3600)</span></label></a></li>
                    <?php } ?>                  
                  </ul>
                <!-- </form> -->
              </li>
            </ul>
          </div>
          <div class="sidebar-filter">

        <div class="common-filter">
            <div class="head">Price</div>
              <div class="price-range-area">
                <div id="price-range"></div>
                  <div class="value-wrapper d-flex">
                   <div class="price">Price:</div>
                     <span>$</span>
                  <div id="lower-value"></div>
                  <div class="to">to</div>
                  <span>$</span>
                  <div id="upper-value"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

