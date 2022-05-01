<?php

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <article class="style_article">
        <h2></h2>
        <div class="style_single">
          <section id="single_splash">
          <div class="single_billede">
            <img src="" alt="">
          </div>
          </section>
          <section id="single_tekst">
         
          <p class="fag"></p>
          <p class="uddannelsestrin"></p>
          
        </section>
        </div>
        <p class="tekst"></p>
      </article>
		

		</main><!-- #main -->

        <script>
            let projekt; 

            const dbUrl = "https://albertekjaerulff.dk/unesco/wp-json/wp/v2/projekt/"+<?php echo get_the_ID() ?>;

            async function hentData() {
                const data = await fetch(dbUrl);
                projekt = await data.json();
                vis();
            }

            function vis() {
            document.querySelector(".fag").textContent = "Fag: " + projekt.fag;
            document.querySelector(".tekst").textContent =projekt.tekst;
            document.querySelector(".uddannelsestrin").textContent = "Uddannelsestrin: " + projekt.uddannelsestrin;
            document.querySelector("h2").textContent =projekt.title.rendered;
            document.querySelector("img").src = projekt.billede.guid;
            }

            hentData();

       </script> 
	</div><!-- #primary -->

<?php
get_footer();
