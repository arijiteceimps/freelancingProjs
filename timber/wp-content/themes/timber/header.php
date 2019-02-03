<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Header Start -->
<header>
	<section class="header_top">
      
		<div class="container clearfix">
			<div class="logo_cont">
                <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt=""></a>
            </div>
            
            <div class="address_top">
            	<div class="header_address">
					<?php if ( is_active_sidebar( 'header-address' ) ) : ?>
                        <?php dynamic_sidebar( 'header-address' ); ?>
                    <?php endif; ?>
				</div>
				<div class="header_phone">
					<?php if ( is_active_sidebar( 'header-phone' ) ) : ?>
                        <?php dynamic_sidebar( 'header-phone' ); ?>
                    <?php endif; ?>
                </div>
                <div class="header_email">
					<?php if ( is_active_sidebar( 'header-email' ) ) : ?>
                        <?php dynamic_sidebar( 'header-email' ); ?>
                    <?php endif; ?>
                </div>
            </div>
            
		</div>
	</section>
    
    <section class="menu">
    	<div class="container clearfix">
    	<nav>
            	<h2 class="mobile_menu_header">Main Navigation <a href="#"></a></h2>
				<?php wp_nav_menu( array( 'menu_class' => 'navigation', 'container' => false, 'theme_location' => 'primary' ) ); ?>
            </nav>
            </div>
    </section>

	<section class="banner">
      
		<?php if(is_front_page()){ ?>
		<ul class="rslides" id="slider">
            <?php
              $args = array(
                'post_type' => 'slider',
                'numberposts' => -1,
                'posts_per_page' => -1,
                'order' => 'ASC'
            );
              $myquery = new WP_Query($args);
                if($myquery->have_posts()) :
                    while($myquery->have_posts()) :
                       $myquery->the_post();
            ?>
            <li>
                <?php the_post_thumbnail( 'full' ); ?>
                <div class="banner_inner">
                    <div class="container clearfix">
                        <?php echo do_shortcode( '[contact-form-7 id="132" title="Free Measure & Quote"]' ); ?>
                    </div>
                </div>
            </li>
            <?php endwhile; endif; ?>
        </ul>
        <?php }elseif(is_archive()){ ?>
        <section class="inner_banner">
        	<div class="container clearfix">
			<h2>Blog</h2>
            </div>
		</section>
        <?php }else{ ?>
        <section class="inner_banner">
        	<div class="container clearfix">
			<h2><?php the_title(); ?></h2>
            </div>
		</section>
		<?php } ?>
	</section>
</header>
<!-- Header End -->	
