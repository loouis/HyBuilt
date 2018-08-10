<?php /* Template Name: About us */ get_header();?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<main role="main">
  <div class="website-container">

    <section class="prd-content">
      <div class="prd-content__desc mobile-wrap lay-split">
        <section class="wow fadeIn">
          <?php the_content();?>
        </section>

        <?php if( have_rows('bptt_repeater') ): ?>

          <section class="prd-content__desc__b-points wow fadeIn">

            <?php while( have_rows('bptt_repeater') ) : the_row();
              $icon = get_sub_field('bptt__icon');
            ?>

              <article class="prd-content__desc__b-points__point">
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
          $aboutImageId = get_post_thumbnail_id();
          $d_aboutImage = wp_get_attachment_image_src($aboutImageId, 'd_split-screen');
        ?>

        <div class="prd-content__image prd-content__image--image lay-split cover">
          <div class="text">
            <h1 class="f-shadow--dark wow slideInUp" data-wow-delay=".3s"><?php the_title();?></h1>
            <p class="f-shadow--dark f-medium wow slideInUp" data-wow-delay=".5s"><?php the_excerpt();?></p>
          </div>
          <div class="image wow imgScaleIn" style="background-image: url('<?php echo $d_aboutImage[0];?>')"></div>
        </div>

      <?php } ?>
    </section><!-- //prd-content -->

    <?php /* Remove Sandstone link
    <section class="our-services">
      <header class="b-grey">
        <h2 class="boldest f-medium">Our Services</h2>
      </header>
      <?php
        $posts = get_field('relationship_links');
        if( $posts ): ?>

          <?php foreach( $posts as $post):?>
            <?php setup_postdata($post); ?>

              <?php
                $heroImageId = get_post_thumbnail_id();
                $d_heroImage = wp_get_attachment_image_src($heroImageId, 'd_split-screen');
                $m_heroImage = wp_get_attachment_image_src($heroImageId, 'm_full-screen');
              ?>

              <a href="<?php the_permalink();?>" class="lay-split lay-split--our-services">
                <div class="text">
                  <h1 class="uppercase f-white f-large boldest f-shadow--dark"><?php the_title();?></h1>
                </div>
                <?php if( wp_is_mobile() ){ ?>
                  <div class="image cover" style="background-image:url('<?php echo $m_heroImage[0];?>');"></div>
                <?php }else{ ?>
                  <div class="image cover" style="background-image:url('<?php echo $d_heroImage[0];?>');"></div>
                <?php }  ?>
              </a>
            <?php endforeach; ?>
          <?php wp_reset_postdata();?>

        <?php endif; ?>
    </section>
    */ ?>

  </div><!-- //website-container -->
</main><!-- //main  -->

<?php endwhile; endif; ?>

<?php get_footer();?>
