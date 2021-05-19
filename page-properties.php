<?php get_header(); ?>
<!-- ****************************************************************** -->
<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <div class="breadcumb-content">
          <h3 class="breadcumb-title"><?php the_title(); ?></h3>
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

<!-- ##### Listing Content Wrapper Area Start ##### -->
<section class="listings-content-wrapper section-padding-100">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="listings-top-meta d-flex justify-content-between mb-100">
          <div class="view-area d-flex align-items-center">
            <span>View as:</span>
            <div class="grid_view ml-15"><a href="#" class="active"><i class="fa fa-th" aria-hidden="true"></i></a>
            </div>
            <div class="list_view ml-15"><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></div>
          </div>
          <div class="order-by-area d-flex align-items-center">
            <span class="mr-15">Order by:</span>
            <select>
              <option selected>Default</option>
              <option value="1">Newest</option>
              <option value="2">Sales</option>
              <option value="3">Ratings</option>
              <option value="3">Popularity</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- ******************************** -->
    <?php
    //get the current page
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $query = new WP_Query(
      array(
        'post_type' => 'propertie_post',
        'posts_per_page' => 5,
      )
    );
    $query->query('post_type=propertie_post&posts_per_page=6' . '&paged=' . $paged);
    ?>
    <!-- ---------------- ** ------------------ -->
    <div class="row properties-row">
      <?php
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>
      <!-- Single Featured Property -->
      <div class="col-12 col-md-6 col-xl-4">
        <a href="<?php the_permalink(); ?>">
          <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">

            <!-- Property Thumbnail -->
            <div class="property-thumb">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              <?php
                  if (get_field('propertie_sale')) { ?>
              <div class="tag">
                <span>For Sale</span>
              </div>
              <?php } ?>
              <div class="list-price">
                <p>$<?php the_field('propertie_price'); ?></p>
              </div>
            </div>
            <!-- Property Content -->
            <div class="property-content">
              <h5><?php the_title(); ?></h5>
              <p class="location"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/location.png"
                  alt=""><?php the_field('propertie_address'); ?></p>
              <p><?php the_excerpt(); ?></p>
              <div class="property-meta-data d-flex align-items-end justify-content-between">
                <?php
                    if (have_rows('propertie_details')) :
                      while (have_rows('propertie_details')) : the_row();
                    ?>
                <div class="new-tag">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/new.png" alt="">
                </div>
                <div class="bathroom">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/bathtub.png" alt="">
                  <span><?php the_sub_field('propertie_bathroom'); ?></span>
                </div>
                <div class="garage">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/garage.png" alt="">
                  <span><?php the_sub_field('propertie_garage'); ?></span>
                </div>
                <div class="space">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/space.png" alt="">
                  <span><?php the_sub_field('propertie_size'); ?>sq ft</span>
                </div>
                <?php endwhile;
                    endif;
                    ?>
              </div>
            </div>
          </div>
        </a>
      </div>

      <?php endwhile; ?>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="south-pagination d-flex justify-content-end">
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <?php
              if ($page > 0) :
                for ($i = 0; $query->max_num_pages > $i; $i++) { ?>
              <li class="page-item">
                <a class="page-link <?php
                                        if ($paged == $i + 1) : echo ' active';
                                        endif; ?>
                                        "href="
                  http://localhost:8888/wp_09_South/properties/page/<?php echo $i + 1; ?>/">
                  <?php echo $i + 1 ?>
                </a>
              </li>
              <?php } ?>
              <?php endif; ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <!-- ******************************** -->

  </div>
</section>
<!-- ##### Listing Content Wrapper Area End ##### -->

<!-- ****************************************************************** -->
<?php get_footer(); ?>