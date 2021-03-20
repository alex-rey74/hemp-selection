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
				<h2 class="center">La sélection au service de la qualité</h2>
			</div>
		
			<?php
				echo do_shortcode('[smartslider3 slider="2"]');
			?>

			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consequat tortor eros, id fringilla dui bibendum et. Fusce sit amet sollicitudin tortor. Quisque porttitor, sapien vitae consectetur volutpat, odio est egestas dolor, vitae efficitur risus ante id orci. Sed cursus tincidunt lacus, non tincidunt mi semper eget. Aenean nunc quam, aliquet ut suscipit id, maximus sed dolor. Vivamus ut pharetra est. Fusce molestie lorem eget scelerisque viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nunc leo, cursus eu ligula nec, commodo semper eros. Sed viverra nibh vitae ipsum gravida, quis aliquam sem eleifend. Cras at rhoncus dui. Maecenas finibus est quis maximus dignissim.

Quisque commodo ac velit ac vehicula. Pellentesque nec sollicitudin erat. Duis et nisi a eros vehicula accumsan in ac enim. Aenean posuere malesuada felis ac interdum. Fusce gravida eu risus et volutpat. Sed rhoncus mi ac quam dignissim, ac aliquam sem condimentum. Nulla ligula dolor, laoreet venenatis imperdiet fermentum, ullamcorper eu massa. Duis et sodales dui. Maecenas efficitur cursus libero vel mattis. Praesent ultricies rutrum malesuada.

Phasellus laoreet, quam et blandit interdum, tortor nisi laoreet neque, nec aliquet odio sapien eu arcu. Nunc sagittis mauris ac lorem tincidunt, et semper felis volutpat. Phasellus ut pulvinar nisl. Sed tincidunt nec purus ultricies mollis. Phasellus et maximus neque. Vestibulum id cursus risus, in commodo arcu. Nulla sed velit venenatis, sollicitudin nisi quis, blandit elit. Aenean sit amet est nec ex laoreet accumsan ut eget est. Aliquam eleifend elit vel quam tempor sollicitudin. Etiam pulvinar lorem eu lacus bibendum, sed efficitur mauris posuere. Donec luctus arcu eu tellus malesuada porttitor. Donec semper massa est, vitae sollicitudin est feugiat vel. Duis rutrum erat diam, eu finibus lorem tristique vitae.

Phasellus imperdiet lobortis libero non fringilla. Morbi orci risus, pretium at ullamcorper eu, sodales eget sem. Curabitur sit amet congue ligula, vel lacinia nulla. Quisque maximus urna ligula, ut hendrerit erat rutrum eu. Etiam efficitur sodales finibus. Donec libero erat, euismod non laoreet id, eleifend non ipsum. Etiam interdum tortor sed magna tincidunt, eget sollicitudin dui blandit. Praesent mattis, justo eu blandit mollis, nibh urna aliquet mi, et interdum quam tellus ac ex. Sed luctus, magna sed molestie gravida, dui lacus tempor nunc, non porta elit odio ac diam. Quisque euismod non diam nec tempus. Vivamus eu pellentesque tellus, eget laoreet diam. Curabitur laoreet, libero at euismod luctus, sapien dui lacinia tortor, quis condimentum augue orci vel felis.

Nam et velit interdum, venenatis ligula eget, tincidunt purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris lacinia luctus ex. Mauris volutpat lacinia velit vel fermentum. In maximus turpis eu velit placerat consequat. Morbi ac arcu eleifend purus dignissim consequat. Vestibulum vel dui ac mi interdum consectetur eu nec erat. Curabitur ornare felis id ligula bibendum, scelerisque euismod metus finibus. Duis nisi ante, blandit nec feugiat ac, blandit ac tellus. Nullam non semper lorem, eu pharetra est. Etiam vel odio sit amet massa porta eleifend eu elementum ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed sed purus arcu.</p>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
