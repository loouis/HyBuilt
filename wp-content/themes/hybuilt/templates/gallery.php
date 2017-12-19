<?php /* Template Name: Gallery */ ?>

<!-- Styles -->
<style>
/* Smallest screen */
.gallery li.g1{background: url('../../assets/images/gfull-red-bull-masters-01.jpg');}
.gallery li.g2{background: url('../../assets/images/gfull-red-bull-masters-02.jpg');}
.gallery li.g3{background: url('../../assets/images/gfull-red-bull-masters-03.jpg');}
.gallery li.g4{background: url('../../assets/images/gfull-red-bull-masters-04.jpg');}

</style>

<div class="gallery-container">
  <div class="slider-container">

    <button title="%title%" type="button" class="mfp-close">CLOSE</button>

    <nav class="gallery-slider-nav">
      <a class="gallery-slider-nav__btn gallery-slider-nav__btn--prev" id="gallery-slider-nav__btn--prev">
        <span>
          <svg width="40px" height="41px" viewBox="0 0 40 41" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g class="carousel-arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="4.1:-Tracks---Lightbox" transform="translate(-1219.000000, -437.000000)" stroke-width="2" stroke="#FFFFFF">
                      <g id="Image-Lightbox">
                          <g id="Icon:-Right-arrow" transform="translate(1240.000000, 457.500000) rotate(-180.000000) translate(-1240.000000, -457.500000) translate(1221.000000, 438.000000)">
                              <polyline id="Icon:-right-arrow" points="16 38.5 38 19.25 16 0"></polyline>

                              <g class="show-arrow--on-hover">
                                <polyline id="Icon:-right-arrow-Copy-2" stroke-linecap="square" points="11 29.625 24 19.25 11 8.875"></polyline>
                                <path d="M22.3585883,19 L0,19" id="Path-3"></path>
                              </g>

                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </span>
      </a>
      <a class="gallery-slider-nav__btn gallery-slider-nav__btn--next" id="gallery-slider-nav__btn--next">
        <span>
          <svg width="40px" height="41px" viewBox="0 0 40 41" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g class="carousel-arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="4.1:-Tracks---Lightbox" transform="translate(-1221.000000, -437.000000)" stroke-width="2" stroke="#FFFFFF">
                      <g id="Image-Lightbox">
                          <g id="Icon:-Right-arrow" transform="translate(1221.000000, 438.000000)">
                              <polyline id="Icon:-right-arrow" points="16 38.5 38 19.25 16 0"></polyline>

                              <g class="show-arrow--on-hover">
                                <polyline id="Icon:-right-arrow-Copy-2" stroke-linecap="square" points="11 29.625 24 19.25 11 8.875"></polyline>
                                <path d="M22.3585883,19 L0,19" id="Path-3"></path>
                              </g>
                          </g>
                      </g>
                  </g>
              </g>
          </svg>
        </span>
      </a>
    </nav>

      <ul class="bxslider gallery">
          <?php while(have_rows('img_repeater')): the_row();?>

            <?php
              $imageId = get_sub_field('img_repeater_image');
              $m_galleryImage = wp_get_attachment_image_src($imageId, 'm_full-quarter');
              $d_galleryImage = wp_get_attachment_image_src($imageId, 'd_full-screen');
            ?>

          <li>
            <?php if(wp_is_mobile()){ ?>
              <img src="<?php echo $m_galleryImage[0] ?>" alt="">
            <?php }else{ ?>
              <img src="<?php echo $d_galleryImage[0] ?>" alt="">
            <?php } ?>
          </li>
        <?php endwhile; ?>
      </ul>
  </div>

<script>
  (function($){

    var mySlider = $('.bxslider');


    $(".gallery-slider-nav__btn--next").click(function(event) {
      event.preventDefault();
      mySlider.goToNextSlide();
    });

    $(".gallery-slider-nav__btn--prev").click(function(event) {
      event.preventDefault();
      mySlider.goToPrevSlide();
    });

    // BX Slider
    mySlider.bxSlider({
      controls: false,
      startSlide: 0,
    });

  })(jQuery);
</script>
