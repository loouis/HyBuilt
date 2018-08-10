<?php /* Template Name: Products */ get_header();?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<main role="main">
  <div class="website-container">

    <?php if(is_page('6')){ ?>
      <aside class="price-beat price-beat--hero">
        <i class="icon">
          <svg version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
             <path fill="#ffffff" d="M39,97.2l58.2-58.8c0.3-0.3,0.5-0.7,0.5-1.1V3.9c0-0.9-0.7-1.6-1.6-1.6H62.7c-0.4,0-0.8,0.2-1.1,0.5L2.8,61
            c-0.3,0.3-0.5,0.7-0.5,1.1c0,0,0,0,0,0c0,0.4,0.2,0.8,0.5,1.1l34,34c0.3,0.3,0.7,0.5,1.1,0.5C38.3,97.7,38.7,97.5,39,97.2z M68,24
            c0-4.4,3.6-8,8-8c4.4,0,8,3.6,8,8c0,4.4-3.6,8-8,8C71.6,32,68,28.4,68,24z"/>
          </svg>
        </i>
        <h4>PRICE BEAT GUARANTEE</h4>
        <button class="price-beat__button btn-arrow btn-arrow--down"><i></i></button>
        <p class="f-white">Present a competitors quote and we will beat it… guaranteed! T&amp;C's apply</p>
      </aside>
    <?php }else{ ?>

    <?php } ?>


    <?php
      $heroImageId = get_post_thumbnail_id();
      $d_heroImage = wp_get_attachment_image_src($heroImageId, 'd_full-screen');
      $m_heroImage = wp_get_attachment_image_src($heroImageId, 'm_full-screen');
    ?>

    <section class="hero hero--full-screen">

      <div class="text">
        <h1 class="boldest f-white uppercase f-large wow slideInUp" data-wow-delay=".2s"><?php the_title();?></h1>
        <p class="f-white f-medium wow slideInUp" data-wow-delay=".4s"><?php the_excerpt();?></p>

        <a href="#" data-scroll-nav="1" class="hero__scroll-section btn-arrow btn-arrow--down wow slideInUp" data-wow-delay=".6s"><i></i></a>
      </div>

      <nav class="sub-nav">
        <?php if( wp_is_mobile() ){ ?>
          <a href="#" data-scroll-goto="1" class="f-white f-shadow--dark wow fadeIn" data-wow-delay=".6s">Quality</a>
          <a href="#" data-scroll-goto="2" class="f-white f-shadow--dark wow fadeIn" data-wow-delay=".7s">Delivery</a>
          <a href="#" data-scroll-goto="4" class="f-white f-shadow--dark wow fadeIn" data-wow-delay=".8s">Products & Prices</a>
        <?php }else{ ?>
          <a href="#" data-scroll-goto="1" class="f-white f-shadow--dark wow fadeIn" data-wow-delay=".6s">Quality</a>
          <a href="#" data-scroll-goto="2" class="f-white f-shadow--dark wow fadeIn" data-wow-delay=".7s">Delivery</a>
          <a href="#" data-scroll-goto="3" class="f-white f-shadow--dark wow fadeIn" data-wow-delay=".8s">Installation</a>
          <a href="#" data-scroll-goto="4" class="f-white f-shadow--dark wow fadeIn" data-wow-delay=".9s">Products & Prices</a>
        <?php } ?>
      </nav><!-- /sub-nav -->

      <?php if( wp_is_mobile() ){ ?>
        <div class="hero__image cover wow imgScaleIn" style="background-image:url('<?php echo $m_heroImage[0];?>')"></div>
      <?php }else{ ?>
        <div class="hero__image cover wow imgScaleIn" style="background-image:url('<?php echo $d_heroImage[0];?>')"></div>
      <?php } ?>

    </section><!-- // hero -->

    <section class="prd-content">
      <div class="prd-content__desc mobile-wrap lay-split">
        <section class="wow fadeIn" data-scroll-index="1">
          <?php the_content();?>
        </section>

        <?php if( have_rows('bptt_repeater') ): ?>

          <section class="prd-content__desc__b-points">

            <?php while( have_rows('bptt_repeater') ) : the_row();
              $icon = get_sub_field('bptt__icon');
              $anchor = get_sub_field('bptt__scroll-anchor');
            ?>

              <article class="prd-content__desc__b-points__point wow fadeIn" data-wow-delay=".3s" <?php if($anchor):?>data-scroll-index="<?php echo $anchor;?>"<?php endif;?>>
                <i>
                  <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                </i>
                <div class="text">
                  <h3><?php the_sub_field('bptt__title');?></h3>
                  <?php the_sub_field('bptt__text');?>
                </div>
              </article>

            <?php endwhile; ?>

          </section><!-- //prd-content__desc__b-points -->
        <?php endif; ?>
      </div><!-- //prd-content__desc -->

      <?php if(wp_is_mobile()){ ?>

      <?php }else{ ?>
        <?php
          $count = count(get_field("ssi_repeater"));
        ?>

        <?php if($count > 1 ){ ?>

          <div class="prd-content__image lay-split">

            <div class="prd-content__image__slider">
              <div class="bx-slider">

                <?php while( have_rows('ssi_repeater') ): the_row();?>

                  <?php
                    $ssiId = get_sub_field('ssi_images');
                    $d_ssi_image = wp_get_attachment_image_src($ssiId, 'd_split-screen');
                  ?>

                  <div class="prd-content__image__slider__slide cover" style="background-image: url('<?php echo $d_ssi_image[0];?>')"></div>

                <?php endwhile; ?>

              </div><!-- /bxslider -->

              <div class="prd-content__image__slider__pager">
                <?php $counter = -1; ?>
                <?php while( have_rows('ssi_repeater') ): the_row(); $counter++ ?>

                  <?php
                    $ssiId = get_sub_field('ssi_images');
                    $d_ssi_image = wp_get_attachment_image_src($ssiId, 'b_sq-thumbnail');
                  ?>

                  <a href="#0" data-slide-index="<?php echo $counter; ?>">
                    <div class="image">
                      <img src="<?php echo $d_ssi_image[0];?>" alt="">
                    </div>
                    <p><?php the_sub_field('ssi_name');?></p>
                  </a>
                <?php endwhile; ?>

              </div><!-- /prd-content__image__slider__pager -->

            </div><!-- /prd-content__image__slider -->
          </div>

          <?php }else{ ?>

            <?php while( have_rows('ssi_repeater') ): the_row();?>

              <?php
                $ssiId = get_sub_field('ssi_images');
                $d_ssi_image = wp_get_attachment_image_src($ssiId, 'd_split-screen');
              ?>

            <div class="prd-content__image lay-split" style="background-image: url('<?php echo $d_ssi_image[0];?>')"></div><!-- /prd-content__image -->

          <?php endwhile; ?>

          <?php } ?>


      <?php } ?>
    </section><!-- //prd-content -->

    <section class="installation wow fadeIn" data-scroll-index="3">
      <?php
        $imageId = get_field('instal_text-bg-img');
        $d_splitImage = wp_get_attachment_image_src($imageId, 'd_split-screen');
        $m_fullScreenImage = wp_get_attachment_image_src($imageId, 'm_full-screen');

        $gallery_imageId = get_field('instal_gallery-bg');
        $gallery_d_splitImage = wp_get_attachment_image_src($gallery_imageId, 'd_split-screen');
        $gallery_m_fullScreenImage = wp_get_attachment_image_src($gallery_imageId, 'm_full-screen');
      ?>
      <?php if(wp_is_mobile()){ ?>
        <div class="lay-split mobile-wrap installation__text cover" style="background-image:url('<?php echo $m_fullScreenImage[0]; ?>');">
      <?php }else{ ?>
        <div class="lay-split mobile-wrap installation__text cover" style="background-image:url('<?php echo $d_splitImage[0]; ?>');">
      <?php } ?>
          <div class="text">
            <p class="box-text uppercase">Installation</p>
            <h3 class="f-white f-large bold"><?php the_field('instal_title');?></h3>
            <div class="body-text">
              <?php the_field('instal_text');?>
            </div>
          </div>
        </div>

      <?php if(wp_is_mobile()){ ?>
        <div class="lay-split lay-split installation__image cover" style="background-image:url('<?php echo $gallery_m_fullScreenImage[0]; ?>');">
      <?php }else{ ?>
        <div class="lay-split lay-split installation__image cover" style="background-image:url('<?php echo $gallery_d_splitImage[0]; ?>');">
      <?php } ?>

      <?php if( get_field('instal_gallery-link') ):?>
        <a class="round-btn openGallery" href="<?php echo the_field('instal_gallery-link');?>">
          <i>
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
              <path fill="#ffffff" d="M81.5,3.3L4.8,3.4L4.7,80.2h76.8V3.3z M76.6,75.3h-67l0-8.2h67V75.3z M24.5,62.2l7.8-13.3l8.1,9.7
                c0.5,0.6,1.4,1,2.2,0.9c0.8-0.1,1.6-0.6,1.9-1.4l7.9-17.4l8.4,21.6H24.5z M76.6,62.2H66L54.8,33.4c-0.4-0.9-1.2-1.5-2.2-1.6
                c-1.1,0-1.9,0.5-2.3,1.4l-8.7,19.1l-7.8-9.4c-0.5-0.6-1.3-1-2.1-0.9c-0.8,0.1-1.5,0.5-1.9,1.2l-11,18.8H9.6l0.1-54l67-0.1V62.2z"/>
              <path fill="#ffffff" d="M85.8,29.3c-1.3-0.1-2.5,0.9-2.7,2.2c-0.1,1.3,0.9,2.5,2.2,2.7l5.8,0.5l-5.2,56.7l-59.1-5.4
                c-1.3-0.1-2.5,0.9-2.7,2.2c-0.1,1.3,0.9,2.5,2.2,2.7l64,5.8l6.1-66.5L85.8,29.3z"/>
              <path fill="#ffffff" d="M25.1,34.4c5,0,9-4,9-9s-4-9-9-9s-9,4-9,9S20.2,34.4,25.1,34.4z M25.1,21.4c2.3,0,4.1,1.8,4.1,4.1
                s-1.8,4.1-4.1,4.1S21,27.7,21,25.4S22.9,21.4,25.1,21.4z"/>
            </svg>
          </i>
          <p class="uppercase">View Gallery</p>
        </a>
      <?php endif;?>
          
        </div>
    </section><!-- //installation -->

    <section class="products-prices"  data-scroll-index="4" >
      <div class="wrapper">

        <h3 class="f-large bold wow fadeIn" data-wow-delay=".3s">Products & Prices</h3>


        <?php if(have_rows('csp_repeater')): ?>

          <section class="products-prices__concrete-sleepers">

            <p class="box-text box-text--blue uppercase wow fadeIn" data-wow-delay=".3s"><?php the_field('csp_sub-title');?></p>

            <div class="products-prices__container">

              <?php while( have_rows('csp_repeater') ): the_row(); ?>

                <?php
                  $csPrdIimage = get_sub_field('csp_cs_prd-image');
                ?>

                <article class="products-prices__product wow fadeIn" data-wow-delay=".3s" itemscope itemtype="http://schema.org/Product">
                  <div class="image">
                    <img src="<?php echo $csPrdIimage['url'];?>" alt="<?php echo $csPrdIimage['alt'];?>" title="<?php echo $csPrdIimage['title'];?>" itemprop="image">
                  </div>
                  <div class="products-prices__product__info">
                    <header>
                      <h4 itemprop="name" class="f-large bold"><?php the_sub_field('csp_cs_prd-name');?></h4>
                      <div class="material" itemprop="material"><?php the_sub_field('csp_cs_prd-sub-title');?></div>
                      <hr class="thin s-margin">
                    </header>

                    <ul>
                      <?php while( have_rows('csp_csr') ): the_row(); ?>
                        <li>
                          <?php if( get_sub_field('csp_cs_prd-width') ): ?>
                            <span class="width" itemprop="width"><?php the_sub_field('csp_cs_prd-width');?>mm</span>
                            <span class="by">x</span>
                          <?php endif; ?>
                          <?php if( get_sub_field('csp_cs_prd-height') ): ?>
                            <span class="height" itemprop="height"><?php the_sub_field('csp_cs_prd-height');?>mm</span>
                          <?php endif; ?>
                          <?php if( get_sub_field('csp_cs_prd-depth') ): ?>
                           <span class="by">x</span><span class="height" itemprop="depth"><?php the_sub_field('csp_cs_prd-depth');?>mm</span>
                          <?php endif; ?>
                          <?php if( get_sub_field('csp_cs_prd-price') ): ?>
                            <span class="currency" itemprop="priceCurrency" content="AUD">$</span><span class="price" itemprop="price" content="<?php the_sub_field('csp_cs_prd-price');?>"><?php the_sub_field('csp_cs_prd-price');?></span><span class="each">ea</span>
                          <?php endif; ?>
                        </li>
                      <?php endwhile; ?>
                    </ul>

                  </div>
                </article>

              <?php endwhile; ?>

              <?php if( is_page('8') ){ ?>
                <p class="small-text">** The most consistent characteristic about Sandstone is that its inconsistent. Sandstone will naturally vary in size, texture and colour due to its heritage **</p>
              <?php } ?>

            </div><!--  //products-prices__container --->

          </section>

        <?php endif; ?>


        <?php if( have_rows('csp_b-p-repeater') ): ?>

          <section class="products-prices__retaining-walls">

            <p class="box-text box-text--blue uppercase">Retaining Wall Posts and Beams</p>

            <div class="products-prices__container">

              <?php $counter = -1; ?>

              <?php while( have_rows('csp_b-p-repeater') ): the_row(); $counter++;?>

                <?php
                  $cspbPrdIimage = get_sub_field('csp_b-p_image');
                  $opt2 = get_sub_field('prd-opt2_opt-title');
                ?>

                <?php if ($counter % 2 == 0) { ?>
                  <div class="wrap">
                <?php } ?>

                  <article class="products-prices__product wow fadeIn lay-split opt1 products-prices__product--<?php echo $counter;?>" itemscope itemtype="http://schema.org/Product">
                    <div class="image">
                      <img src="<?php echo $cspbPrdIimage['url'];?>" alt="<?php echo $cspbPrdIimage['alt'];?>" title="<?php echo $csPrdIimage['title'];?>" itemprop="image">
                    </div>
                    <header>
                      <h4 itemprop="name" class="f-medium bold"><?php the_sub_field('csp_b-p_title');?></h4>

                      <?php if($opt2){ ?>
                        <p class="avail-in">Available in:</p>
                      <?php }else{ ?>
                        <p><?php the_sub_field('prd-opt1_opt-sub-title');?></p>
                      <?php } ?>

                    </header>

                    <?php if($opt2): ?>
                      <nav class="product-sizes-nav">
                        <a href="#0" class="product-sizes-nav__option-btn--1"><?php the_sub_field('prd-opt1_opt-title');?></a>
                        <a href="#0" class="product-sizes-nav__option-btn--2"><?php the_sub_field('prd-opt2_opt-title');?></a>
                      </nav>
                    <?php endif; ?>

                    <div class="products-prices__product__info">

                      <?php if( have_rows('prd-opt1-repeater') ):?>

                        <?php $priceCounter = -1; ?>

                        <div class="products-prices__product__info__container">

                          <div>
                            <?php while( have_rows('prd-opt1-repeater') ): the_row(); $priceCounter++;?>

                              <?php
                                $price = get_sub_field('opt-1_prd-price');
                              ?>

                              <?php if ($priceCounter % 8 == 0): ?>
                                <span class="price-wrap">
                              <?php endif; ?>

                                <article>
                                  <span class="width" itemprop="width"><?php the_sub_field('opt-1_prd-size');?></span>

                                  <?php if($price):?>
                                    <span class="currency bold" itemprop="priceCurrency" content="AUD">$</span><span class="price bold" itemprop="price" content="<?php the_sub_field('opt-1_prd-price');?>"><?php the_sub_field('opt-1_prd-price');?></span>
                                  <?php endif; ?>
                                </article>

                              <?php if ($priceCounter % 8 == 7): ?>
                                </span>
                              <?php endif; ?>

                            <?php endwhile; ?>
                          </div>

                          <p class="products-prices__product__info__container__end-para"><?php the_sub_field('prd-opt1_opt-end-para');?></p>

                        </div><!-- //option1 -->

                      <?php endif; ?>

                      <?php if($opt2): ?>

                        <?php if( have_rows('prd-opt2-repeater') ):?>

                          <div class="products-prices__product__info__container wow fadeIn">

                            <?php while( have_rows('prd-opt2-repeater') ): the_row(); $priceCounter++;?>

                              <?php
                                $price = get_sub_field('opt-2_prd-price');
                              ?>

                              <?php if ($priceCounter % 8 == 0) { ?>
                                <span class="price-wrap">
                              <?php } ?>

                                  <article>
                                    <span class="width" itemprop="width"><?php the_sub_field('opt-2_prd-size');?></span>

                                    <?php if($price):?>
                                      <span class="currency bold" itemprop="priceCurrency" content="AUD">$</span><span class="price bold" itemprop="price" content="<?php the_sub_field('opt-2_prd-price');?>"><?php the_sub_field('opt-2_prd-price');?></span>
                                    <?php endif; ?>
                                  </article>

                              <?php if ($priceCounter % 8 == 7) { ?>
                              </span>
                              <?php } ?>

                            <?php endwhile; ?>

                            <p class="products-prices__product__info__container__end-para"><?php the_sub_field('prd-opt2_opt-end-para');?></p>

                          </div><!-- //option2 -->

                      <?php endif; endif; ?>

                    </div><!-- /products-prices__product__info -->

                  </article>

                  <?php if ($counter % 2 == 1) { ?>
                  </div><!-- /wrap -->
                <?php }?>

              <?php endwhile; ?>

            </div><!--  //products-prices__container --->
          </section>

        <?php endif; ?>
      </div><!-- //wrapper -->
    </section>

    <?php wp_reset_postdata(); ?>


    <?php
      $contact_id = get_field('hcwh_image');
      $m_contact_image = wp_get_attachment_image_src($contact_id, 'm_full-screen');
      $d_contact_image = wp_get_attachment_image_src($contact_id, 'd_full-screen');
    ?>

    <?php if(wp_is_mobile()){ ?>
      <div class="product-contact wow fadeIn cover" style="background-image:url('<?php echo $m_contact_image[0]; ?>');">
    <?php }else{ ?>
      <div class="product-contact wow fadeIn cover" style="background-image:url('<?php echo $d_contact_image[0]; ?>');">
    <?php } ?>
      <div class="wrap">
        <div class="lay-split">
          <div class="text">
            <?php the_field('hcwh_text');?>
          </div>
        </div>

        <div class="lay-split product-contact__contact-details">
          <h4 class="f-white bold">Contact details:</h4>

          <a href="tel:<?php the_field("hybuilt-main-tel-no", "option");?>" class="icon-text">
            <i>
              <svg version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
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

          <a href="mailto:<?php the_field("hybuilt-main-email", "option");?>" class="icon-text">
            <i>
              <svg version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
              <path fill="#ffffff" d="M87.5,15.9h-75c-7,0-11.9,4.9-11.9,11.9v44.3c0,6.8,5,11.9,11.6,11.9h75.3c6.6,0,11.9-5.4,11.9-11.9V27.8
              	C99.5,20.8,94.5,15.9,87.5,15.9z M87.1,22.7L51.6,50.8L13.3,22.7H87.1z M92.6,72.2c0,2.9-2.2,5.1-5.1,5.1H12.2
              	c-2.8,0-4.8-2.2-4.8-5.1V27.8c0-0.3,0-0.7,0.1-1l42.3,31c0.6,0.4,1.3,0.7,2,0.7c0.7,0,1.5-0.2,2.1-0.7l38.8-30.7
              	c0,0.3,0.1,0.5,0.1,0.8V72.2z"/>
              </svg>
            </i>
            <p class="f-white"><?php the_field("hybuilt-main-email", "option");?></p>
          </a>

        </div>
      </div>
    </section>

  </div><!-- //website-container -->
</main><!-- //main  -->

<?php endwhile; endif; ?>

<?php get_footer();?>
