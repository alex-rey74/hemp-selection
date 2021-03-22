<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div>
				<h2 class="center audrey">Finest Quality Products</h2>
			</div>
		
			<?php
				echo do_shortcode('[smartslider3 slider="2"]');
			?>
			<div class="half-wrapper">
				<div class="half-page" data-aos="zoom-out-right">
					<div class="text-center audrey">
						<p>Bienvenue sur Hemp Selection</p>
						<p>Votre référence en produit CBD</p>
					</div>
				</div>
				<div class="half-page black" data-aos="zoom-out-left">
					<img src="<?php echo wp_get_attachment_image_src(157, 'full')[0]; ?>" alt="">
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
