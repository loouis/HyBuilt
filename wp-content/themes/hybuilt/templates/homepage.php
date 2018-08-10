<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<main role="main">

  <div class="website-container website-container--home">

    <a href="<?php echo site_url();?>/concrete-sleepers" class="lay-split lay-split--homepage">
      <div class="text">
        <h1 class="uppercase f-white f-large boldest f-shadow--dark">Concrete Sleepers</h1>
      </div>
      <?php if( wp_is_mobile() ){ ?>
        <div class="image cover" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/m_homepage-concrete-sleeper.jpg')"></div>
      <?php }else{ ?>
        <div class="image cover" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/d_homepage-concrete-sleeper-2.jpg')"></div>
      <?php } ?>
    </a>

    <a href="<?php echo site_url();?>/sandstone" class="lay-split lay-split--homepage">
      <div class="text">
        <h1 class="uppercase f-white f-large boldest f-shadow--dark">Sandstone</h1>
      </div>
      <?php if( wp_is_mobile() ){ ?>
        <div class="image cover" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/m_homepage_sandstone.jpg')"></div>
      <?php }else{ ?>
        <div class="image cover" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/d_homepage-sandstone01.jpg')"></div>
      <?php } ?>
    </a>

    <?php /*
    <a href="<?php echo site_url();?>/modular-wall" class="lay-split lay-split--homepage">
      <div class="text">
        <h1 class="uppercase f-white f-large boldest f-shadow--dark">Modular <br/>Wall</h1>
      </div>
      <?php if( wp_is_mobile() ){ ?>
        <div class="image cover" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/d_homepage_modular-walls.jpg')"></div>
      <?php }else{ ?>
        <div class="image cover" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/d_homepage_modular-walls.jpg')"></div>
      <?php } ?>
    </a>
    */ ?>

  </div><!-- //website-container -->

</main>

<?php get_footer(); ?>
