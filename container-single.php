<style>
    div.containersingle {
        display: block;
        position: relative;
        width: 800px;
        margin: 0 auto;
    }

@media screen and (max-width: 800px){
    div.containersingle {
        width: 100%;
    }


    article blockquote {

        width: 120% !important;
        left: -30px;


    }

    article blockquote p {

        width: 75% !important;

    }


}

    section#content {
        background-color: #ffffff;
        padding: 30px;
        margin-top: 24px;
        margin-bottom: 24px;
        border-top: #333 solid 3px;
        border-bottom: #333 solid 3px;
    }


    article blockquote {
        position: relative;
        display: block;
        width: 800px;
        left: -30px;
        background-color: #333333;
        padding-top: 12px;
        padding-bottom: 12px;

    }

    article blockquote p {
        display: block;
        width: 399px;
        margin: 0 auto;
        color: #f2f2f2;
        font-family:'Archer Italic';
        font-size: 24px;
        line-height: 1.5;
    }

    article blockquote cite {
        color: white;
        font-family:'EurostileLTPro-BoldCn';
        font-size: 18px;
        line-height: 1.5;
        font-style: normal;
    }

    div#signature {
        display: block;
        position: relative;
        width: 99px;
        margin: 0 auto;
    }

    div#support {
        display: block;
        position: relative;
        background-color: yellow;
        color: #bb001a;
        text-align: center;
        padding: 15px;
    }
</style>

<div id="container" class="containersingle">
    <section id="content" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'entry' ); ?>
            
        <?php endwhile; endif; ?>
        <footer class="footer">
            <div id="support"><?php get_template_part('support'); ?></div>
            <div id="signature"><?php get_template_part('OWLSAsylumSignature'); ?></div>
        </footer>
    </section>
    <div class="clear"></div>
</div><!--close container-->