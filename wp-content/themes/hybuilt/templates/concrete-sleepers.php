<?php /* Template Name: Concrete sleeper */ get_header();?>

<main role="main">
  <div class="website-container">

    <aside class="price-beat price-beat--hero">
      <i class="icon"></i>
      <h4>PRICE BEAT GUARANTEE</h4>
      <button class="price-beat__button">
        <i></i>
      </button>
      <p class="f-white">Present a competitors quote and we will beat it.... guaranteed!</p>
    </aside>

    <section class="hero hero--full-screen">

      <div class="text">
        <h1 class="boldest f-white uppercase f-large"><?php the_title();?></h1>
        <p class="f-white f-medium">Concrete Precast Sleeper &  Retaining wall suppliers specialists</p>

        <a href="#" data-scroll-nav="0" class="hero__scroll-section"></a>
      </div>

      <nav class="sub-nav">
        <?php if( wp_is_mobile() ){ ?>
          <a href="#" data-scroll-nav="0" class="f-white f-shadow--dark">Quality</a>
          <a href="#" data-scroll-nav="1" class="f-white f-shadow--dark">Delivery</a>
          <a href="#" data-scroll-nav="2" class="f-white f-shadow--dark">Products & prices</a>
        <?php }else{ ?>
          <a href="#" data-scroll-nav="0" class="f-white f-shadow--dark">Quality</a>
          <a href="#" data-scroll-nav="1" class="f-white f-shadow--dark">Delivery</a>
          <a href="#" data-scroll-nav="2" class="f-white f-shadow--dark">Installation</a>
          <a href="#" data-scroll-nav="3" class="f-white f-shadow--dark">Products & prices</a>
        <?php } ?>
      </nav><!-- /sub-nav -->

    </section><!-- // hero -->

    <section class="prd-content">
      <div class="prd-content__desc mobile-wrap lay-split">
        <section data-scroll-index="0">
          <h2 class="f-brand-blue bold">Premium quality steel products in Queensland</h2>
          <span class="line"></span>
          <p>The experts at HYBUILT know good steel. We specialise in supplying premium quality H and C steel to residential, commercial and industrial projects and developments. With over 15 years industry experience we’ve developed a reputation as Queensland’s trusted steel supplier. We pride ourselves on quality materials, expert customer service and fast turnaround times.</p>
        </section>

        <section class="prd-content__desc__b-points">
          <article class="prd-content__desc__b-points__point">
            <i></i>
            <div class="text">
              <h3 class="f-brand-blue bold">Manufacturing</h3>
              <p>HYBUILTS manufacturing process is the most efficient in the industry. This allows our continuous determination in lowering the cost of materials made possible across our clientele and customer base. HYBUILT Concrete sleepers are Certified by Registered Professional Engineers of Queensland (RPEQ). They are an Australian Manufactured Product meeting all Australian Building Standards.</p>
            </div>
          </article>

          <article class="prd-content__desc__b-points__point">
            <i></i>
            <div class="text">
              <h3 class="f-brand-blue bold">Delivery</h3>
              <p>We’re Queensland’s most efficient internal crane truck door to door / site to site services. Depending on the order size HYBUILT can usually deliver your materials with 2-3 days after order confirmation. To efficiently carry out these duties HYBUILT operates an entire fleet of Crane Trucks in a variety of sizes to suit both Load size and/or potential access constraints</p>
            </div>
          </article>

          <article class="prd-content__desc__b-points__point">
            <i></i>
            <div class="text">
              <h3 class="f-brand-blue bold">Warranty</h3>
              <p>HYBUILT’s 30yr Guarantee is applicable to walls that have been constructed to our design and specifications. Should a wall fail due to materials tampering, negligence and/or incorrect installation methods the warranty is void. However should our products fail (without any external variables) we will replace them.</p>
            </div>
          </article>

        </section><!-- //prd-content__desc__b-points -->
      </div><!-- //prd-content__desc -->

      <?php if(wp_is_mobile()){ ?>

      <?php }else{ ?>
        <div class="prd-content__image lay-split">

        </div>
      <?php } ?>
    </section><!-- //prd-content -->

    <section class="installation">
      <div class="lay-split mobile-wrap installation__text">
        <div class="text">
          <p class="box-text uppercase">Installation</p>
          <h3 class="f-white f-large">Residential & Commercial</h3>
          <p class="f-white">Quisque ac imperdiet dui, quis consectetur enim. Fusce a finibus turpis. Etiam sed gravida libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque interdum justo id arcu tristique imperdiet. Fusce feugiat imperdiet libero, sit amet pharetra leo.</p>
          <a href="<?php site_url();?>/contact" class="btn btn--border btn--border-light">Enquire</a>
        </div>
      </div>
      <div class="lay-split installation__image">
        <a class="round-btn openGallery" href="<?php echo site_url();?>/concrete-sleepers/concrete-sleeper-gallery">
          <i></i>
          <p class="uppercase">View Gallery</p>
        </a>
      </div>
    </section><!-- //installation -->

    <section class="products-prices" data-scroll-index="0">
      <div class="wrapper">

        <h3 class="f-large">Products & Prices</h3>

        <section class="products-prices__concrete-sleepers">
          <p class="box-text box-text--blue uppercase">Concrete Sleepers</p>

          <div class="products-prices__container">

            <article class="products-prices__product lay-split" itemscope itemtype="http://schema.org/Product">
              <div class="image">
                <img src="<?php echo get_template_directory_uri();?>" alt="Hybuilt Smooth Grey concrete sleepers" itemprop="image">
              </div>
              <header>
                <h4 itemprop="name" class="f-large">Smooth Grey</h4>
                <p itemprop="material">Steel 40mpa & N12 Reinforced</p>
                <span class="line"></span>
              </header>

              <div class="products-prices__product__info">
                <span class="width" itemprop="width">1480mm</span><span
                class="by">x</span><span
                class="height" itemprop="height">200mm</span><span
                class="by">x</span><span class="height" itemprop="depth">75mm</span><span
                class="currency" itemprop="priceCurrency" content="AUD">$</span><span
                class="price" itemprop="price" content="24.50">24.50</span><span class="each">ea</span>
              </div>
            </article>

            <article class="products-prices__product lay-split" itemscope itemtype="http://schema.org/Product">
              <div class="image">
                <img src="<?php echo get_template_directory_uri();?>" alt="Hybuilt Smooth Grey concrete sleepers" itemprop="image">
              </div>
              <header>
                <h4 itemprop="name" class="f-large">Smooth Grey</h4>
                <p itemprop="material">Steel 40mpa & N12 Reinforced</p>
                <span class="line"></span>
              </header>

              <div class="products-prices__product__info">
                <span class="width" itemprop="width">1480mm</span><span
                class="by">x</span><span
                class="height" itemprop="height">200mm</span><span
                class="by">x</span><span class="height" itemprop="depth">75mm</span><span
                class="currency" itemprop="priceCurrency" content="AUD">$</span><span
                class="price" itemprop="price" content="24.50">24.50</span><span class="each">ea</span>
              </div>
            </article>
          </div><!--  //products-prices__container --->
        </section>

        <section class="products-prices__retaining-walls">
          <p class="box-text box-text--blue uppercase">Retaining Wall Posts and Beams</p>

          <div class="products-prices__container">
            <article class="products-prices__product lay-split opt1" itemscope itemtype="http://schema.org/Product">
              <div class="image">
                <img src="<?php echo get_template_directory_uri();?>" alt="" itemprop="image">
              </div>
              <header>
                <h4 itemprop="name" class="f-large">“H” POSTS</h4>

                <p class="avail-in">Available in:</p>

              </header>

              <nav class="product-sizes-nav">
                <a href="#0" class="product-sizes-nav__option-btn--1">100UC</a>
                <a href="#0" class="product-sizes-nav__option-btn--2">150UC</a>
              </nav>

              <div class="products-prices__product__info">

                <div class="products-prices__product__info__container">
                  <article>
                    <span class="width" itemprop="width">0.8m</span><span
                    class="currency" itemprop="priceCurrency" content="AUD">$</span><span
                    class="price" itemprop="price" content="28.80">28.80</span>
                  </article>
                  <article>
                    <span class="width" itemprop="width">1.0m</span><span
                    class="currency" itemprop="priceCurrency" content="AUD">$</span><span
                    class="price" itemprop="price" content="28.80">28.80</span>
                  </article>
                </div><!-- //option1 -->

                <div class="products-prices__product__info__container">
                  <article>
                    <span class="width" itemprop="width">0.8m</span><span
                    class="currency" itemprop="priceCurrency" content="AUD">$</span><span
                    class="price" itemprop="price" content="28.80">28.80</span>
                  </article>
                  <article>
                    <span class="width" itemprop="width">1m</span><span
                    class="currency" itemprop="priceCurrency" content="AUD">$</span><span
                    class="price" itemprop="price" content="28.80">28.80</span>
                  </article>
                </div><!-- //option2 -->

              </div>
            </article>
          </div><!--  //products-prices__container --->

        </section>
      </div><!-- //wrapper -->
    </section>


    <section class="product-contact">
      <div class="wrap">
        <div class="lay-split">
          <div class="text">
            <h2 class="f-medium f-white">How can we help?</h2>
            <p class="f-medium f-white">More information about our sleeper and steel supplies? or Get a quick quote for your project?</p>
          </div>
        </div>

        <div class="lay-split product-contact__contact-details">
          <h4>Contact details:</h4>

          <a href="tel:<?php the_field("hybuilt-main-tel-no", "option");?>">
            <i>
              <svg version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
      					<path fill="#ffffff" d="M76.9,97.8c-3.3,0-6.7-0.9-9.6-2.9C42.8,78.7,21.3,57.2,5,32.7c-4.5-6.9-3.6-16,2.2-21.9l5.5-5.5
      						c4.9-4.9,13-4.9,17.9,0l10,10c4.9,4.9,4.9,13,0,17.9l-1.3,1.3c7.9,9.3,16.8,18.3,26.1,26.1l1.3-1.3c2.4-2.4,5.6-3.7,8.9-3.7
      						c3.4,0,6.6,1.3,8.9,3.7l10,10c4.9,4.9,4.9,13,0,17.9l-5.5,5.5C85.8,96.1,81.4,97.8,76.9,97.8z M21.7,8.1c-1.6,0-3.2,0.6-4.4,1.8
      						l-5.5,5.5c-3.7,3.7-4.2,9.5-1.4,13.8C26.1,53,47,73.9,70.8,89.6c4.3,2.9,10.1,2.3,13.8-1.4l5.5-5.5c2.4-2.4,2.4-6.4,0-8.8l-10-10
      						c-2.4-2.4-6.5-2.4-8.8,0L68,67.2c-1.2,1.2-3,1.3-4.3,0.2c-11.2-9.2-22-19.9-31.1-31.1c-1-1.3-1-3.1,0.2-4.3l3.3-3.3
      						c2.4-2.4,2.4-6.4,0-8.8l-10-10C24.9,8.7,23.3,8.1,21.7,8.1z"/>
      				</svg>
            </i>
            <p class="f-white"><?php the_field("hybuilt-main-tel-no", "option");?></p>
          </a>

          <a href="mailto:<?php the_field("hybuilt-main-email", "option");?>">
            <i>
              <svg version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
      					<path fill="#ffffff" d="M76.9,97.8c-3.3,0-6.7-0.9-9.6-2.9C42.8,78.7,21.3,57.2,5,32.7c-4.5-6.9-3.6-16,2.2-21.9l5.5-5.5
      						c4.9-4.9,13-4.9,17.9,0l10,10c4.9,4.9,4.9,13,0,17.9l-1.3,1.3c7.9,9.3,16.8,18.3,26.1,26.1l1.3-1.3c2.4-2.4,5.6-3.7,8.9-3.7
      						c3.4,0,6.6,1.3,8.9,3.7l10,10c4.9,4.9,4.9,13,0,17.9l-5.5,5.5C85.8,96.1,81.4,97.8,76.9,97.8z M21.7,8.1c-1.6,0-3.2,0.6-4.4,1.8
      						l-5.5,5.5c-3.7,3.7-4.2,9.5-1.4,13.8C26.1,53,47,73.9,70.8,89.6c4.3,2.9,10.1,2.3,13.8-1.4l5.5-5.5c2.4-2.4,2.4-6.4,0-8.8l-10-10
      						c-2.4-2.4-6.5-2.4-8.8,0L68,67.2c-1.2,1.2-3,1.3-4.3,0.2c-11.2-9.2-22-19.9-31.1-31.1c-1-1.3-1-3.1,0.2-4.3l3.3-3.3
      						c2.4-2.4,2.4-6.4,0-8.8l-10-10C24.9,8.7,23.3,8.1,21.7,8.1z"/>
      				</svg>
            </i>
            <p class="f-white"><?php the_field("hybuilt-main-email", "option");?></p>
          </a>

        </div>
      </div>
    </section>

  </div><!-- //website-container -->
</main><!-- //main  -->

<?php get_footer();?>
