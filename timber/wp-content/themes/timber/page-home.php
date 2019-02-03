<?php
/*
Template Name: Home
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

	<section class="home_services">
		<div class="container clearfix">
			<?php the_field('service_heading'); ?>
			<div class="services_cont">
				<?php if( have_rows('services_blocks') ): ?>
				    <?php while( have_rows('services_blocks') ): the_row(); ?>
				 		<div class="home_services_block">
                        	<img src="<?php the_sub_field('service_image'); ?>" alt="">
							<h3><?php the_sub_field('service_heading'); ?></h3>
							<div class="content"><p><?php the_sub_field('service_description'); ?></p></div>
                            <div class="home_services_link">								
								<a href="<?php the_sub_field('link'); ?>">Click Here to Read More</a>
							</div>
                            
                            
						</div>
                        
						
				    <?php endwhile; ?>
				<?php endif; ?>
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
