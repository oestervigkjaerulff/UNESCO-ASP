<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
       <template>
      <article>
        <h2 class="titel"></h2>
        <img src="" alt="" />
        <p class="skolenavn"></p>
        <p class="uddannelsestrin"></p>
        <p class="fag"></p>
        <p class="udsnit"></p>
        <p class="tekst"></p>
        <p class="kontakt"></p>
      </article>
    </template>

	<div id="primary" class="content-area">
                
 
    
		<main id="main" class="site-main">	
            <section class="projektcontainer"></section>
    </main><!-- #main -->

<script>
       console.log("nu starter script");
      const container = document.querySelector(".projektcontainer");
      const temp = document.querySelector("template");

      const url = "https://albertekjaerulff.dk/unesco/wp-json/wp/v2/projekt?per_page=100";

      let data = [];

      let filter = "alle";
      const filterknapper = document.querySelectorAll("button");
      let projekter;
    

      document.addEventListener("DOMContentLoaded", start);

      function start() {
        filterknapper.forEach((knap) => {
          knap.addEventListener("click", setFilter);
        });

        hentData();
      }

      function setFilter() {
        filter = this.dataset.kategori;
        document.querySelector("h1").textContent = this.textContent;
        vis();
      }

      async function hentData() {
        console.log("hentData");
        const respons = await fetch(url);
        projekter = await respons.json();
        vis();
      }

      function vis() {
        console.log("vis");
        console.log(projekter);
        container.textContent = "";

        projekter.forEach((projekt) => {
          const klon = temp.cloneNode(true).content;

          //FILTRERING
          if (filter == projekt.kategori || filter == "alle") {
            klon.querySelector(".skolenavn").textContent = projekt.skolenavn;
            klon.querySelector(".fag").textContent =projekt.fag;
            klon.querySelector(".udsnit").textContent =projekt.udsnit;
            klon.querySelector(".uddannelsestrin").textContent =projekt.uddannelsestrin;
            klon.querySelector(".kontakt").textContent =projekt.kontakt;
            klon.querySelector(".tekst").textContent =projekt.tekst;
            klon.querySelector(".titel").textContent =projekt.titel;
         
            klon.querySelector("img").src = projekt.billede.guid;



            container.appendChild(klon);
          // 
          }
        });
      }

      hentData();
    </script>

	</div><!-- #primary -->

<?php
get_footer();
