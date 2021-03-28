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
                <a href="<?php echo get_bloginfo('wpurl'). "/categorie-produit/fleurs/"; ?>">
                    <div class="container-img fleurs">
                        <h2 class="caption">FLEURS</h2>
                    </div>
                </a>
            </div>

            <div class="half-page" data-aos="zoom-out-left">
                <a href="<?php echo get_bloginfo('wpurl'). "/categorie-produit/aromes-vape/"; ?>">
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
        <div class="separator">
            <img src="<?php echo wp_get_upload_dir()['baseurl']."/img/deco3.svg"?>" alt="">
        </div>
        <div>
            <h2 class="center audrey">Nos Meilleures Ventes</h2>
        </div>
        <div data-aos="zoom-out">
            <?php echo do_shortcode('[products limit="8" columns="4" best_selling="true" ]') ?>
        </div>
        <div class="separator">
            <img src="<?php echo wp_get_upload_dir()['baseurl']."/img/deco3.svg"?>" alt="">
        </div>
        <div>
            <h2 class="center audrey">Nos Engagements</h2>
        </div>
        <div class="wrapper-kpi">
            <div class="kpi" data-aos="flip-up">
                <img class="svg-kpi" src="<?php echo wp_get_upload_dir()['baseurl']."/img/no-chemical.svg"?>" alt="">
                <h4 class="center audrey">Certifié sans pesticides ni métaux lourds</h4>
            </div>
            <div class="kpi" data-aos="flip-up">
                <img class="svg-kpi" src="<?php echo wp_get_upload_dir()['baseurl']."/img/natural.svg"?>" alt="">
                <h4 class="center audrey">100% Naturel</h4>
            </div>
            <div class="kpi" data-aos="flip-up">
                <img class="svg-kpi" src="<?php echo wp_get_upload_dir()['baseurl']."/img/bio.svg"?>" alt="">
                <h4 class="center audrey">Produits français BIO</h4>
            </div>
            <div class="kpi" data-aos="flip-up">
                <img class="svg-kpi" src="<?php echo wp_get_upload_dir()['baseurl']."/img/france.svg"?>" alt="">
                <h4 class="center audrey">Certifiés aux normes françaises</h4>
            </div>
        </div>
        <div class="separator separator-avis">
            <img src="<?php echo wp_get_upload_dir()['baseurl']."/img/deco3.svg"?>" alt="">
        </div>
        <div>
            <h2 class="center audrey">Avis Clients</h2>
        </div>
        <div data-aos="flip-up">
            <?php
			$content = get_post(360);
			$blocks = parse_blocks($content->post_content);
			foreach ($blocks as $key => $block) {
			echo render_block($block);
			}
			?>
        </div>



    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();