<?php /* Template Name: Contact */ get_header();?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<main role="main">
  <div class="website-container">

    <section class="split-content">
      <div class="wrap lay-split">

        <section class="wow fadeIn">
          <?php the_content();?>
        </section>

        <section class="contact-details wow fadeIn">

          <p class="box-text box-text--blue uppercase">Contact details</p>

          <a href="<?php the_field('hybuilt_google_maps_link', 'option');?>" target="_blank" class="icon-text">
            <i>
							<svg version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<path fill="#ffffff" d="M50,0.8C30.1,0.8,13.9,17,13.9,36.9c0,16.6,11.1,30.8,27,34.9L48.4,98c0.2,0.7,0.8,1.2,1.6,1.2
								s1.4-0.5,1.6-1.2l7.5-26.2c16-4.1,27-18.3,27-34.9C86.1,17,69.9,0.8,50,0.8z M50,59.5c-12.5,0-22.7-10.2-22.7-22.7
								S37.5,14.2,50,14.2c12.5,0,22.7,10.2,22.7,22.7S62.5,59.5,50,59.5z"/>
							</svg>
            </i>
            <p><?php the_field("hybuilt-main-address", "option");?></p>
          </a>
          <a href="#0" class="icon-text">
            <i>
							<svg version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								 <path fill="#ffffff" d="M50,0.7C22.8,0.7,0.7,22.8,0.7,50c0,27.2,22.1,49.3,49.3,49.3S99.3,77.2,99.3,50C99.3,22.8,77.2,0.7,50,0.7z M55.7,63.1
								C54,63.9,52,64.3,50,64.3c-7.9,0-14.3-6.4-14.3-14.3c0-5.6,3.2-10.4,7.9-12.8l5.6-24.7l6.5,24.4c5,2.2,8.5,7.2,8.5,13.1
								c0,2.1-0.5,4-1.2,5.8l12.1,18.8L55.7,63.1z"/>
							</svg>
            </i>
            <p><?php the_field("hybuilt-main-opening-times", "option");?></p>
          </a>

					<a href="mailto:<?php the_field("hybuilt-main-email", "option");?>" class="icon-text">
            <i>
							<svg version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								<path fill="#FFFFFF" d="M97.2,20.8L52.9,56.6c-0.3,0.3-0.7,0.4-1.1,0.4c-0.4,0-0.7-0.1-1-0.3L2.2,21.6c-0.9,1.6-1.4,3.5-1.4,5.6
									v45.7c0,6,4.4,10.5,10.2,10.5h77.6c5.8,0,10.5-4.7,10.5-10.5V27.2C99.2,24.7,98.5,22.5,97.2,20.8z"/>
								<path fill="#FFFFFF" d="M94.7,18.3c-1.7-1.1-3.7-1.7-6.1-1.7H11.4c-2.7,0-5.1,0.8-6.8,2.3l47.2,34.2L94.7,18.3z"/>
							</svg>
            </i>
            <p><?php the_field("hybuilt-main-email", "option");?></p>
          </a>

					<a href="tel:<?php the_field("hybuilt-main-tel-no", "option");?>" class="icon-text">
            <i>
							<svg version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
								 <path fill="#ffffff" d="M96.1,71.7L85.5,61.1c-2.2-2.2-5.1-3.4-8.3-3.4c-3.1,0-6.1,1.2-8.3,3.4l-2.4,2.4
								c-10.8-9-21.1-19.3-30.1-30.1l2.4-2.4c4.6-4.6,4.6-12,0-16.5L28.3,3.9C26,1.7,23.1,0.5,20,0.5s-6.1,1.2-8.3,3.4L5.9,9.7
								c-5.6,5.6-6.5,14.4-2.1,21c17,25.8,39.7,48.4,65.5,65.5C72,98,75.2,99,78.5,99c4.5,0,8.6-1.7,11.8-4.9l5.8-5.8
								C100.6,83.7,100.6,76.3,96.1,71.7z"/>
							</svg>
            </i>
            <p><?php the_field("hybuilt-main-tel-no", "option");?></p>
          </a>
        </section>
      </div><!-- //prd-content__desc -->

      <div class="split-content__contact-form lay-split cover wow fadeIn">
        <div class="contact-form wow fadeIn">
          <section>
            <p class="box-text box-text--blue uppercase">Contact form</p>
            <div class="wrap">
              <p>Please fill out the form below and we will get back to as soon as possible.</p>
              <?php echo do_shortcode( '[contact-form-7 id="188" title="Contact form"]' ); ?>
            </div>
          </section>
        </div>
      </div>

    </section><!-- //prd-content -->



  </div><!-- //website-container -->
</main><!-- //main  -->

<?php endwhile; endif; ?>

<?php get_footer();?>
