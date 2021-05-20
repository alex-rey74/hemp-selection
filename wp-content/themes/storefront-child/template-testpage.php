<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Test
 *
 * @package storefront
 */

get_header(); ?>

<div id="primary" class="content-area content-max-width">
    <main id="main" class="site-main" role="main">
    <h1 class="center audrey">PAGE DE TEST</h1>
    <div class="separator">
            <img src="<?php echo wp_get_upload_dir()['baseurl']."/img/deco3.svg"?>" alt="">
        </div>
    <? echo do_shortcode('[contact-form-7 id="623" title="Formulaire de contact 1"]'); ?>
    <br>
    <br>
    <? echo do_shortcode('[smartslider3 slider="3"]'); ?>
    </main>
</div>

<?php
get_footer();