<?php /*
* Template Name: Homepage - Fullscreen
*/
get_header(); ?>

<main id="main" class="site-main homepage-fullscreen" role="main">

  <?php if (get_field("callout_headline")): ?>
    <div class="container">
      <div class="row">
        <div class="ten columns offset-by-one">
            
          <div class="callout">
            <h1><?php the_field("callout_headline"); ?></h1>
            <a href="<?php echo get_field('callout_button_link'); ?>">
              <div class="callout-button">
                <h3><?php the_field("callout_button_text"); ?> <i class="fa fa-long-arrow-right"></i></h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php endif ?>

</main><!-- #main -->

<?php get_footer(); ?>
