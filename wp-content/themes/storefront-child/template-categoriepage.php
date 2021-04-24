<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Categories
 *
 */

 
get_header(); ?>

<div id="primary" class="content-area content-max-width">
    <main id="main" class="site-main" role="main">
        <div class="separator">
            <img src="<?php echo wp_get_upload_dir()['baseurl']."/img/deco3.svg"?>" alt="">
        </div>
        <div>
            <h1 class="center audrey">Nos Produits</h1>
        </div>

        <div class="half-wrapper">
            <div class="half-page" data-aos="zoom-out-right">
                <a href="<?php echo get_bloginfo('wpurl'). "/categorie-produit/fleurs/"; ?>">
                    <div class="container-img fleurs">
                        <h2 class="caption">FLEURS</h2>
                    </div>
                </a>
            </div>

            <div class="half-page" data-aos="zoom-out-left">
                <a href="<?php echo get_bloginfo('wpurl'). "/categorie-produit/vape/"; ?>">
                    <div class="container-img vape">
                        <h2 class="caption">VAPE</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="half-wrapper">
            <div class="half-page " data-aos="zoom-out-right">
                <a href="<?php echo get_bloginfo('wpurl'). "/categorie-produit/huiles/"; ?>">
                    <div class="container-img huile">
                        <h2 class="caption">HUILE</h2>
                    </div>
                </a>
            </div>
            <div class="half-page " data-aos="zoom-out-left">
                <a href="<?php echo get_bloginfo('wpurl'). "/categorie-produit/alimentaire/"; ?>">
                    <div class="container-img alimentaire">
                        <h2 class="caption">ALIMENTAIRE</h2>
                    </div>
                </a>
            </div>
        </div>
    </main>
</div>
<?php
get_footer();