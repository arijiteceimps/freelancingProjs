<?php
/**
 * The template for displaying the footer
 */
?>

<!-- Footer Start -->
<footer>
	<section class="footer_top">
      	<div class="container clearfix">
			<div class="footer_block">
            	<!--<a href="<?php bloginfo('url'); ?>/" class="log"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_footer.jpg" alt=""></a>-->
				<?php if ( is_active_sidebar( 'footer-about' ) ) : ?>
					<?php dynamic_sidebar( 'footer-about' ); ?>
				<?php endif; ?>
			</div>
			<div class="footer_block">
            	<h2>Connect With Us</h2>
				<?php if ( is_active_sidebar( 'footer-address' ) ) : ?>
					<?php dynamic_sidebar( 'footer-address' ); ?>
				<?php endif; ?>
			</div>
            <div class="footer_block">
            <h2>Quick Links</h2>
				<?php wp_nav_menu( array( 'menu_class' => 'navigation', 'container' => false, 'theme_location' => 'footer' ) ); ?>
			</div>
            <div class="footer_block">
            <h2>Connect Socially</h2>
				<?php if ( is_active_sidebar( 'footer-social' ) ) : ?>
					<?php dynamic_sidebar( 'footer-social' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="footer_bottom">
      <div class="container clearfix">			
			<div class="footer_bottom_right">
				<p>Copyrights &copy; <?php echo date('Y'); ?> Timber Shutters Direct. All Rights Reserved.</p>
			</div>
		</div>
	</section>
</footer>
<!-- Footer End -->

<a id='backTop'>Back To Top</a>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsiveslides.css">
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/responsiveslides.js"></script>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.backTop.min.js"></script>

<script type="text/javascript">
$("#slider").responsiveSlides({
    auto: true,
    pager: true,
    nav: false,
    speed: 300,
});

$( ".envira-gallery-item a" ).append( "<span class='zoom'></span>" );

$('#backTop').backTop({
    'position' : 1000,
    'speed' : 500,
    'color' : 'red',
});

$( ".mobile_menu_header a" ).click(function(e) {
    e.preventDefault();
    $( ".navigation" ).slideToggle();
});
</script>

<?php wp_footer(); ?>

</body>
</html>
