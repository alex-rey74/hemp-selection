<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full footer-hs">
            <div class="col-footer">
                <img class="logo-footer" src="https://hempselection.fr/wp-content/uploads/2021/03/final-rgb-1.png" alt="Logo Hemp Selection">
            </div>
            <div class="col-footer"></div>
            <div class="col-footer">
                <ul class="no-style">
                    <li><a class="audrey" href="<?php echo get_permalink(393); ?>">Mentions Légales</a></li>
                    <li><a class="audrey" href="<?php echo get_permalink(389); ?>">CGV</a></li>
                </ul>
            </div>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->


</div><!-- #page -->


<?php wp_footer(); ?>
</body>
</html>
