<?php get_header(); ?>

<main id="content">

	<div class="container">
		<div class="row">
			<div class="twelve columns">
        <h1><?php the_title(); ?></h1>
        <hr class="black">
			</div>
		</div>
		<div class="row">
			<div class="three columns">

				<?php

		        // check if the repeater field has rows of data
		        if( have_rows('content_blocks') ):

		         	// loop through the rows of data
		            while ( have_rows('content_blocks') ) : the_row(); ?>

		              <?php

		                if (get_sub_field('call_to_action_link')) {
		                  $project = get_sub_field('call_to_action_link');

		                  $project_terms = wp_get_object_terms($project->ID, 'type');

		                  $filter_terms = '';

		                  if ( ! empty( $project_terms ) ) {
		                  	if ( ! is_wp_error( $project_terms ) ) {
		                			foreach( $project_terms as $term ) {
		                			     $filter_terms .= " " . $term->slug;
		                			}
		                  	}
		                  }

		                }

		              ?>

		              <div class="item">

		                <div class="content-block">

		                  <?php

		                    // display a sub field value
		                    if (get_sub_field('content_block_type') == 'image-only') {

		                      $image = get_sub_field('image');
		                      $thumb = $image['sizes']['grid-image'];

		                      ?>

		                      <img src="<?php echo $thumb; ?>" />

		                      <?php

		                    }
		                    elseif (get_sub_field('content_block_type') == 'image-with-full-overlay') {

		                      $image = get_sub_field('image');
		                      $thumb = $image['sizes']['grid-image'];

		                      ?>

		                      <img src="<?php echo $thumb; ?>" />

		                      <div class="image-full-overlay">

		                        <div class="text-1">
		                          <h1><?php echo get_sub_field('title'); ?></h1>
		                          <h3><?php echo get_sub_field('tagline') ?></h3>
		                        </div>

		                        <div class="text-2">
		                          <h3><?php echo get_sub_field('full_text'); ?></h3>
		                          <h5><a href="<?php echo get_permalink(get_sub_field('call_to_action_link')->ID); ?>"><?php echo get_sub_field('call_to_action'); ?> <i class="fa fa-long-arrow-right"></i></a></h5>
		                        </div>

		                      </div>

		                      <?php

		                    }
		                    elseif (get_sub_field('content_block_type') == 'image-with-partial-overlay') {

		                      $image = get_sub_field('image');
		                      $thumb = $image['sizes']['grid-image'];

		                      ?>

		                      <img src="<?php echo $thumb; ?>" />

		                      <div class="image-partial-overlay">

		                        <div class="text-1">
		                          <h3><?php echo get_sub_field('tagline') ?></h3>
		                        </div>

		                        <div class="text-2">
									<?php if (get_sub_field('call_to_action_link')) { ?>
		                          		<h5><a href="<?php echo get_permalink(get_sub_field('call_to_action_link')->ID); ?>"><?php echo get_sub_field('call_to_action'); ?> <i class="fa fa-long-arrow-right"></i></a></h5>
									<?php } ?>
		                        </div>

		                      </div>

		                      <?php

		                    }
		                    elseif (get_sub_field('content_block_type') == 'title-only') {

		                      ?>

		                      <div class="title">

		                        <h1><?php echo get_sub_field('title') ?></h1>

		                        <h5><a href="<?php echo get_permalink(get_sub_field('call_to_action_link')->ID); ?>"><?php echo get_sub_field('call_to_action'); ?> <i class="fa fa-long-arrow-right"></i></a></h5>

		                      </div>

		                      <?php
		                    }
		                    elseif (get_sub_field('content_block_type') == 'quote') {

		                      ?>

		                      <div class="quote">

		                        <p>&ldquo;<?php the_sub_field('full_text'); ?>&rdquo;</p>
		                        <h5>&mdash; <?php the_sub_field('citation'); ?></h5>

		                      </div>

		                      <?php

		                    }
												elseif (get_sub_field('content_block_type') == 'v-card') {

		                      ?>

		                      <div class="v-card">

														<?php if (get_sub_field('email') or get_sub_field('phone') or get_sub_field('additional_info')) { ?>
	                            <div class="contact-info">
	                              <?php if (get_sub_field('email')) { ?><a href="mailto:<?php echo get_sub_field("email"); ?>"><span class="email"><?php echo get_sub_field('email'); ?></span></a><br/><?php } ?>
	                              <?php if (get_sub_field('phone')) { ?><span class="phone"><?php echo get_sub_field('phone'); ?></span><br/><?php } ?>
	                              <?php if (get_sub_field('additional_info')) { ?><span class="additional-info"><?php echo get_sub_field('additional_info'); ?></span><?php } ?>
	                            </div>
	                          <?php } ?>

	                          <?php if (get_sub_field('link')) { ?>
	                            <div class="download">
	                              <img src="<?php echo get_template_directory_uri(); ?>/img/vcard.png" />
	                              <h5><a href="<?php echo get_sub_field('link'); ?>">Download V Card</a></h5>
	                            </div>
	                          <?php } ?>

		                      </div>

		                      <?php

		                    }
												elseif (get_sub_field('content_block_type') == 'link') {

		                      ?>

		                      <div class="title">

	                          <?php if (get_sub_field('external_link')) { ?>
	                            <a href="<?php echo get_sub_field('external_link'); ?>"><?php echo get_sub_field('call_to_action'); ?> <i class="fa fa-long-arrow-right"></i></a>
	                          <?php } ?>

		                      </div>

		                      <?php

		                    }
		                    else {



		                    }



		                  ?>

		                </div>

		              </div>

		            <?php endwhile;

		        else :

		            // no rows found

		        endif;

		      ?>

			</div>
			<div class="nine columns <?php if( !have_rows('content_blocks') ) { echo 'offset-by-three'; } ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
