<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>

<!-- Body Start -->
<main>
	<section class="home_gallery">
		<div class="container clearfix">
			<?php the_field('gallery_heading'); ?>
			<?php echo do_shortcode('[go_gallery cat=\'awnings, external-blinds, honeycomb-blinds, panel-blinds, roller-blinds, roman-blinds, shutters, venetians, vertical-blinds\' size=\'small\' menu_button=\'All\']'); ?>
			
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
