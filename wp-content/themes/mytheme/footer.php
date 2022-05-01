<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info">
			<div class="logo-footer-container">
				<div class="logo-footer"></div>
			</div>
			
			<div class="poul">
	<ul>
<li><strong>National Koordinator</strong></li>
<li>Poul Erik Christoffersen</li> 
<li>pec@ungdomsbyen.dk</li> 
<li>Tlf: +45 4491 4646</li> 
<li>Direkte: +45 2174 4275</li> 
   </ul>
</p>   
			</div>

			<div class="adresse">
				<ul>
					<li><strong>Ungdomsbyen</strong> </li>
					<li>c/o Global Platform</li>
					<li>Faelledvej 12C, 3. sal</li>
					<li>2200 Copenhagen N</li>
					<li>Denmark</li>
				</ul>
			</div>

			<div class="SoMe">
				<ul>
					<li>Facebook</li>
					<li>LinkedIn</li>
				</ul>
				<div class="nyhedsbrev">
				<h4>Tilmeld dig vores nyhedsbrev</h4>
				<label for="E-mail">
                

                <input
                  placeholder="din email her"
                  type="email"
                  name="email"
                  id="email"
                  required
                />
              </label>

			  <button class="bekraeft_knap">TILMELD</button>
			</div>
			</div>

		

			          

            
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
