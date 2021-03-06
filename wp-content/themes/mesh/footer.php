</div><!-- #page -->

<footer class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<?php if( get_field('quote') ) { ?>

	<div class="testimonial">
		<div class="container">
			<div class="twelve columns">
				<h3>What our clients say</h3>
			</div>
		</div>
		<hr class="white">
		<div class="container">
			<div class="twelve columns">

				<blockquote>
					<p><?php the_field('quote'); ?></p>
					<footer>
						&mdash; <cite><?php the_field('cite'); ?></cite>
					</footer>
				</blockquote>

			</div>
		</div>
	</div>

	<?php } ?>

	<div class="logos">
		<div class="container">

				<div class="four columns">
					<div class="icons">
						<div class="icon">
							<a href="http://www.ccim.com/" target="_blank"><img src="<?php echo get_template_directory_uri('/'); ?>/img/ccim.png" /></a>
						</div>
						<div class="icon">
							<a href="https://www.planning.org/aicp/" target="_blank"><img src="<?php echo get_template_directory_uri('/'); ?>/img/aicp.png" /></a>
						</div>
						<div class="icon">
							<a href="http://www.icsc.org/" target="_blank"><img src="<?php echo get_template_directory_uri('/'); ?>/img/micsc.png" /></a>
						</div>
					</div>
				</div>
				<div class="eight columns">
					<div class="attribution">
						<span>Site by <a href="http://meshfresh.com" target="_blank">MESH</a></span>
					</div>
				</div><!-- End of Footer -->

		</div>
	</div>

</footer>

<div id="sidr">
	<div id="close-icon">
		<i class="fa fa-times"></i>
	</div>
	<nav>
		<?php if(has_nav_menu('main_nav')){
					$defaults = array(
						'theme_location'  => 'main_nav',
						'menu'            => 'main_nav',
						'container'       => false,
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					); wp_nav_menu( $defaults );
				}else{
					echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
				} ?>
	</nav>
</div>


<?php wp_footer(); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri('/'); ?>/js/jquery.sidr.js"></script>

<script>
	jQuery(document).ready(function() {
	  jQuery('.menu-toggle').sidr();
	});
</script>

</body>
</html>
