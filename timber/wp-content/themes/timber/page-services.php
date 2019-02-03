<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>

<!-- Body Start -->
<main>
	<section class="main_content services">
		<div class="container clearfix">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
		</div>
	</section>

	<section class="have_queries">
    	<div class="container clearfix">
        	<?php the_field('have_any_queries'); ?>
        </div>
    </section>

	

	
    
</main>
<!-- Body End -->

<?php get_footer(); ?>
