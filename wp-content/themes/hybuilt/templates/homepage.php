<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<main role="main">

  <div class="website-container">

    <?php
      $posts = get_field('relationship_links');
      if( $posts ): ?>

        <?php foreach( $posts as $post):?>
          <?php setup_postdata($post); ?>

            <a href="<?php the_permalink();?>" class="lay-split lay-split--homepage">
            <div class="text">
              <h1 class="uppercase f-white f-large boldest"><?php the_title();?></h1>
              <p class="f-white t-align-r"><?php the_excerpt();?></p>
            </div>
            <div class="image">
              <img src="<?php echo get_template_directory_uri();?>" alt="<?php bloginfo('name'); ?> - <?php the_title();?>">
            </div>
          </a>
          <?php endforeach; ?>
        <?php wp_reset_postdata();?>

      <?php endif; ?>

  </div><!-- //website-container -->

</main>

<?php get_footer(); ?>
