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
    <section class="ung_top">
		<div class="ung1">
			<div class="ung2">
            <h1>UNESCO ungambassadører</h1>
	    </div>
        
        <!-- <div class="citat">
            <p>“UNESCO-ASP samarbejdet <br> har åbnet fantastiske muligheder <br> for min skole ude i verden”</p>
        </div> -->

        <div class="ung_splash">
            <img src="" alt="">
        </div>
	</div>
	</section>
	
	
</div>	
	<section class="bottom">
		<a href="#ung_container"><p class="pil">
	▼
</p></a>
<h2>
Hvem er vi?</h2>
<p>
Vi er UNESCO ungeambassadør, der gennem ung-ung-formidling formidler UNESCO’s værdier og normer til andre studerende på verdensmålsskolerne. Derigennem skaber vi viden, engagement og motivation for at arbejde med UNESCO’s værdier og normer. 
Vi er en unik mulighed for at skabe en bredere forståelse af verden omkring os. Gennem vores formidling og aktive læring skaber vi et forum for refleksion og videregiver værktøjer til handling. Vores fokus i det danske UNESCO ASP netværk er via oplysning og dannelse at skabe unge mennesker med forståelse for globalt medborgerskab og bæredygtig udvikling.</p>
   
<div id="ung_container">

<div class="kolonner">
    <div class="kolonne1">
        <h3>Hvad tilbyder vi?</h3>
        <ul>
            <li>Input og oplæg til projekter, emneuger mm </li>
            <li>Supplering til den daglige undervisning </li>
            <li>Aktiv læring</li>
            <li>Skabelse af dialog, refleksion og debat</li>
            <li>Fokus på medborgerskab og bæredygtig udvikling</li>
        </ul>
    </div>
    <div class="kolonne2">
        <div class="ungbillede"><img src="" alt=""></div>
    </div>
    </div>
        <div>
            <h3>Få en ungambassadør ud</h3>
            <p>Henvendelse for at få UNESCO ungeambassadører (UUA’er) ud til oplæg og eller anden relevans sker gennem ungeambassadør-koordinatorerne Liselotte Larsen (LL@ungdomsbyen.dk) og Karsten Damgaard (KD@ungdomsbyen.dk).
            Det forventes, at der ved henvendelse indgås i en fælles dialog mellem pågældende skole og UUA-koordinatorerne, omkring hvad ungambasadørene kommer ud og bidrager med, tidsrummet som oplægget skal forekomme i, og ikke mindst hvilken elevgruppe UA’erne skal fremlægge for, indgå i en lige dialog med og planlægge aktiv læring for. 
            UUA’erne har intet pædagogisk ansvar, det forventes dermed at klassens lærer, har denne disciplinerende position under oplægget. Dette er også gældende for elever med specielle behov. Yderligt forventes et engagement fra UUA-teamets side, i form af dokumentation af fremlæggelse og aktiviteter.
            </p>
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