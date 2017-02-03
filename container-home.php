<style>
    div#container > section#heroics {
        display: block;
        position: relative;
        width: 100%;
        min-height: 600px;
        max-height: 638px;
	background-image: url('<?php echo get_template_directory_uri();  ?>/img/cover_lrgst.png');
        background-repeat: no-repeat;
        background-position: 0 0;
        background-size: cover;
    }

      section#heroics > article {
          display: block;
          position: relative;
          width: 324px;
          left: 66%;
          top: 90px;
          text-align: center;
      }

    @media screen and (max-width: 360px){
        section#heroics > article {

            width: 100% !important;
            left: 0px;
            top: 0px;
        }
    }

    @media screen and (max-width: 800px){
        section#heroics > article {

            width: 50%;
            left: 0px;

        }
    }

   section#heroics > article p {
         background-color: rgba(255, 255, 255, .3);
     }
     section#heroics > article p:nth-child(1){
         font-family:'Archer Italic';
         color: #333;
         font-size: 27px;
     }
     section#heroics > article p:nth-child(2){
         font-family:'EurostileLTPro-BoldCn';
         color: #006341;
         font-size: 33px;
         text-transform: uppercase;
     }
     section#heroics > article p:nth-child(4){
         font-family:'Archer Italic';
         color: #333;
         font-size: 36px;
     }

     section#heroics > article span {
         display: block;
         position: relative;
         background-color: rgba(0, 99, 65, 0.44);
     }

@media screen and (max-width:360px){
    div#container > section#heroics {
        background-position: -184px 0;
        min-height: 489px !important;
    }

    section#heroics > article p {
        background-color: rgba(255,255,255, .6);
    }

}
</style>

<div id="container">
    <section id="heroics" role="main">
        <article>
            <!--<p>reader. writer. thinker.</p>-->
            <p>analytical, insightful, aware...</p>
            <p>honestly raw.</p>
            <span><?php get_template_part('OWLSAsylumSignature','whiteknight'); ?></span>
            <p>...Welcome To My House...</p>
        </article>
    </section>
    <div class="clear"></div>
</div><!--close container-->
