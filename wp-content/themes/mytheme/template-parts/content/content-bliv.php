<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header overskrift">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>

    <body>
    <section class="bliv1">
		
    <h1 class="bliv_h1">Bliv verdensmålsskole</h1>

        <div class="bliv_splash"></div>
	</section>
	
	
</div>	
	<section class="bliv2">
		<!-- <a href="#bliv_container"><p class="pil">
	▼
</p></a> -->

    <div id="bliv_container">
<div class="bliv_grid">
	<div class="kolonne1"><h3>Ansøgning om deltagelse:</h3>
<ul>
	<li>Giv en kort introduktion til skolen og jeres lokalområde.</li>
	<li>Forklar, hvorfor jeres skole ønsker at blive en Verdensmålsskole.</li>
	<li>Hvordan ser I sammenhængen mellem ASP og skolens værdier, målsætning, øvrige udviklingsaktiviteter og internationalt arbejde?</li>
	<li>Hvilke konkrete mål og idéer har I til de kommende års arbejde som Verdensmålsskole?</li>
	<li>Hvordan forestiller I jer at organisere arbejdet med ASP på skolen? Hvilke fag, lærere, elever/klasser tænkes aktivt at indgå i projektarbejdet?
</li>
</ul></div>
<div class="kolonne2">
	<h3>Kriterier til skoler i ASP-netværket:</h3>
<ul>
	<li>Deltagelse i og opbakning til ASP-arbejdet fra skolens ledelse, pædagogisk råd, elever og forældre.</li>
	<li>ASP indgår i skolens værdigrundlag, målsætning og faglig-pædagogiske udviklingsaktiviteter.</li>
	<li>Omfang og karakter af de konkrete idéer og planer til fremtidige ASP aktiviteter.</li>
	<li>Idéer til synliggørelse af ASP og UNESCO lokalt og nationalt samt mulige bidrag til netværkets fælles arbejde.</li>
</ul>
</div>

</div>
    </div>
<section class="bliv3">
 <div class="tilmeld">
          <h2>Tilmeld dig</h2>
          <div class="login_info">
            <div class="fornavn">
              <label for="Fornavn"
                ><p>Fornavn</p>

                <input placeholder="Nogen" type="text" name="fnavn" required />
              </label>
            </div>
            <div class="efternavn">
              <label for="Efternavn"
                ><p>Efternavn</p>

                <input
                  placeholder="Nogensen"
                  type="text"
                  name="enavn"
                  required
                />
              </label>
            </div>
            <div class="mail">
              <label for="E-mail">
                <p>E-mail</p>

                <input
                  placeholder="nogen@gmail.com"
                  type="email"
                  name="email"
                  id="email"
                  required
                />
              </label>
            </div>
          </div>

		     <div class="form-felt">
            <label>
              Besked
              <textarea
                placeholder="Din besked her..."
                name="besked"
                rows="5"
                required
              ></textarea>
            </label>
          </div>


          <button class="bekraeft_knap">BEKRÆFT</button>
        
        </div>
</section>
	</section>

	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Post title. Only visible to screen readers. */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">' . twentynineteen_get_icon_svg( 'edit', 16 ),
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
</body>