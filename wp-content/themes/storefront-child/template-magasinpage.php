<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Magasins
 *
 * @package storefront
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <h1 class="center audrey">Nos Magasins</h1>
    <div id="map"></div>
    </main>
</div>

<?php
get_footer();

echo '<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxFr7J794NoIiwOLpdylV11IqPDpz34mY&callback=initMap&libraries=&v=weekly"
async
></script>';