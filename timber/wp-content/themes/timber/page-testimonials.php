<?php

/*

Template Name: Testimonials

*/

?>

<?php get_header(); ?>



<!-- Body Start -->

<main>

	<section class="home_testimonial" style="background: #FFF; margin: 0px;">

		<div class="container clearfix">

			<h2>What People Say</h2>

			<?php

	          $args = array(

	            'post_type' => 'testimonial',

	            'numberposts' => -1,

	            'posts_per_page' => -1,

	            'order' => 'DESC'

	        );

	          $myquery = new WP_Query($args);

	            if($myquery->have_posts()) :

	                while($myquery->have_posts()) :

	                   $myquery->the_post();

	        ?>

			<div class="testimonial_main" style="    padding: 10px 0px;

    border-bottom: #eee 1px solid;

    margin: 0px 0px 15px;">

				<?php the_content(); ?>

				<p class="name"><strong><?php the_title(); ?></strong></p>

			</div>

			<?php endwhile; endif; ?>

		</div>

	</section>

    <section class="have_queries">

    	<div class="container clearfix">

           

        	<?php 

			wp_reset_query();

			the_field('have_any_queries'); ?>

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

</main>

<!-- Body End -->



<?php get_footer(); ?>

