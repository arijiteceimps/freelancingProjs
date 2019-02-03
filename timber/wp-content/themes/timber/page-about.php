<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<!-- Body Start -->
<main>
	<section class="main_content home">
		<div class="container clearfix">
			 <div class="imagearea">
             	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            	<img src="<?php the_field('home_welcome_image'); ?>" alt="" />
                <?php endwhile; ?>
            </div>  
        	<div class="contentarea">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            </div>
            
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
