<?php get_header(); ?>
<!-- ****************************************************************** -->

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <div class="breadcumb-content">
          <h3 class="breadcumb-title">Property</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Advance Search Area Start ##### -->
<div class="south-search-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="advanced-search-form">
          <!-- Search Title -->
          <div class="search-title">
            <p>Search for your home</p>
          </div>
          <!-- Search Form -->
          <form action="#" method="post" id="advanceSearch">
            <div class="row">

              <div class="col-12 col-md-4 col-lg-3">
                <div class="form-group">
                  <input type="input" class="form-control" name="input" placeholder="Keyword">
                </div>
              </div>

              <div class="col-12 col-md-4 col-lg-3">
                <div class="form-group">
                  <select class="form-control" id="cities">
                    <option>All Cities</option>
                    <option>Riga</option>
                    <option>Melbourne</option>
                    <option>Vienna</option>
                    <option>Vancouver</option>
                    <option>Toronto</option>
                    <option>Calgary</option>
                    <option>Adelaide</option>
                    <option>Perth</option>
                    <option>Auckland</option>
                    <option>Helsinki</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-4 col-lg-3">
                <div class="form-group">
                  <select class="form-control" id="catagories">
                    <option>All Catagories</option>
                    <option>Apartment</option>
                    <option>Bar</option>
                    <option>Farm</option>
                    <option>House</option>
                    <option>Store</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-4 col-lg-3">
                <div class="form-group">
                  <select class="form-control" id="offers">
                    <option>All Offers</option>
                    <option>100% OFF</option>
                    <option>75% OFF</option>
                    <option>50% OFF</option>
                    <option>25% OFF</option>
                    <option>10% OFF</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-4 col-xl-3">
                <div class="form-group">
                  <select class="form-control" id="listings">
                    <option>All Listings</option>
                    <option>Listings 1</option>
                    <option>Listings 2</option>
                    <option>Listings 3</option>
                    <option>Listings 4</option>
                    <option>Listings 5</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-4 col-xl-2">
                <div class="form-group">
                  <select class="form-control" id="bedrooms">
                    <option>Bedrooms</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5+</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-4 col-xl-2">
                <div class="form-group">
                  <select class="form-control" id="bathrooms">
                    <option>Bathrooms</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5+</option>
                  </select>
                </div>
              </div>

              <div class="col-12 col-md-8 col-lg-12 col-xl-5 d-flex">
                <!-- Space Range -->
                <div class="slider-range">
                  <div data-min="120" data-max="820" data-unit=" sq. ft"
                    class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                    data-value-min="120" data-value-max="820">
                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                  </div>
                  <div class="range">120 sq. ft - 820 sq. ft</div>
                </div>

                <!-- Distance Range -->
                <div class="slider-range">
                  <div data-min="10" data-max="1300" data-unit=" mil"
                    class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                    data-value-min="10" data-value-max="1300">
                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                  </div>
                  <div class="range">10 mil - 1300 mil</div>
                </div>
              </div>

              <div class="col-12 search-form-second-steps">
                <div class="row">

                  <div class="col-12 col-md-4 col-lg-3">
                    <div class="form-group">
                      <select class="form-control" id="types">
                        <option>All Types</option>
                        <option>Apartment <span>(30)</span></option>
                        <option>Land <span>(69)</span></option>
                        <option>Villas <span>(103)</span></option>
                      </select>
                    </div>
                  </div>

                  <div class="col-12 col-md-4 col-lg-3">
                    <div class="form-group">
                      <select class="form-control" id="catagories2">
                        <option>All Catagories</option>
                        <option>Apartment</option>
                        <option>Bar</option>
                        <option>Farm</option>
                        <option>House</option>
                        <option>Store</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-12 col-md-4 col-lg-3">
                    <div class="form-group">
                      <select class="form-control" id="Actions">
                        <option>All Actions</option>
                        <option>Sales</option>
                        <option>Booking</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-12 col-md-4 col-lg-3">
                    <div class="form-group">
                      <select class="form-control" id="city2">
                        <option>All City</option>
                        <option>City 1</option>
                        <option>City 2</option>
                        <option>City 3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <select class="form-control" id="Actions3">
                        <option>All Actions</option>
                        <option>Sales</option>
                        <option>Booking</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <select class="form-control" id="city3">
                        <option>All City</option>
                        <option>City 1</option>
                        <option>City 2</option>
                        <option>City 3</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-12 col-md-4">
                    <div class="form-group">
                      <select class="form-control" id="city5">
                        <option>All City</option>
                        <option>City 1</option>
                        <option>City 2</option>
                        <option>City 3</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 d-flex justify-content-between align-items-end">
                <!-- More Filter -->
                <div class="more-filter">
                  <a href="#" id="moreFilter">+ More filters</a>
                </div>
                <!-- Submit -->
                <div class="form-group mb-0">
                  <button type="submit" class="btn south-btn">Search</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ##### Advance Search Area End ##### -->

<!-- ##### Listings Content Area Start ##### -->
<section class="listings-content-wrapper section-padding-100">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Single Listings Slides -->
        <div class="single-listings-sliders owl-carousel">
          <?php
          if (have_rows('propertie_carousel')) :
            while (have_rows('propertie_carousel')) : the_row();
          ?>
          <!-- Single Slide -->
          <img src="<?php the_sub_field('propertie_carousel_img'); ?>" alt="">
          <?php endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-lg-8">
        <div class="listings-content">
          <!-- Price -->
          <div class="list-price">
            <p>$<?php the_field('propertie_price'); ?></p>
          </div>
          <h5><?php the_field('propertie_name'); ?></h5>
          <p class="location"><img src="img/icons/location.png" alt=""><?php the_field('propertie_address'); ?></p>
          <p><?php the_field('propertie_description'); ?></p>
          <!-- Meta -->
          <div class="property-meta-data d-flex align-items-end">
            <?php
            // check if the repeater field has rows of data
            if (have_rows('propertie_details')) :
              // loop through the rows of data
              while (have_rows('propertie_details')) : the_row();
            ?>
            <div class="new-tag">
              <img src="img/icons/new.png" alt="">
            </div>
            <div class="bathroom">
              <img src="img/icons/bathtub.png" alt="">
              <span><?php the_sub_field('propertie_bathroom'); ?></span>
            </div>
            <div class="garage">
              <img src="img/icons/garage.png" alt="">
              <span><?php the_sub_field('propertie_garage'); ?></span>
            </div>
            <div class="space">
              <img src="img/icons/space.png" alt="">
              <span><?php the_sub_field('propertie_size'); ?> sq ft</span>
            </div>
            <?php endwhile;
            endif;
            ?>
          </div>
          <!-- Core Features -->

          <?php
          $features = get_field('propertie_features');
          if ($features) : ?>
          <ul class="listings-core-features d-flex align-items-center">
            <?php foreach ($features as $feature) : ?>
            <li><i class="fa fa-check" aria-hidden="true"></i> <?php echo $feature; ?></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>

          <!-- Listings Btn Groups -->
          <div class="listings-btn-groups">
            <a href="#" class="btn south-btn">See Floor plans</a>
            <a href="#" class="btn south-btn active">calculate mortgage</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="contact-realtor-wrapper">
          <div class="realtor-info">
            <!-- TODO: croisement type contenu agent -->
            <img src="img/bg-img/listing.jpg" alt="">
            <div class="realtor---info">
              <h2>Jeremy Scott</h2>
              <p>Realtor</p>
              <h6><img src="img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
              <h6><img src="img/icons/envelope.png" alt=""> office@template.com</h6>
            </div>
            <!-- TODO: formulaire form 7 -->
            <div class="realtor--contact-form">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" id="realtor-name" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" id="realtor-number" placeholder="Your Number">
                </div>
                <div class="form-group">
                  <input type="enumber" class="form-control" id="realtor-email" placeholder="Your Mail">
                </div>
                <div class="form-group">
                  <textarea name="message" class="form-control" id="realtor-message" cols="30" rows="10"
                    placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn south-btn">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Listing Maps -->
    <div class="row">
      <div class="col-12">
        <div class="listings-maps mt-100">
          <div id="googleMap">
            <?php
            if (have_rows('propertie_map')) :
              while (have_rows('propertie_map')) : the_row();
            ?>

            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!<?php the_sub_field('latitude'); ?>!<?php the_sub_field('longitude'); ?>!<?php the_sub_field('zoom'); ?>z!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c3d2ae7332a7%3A0x1b5e776fc829b7fb!2sRue%20Corneille%20Hoornaert%202-24%2C%201090%20Jette!5e0!3m2!1sfr!2sbe!4v1621259232594!5m2!1sfr!2sbe"
              width="1100" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            <?php endwhile;
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ##### Listings Content Area End ##### -->

<!-- ****************************************************************** -->
<?php get_footer(); ?>