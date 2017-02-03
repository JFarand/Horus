<style>
    section.entry-content p {
        line-height: 1.5;
    }

    .post_Image--full {
        position: relative;
        display: block;
        width: 100%;

    }

    .post_Image--full img {
        width: 100%;
        height: 100%;
    }

</style>



<section class="entry-content">

<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
