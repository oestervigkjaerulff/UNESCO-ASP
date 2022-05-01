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
    <section class="top">
		<div class="lange">
			<div class="lange2">
    <h1>Velkommen til UNESCO asp</h1>
	</div>
        
        <div class="citat">
            <p>“UNESCO-ASP samarbejdet <br> har åbnet fantastiske muligheder <br> for min skole ude i verden”</p>
        </div>
        <div class="billede1">
            <img src="webp/billede_1" alt="">
        </div>
	</div>
	</section>
	
	
</div>	
	<section class="bottom">
		<a href="#forside_container"><p class="pil">
	▼
</p></a>

	
    <div id="forside_container">
<h2>
Velkommen til netværket for UNESCO Verdensmålsskoler</h2>
<div class="kolonner">
<p>Hvad er UNESCO ASP?

UNESCO Associated Schools Project (ASP) er et globalt uddannelsesnetværk, som blev lanceret i 1953 med det formål at udvikle undervisning, der fremmer international forståelse og fred. Når en skole bliver en del af UNESCO ASP, forpligter den sig til at fremme UNESCO’s idealer gennem udvikling af undervisningsmateriale og -metoder, der kan forberede børn og unge til at agere i en kompleks og gensidig afhængig verden. Netværket består i dag af 11.500 uddannelsesinstitutioner (lige fra børnehaver til lærerseminarier) spredt over 180 lande. Danmark blev i 2000 en del af ASP-netværket og har i dag 58 tilmeldte skoler.</p>
</div>
    </div>
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