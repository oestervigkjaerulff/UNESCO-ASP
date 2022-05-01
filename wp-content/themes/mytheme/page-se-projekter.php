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
      <article class="styleprojekter">
        <img src="" alt="" />
        <h2></h2>
        <p class="fag"></p>
        <p class="uddannelsestrin"></p>
        <p class="udsnit"></p>
      </article>
    </template>

	<div id="primary" class="content-area">
                
 
    
		<main id="main" class="site-main">	
      <nav id="filtrering">
      </nav>
      <h1></h1>
            <section class="projektcontainer"></section>
    </main><!-- #main -->

<script>
    "use strict";
       console.log("nu starter script");
      const container = document.querySelector(".projektcontainer");
      const temp = document.querySelector("template");

      const url = "https://albertekjaerulff.dk/unesco/wp-json/wp/v2/projekt?per_page=100";
      const catUrl = "https://albertekjaerulff.dk/unesco/wp-json/wp/v2/categories";

      let data = [];
      let categories; 
      let filterProjekt = "alle";

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
        filter = this.dataset.projekt;
        document.querySelector("h1").textContent = this.textContent;
        vis();
      }

      async function hentData() {
        // console.log("hentData");
        const respons = await fetch(url);
        const catData = await fetch(catUrl);
        projekter = await respons.json();
        categories = await catData.json();
        console.log(categories);
        vis();
        opretKnapper();
      }

      function opretKnapper() {

        categories.forEach(cat =>{
          document.querySelector("#filtrering").innerHTML += `<button class="filter" data-projekt="${cat.id}">${cat.name}</button>`
        })

        addEventListenersToButtons();
      }

      function addEventListenersToButtons(){
          document.querySelectorAll("#filtrering button").forEach(elm => {
            elm.addEventListener("click", filtrering);
          })

      };

      function filtrering() {
           filterProjekt = this.dataset.projekt;
           console.log(filterProjekt);

           vis();
      }

      function vis() {
        console.log("vis");
        console.log(projekter);
        container.textContent = "";

        projekter.forEach((projekt) => {
          const klon = temp.cloneNode(true).content;

          //FILTRERING
          if (filterProjekt == "alle" || projekt.categories.includes(parseInt(filterProjekt))) {
            klon.querySelector(".fag").textContent = "Fag: " + projekt.fag;
            klon.querySelector(".udsnit").textContent =projekt.udsnit;
            klon.querySelector(".uddannelsestrin").textContent = "Uddannelsestrin: " + projekt.uddannelsestrin;
            klon.querySelector("h2").textContent =projekt.title.rendered;
            klon.querySelector("img").src = projekt.billede.guid;
            klon.querySelector("article").addEventListener("click", () => {location.href = projekt.link; })
            container.appendChild(klon);
               }
          })
      }

      function visDetaljer (hvad) {
        location.href = `page-projekter-detalje.php?id=${hvad._id}`;}

     
    </script>

	</div><!-- #primary -->

<?php
get_footer();
