<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<!-- Body Start -->
<main>
	<section class="main_content">
		<div class="container clearfix">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
		</div>
	</section>

	<section class="body_banner" style="background-image: url('<?php the_field('bottom_banner_image'); ?>');">
		<div class="container clearfix">
			<h2><?php the_field('bottom_banner_text'); ?></h2>
		</div>
	</section>
</main>
<!-- Body End -->

<?php get_footer(); ?>
