<style>


    h1.entry-title > a, h1.entry-title > a:hover {
        text-decoration: none;
        color: #333333;
        text-align: center;
        width: 600px;
        display: block;
        margin:0 auto;
        background-color: inherit;
    }

@media screen and (max-width: 800px){
    h1.entry-title > a, h1.entry-title > a:hover {
        width: 75% !important;
    }
}

    span#subtitlesingle {
        font-family: 'Archer Italic';
        font-size: 24px;
        text-align: center;
        width: 300px;
        display: block;
        margin:0 auto;
    }

    article.post {
        margin-bottom: 30px;
        padding-bottom: 30px;
        border-bottom: 3px solid #333;
    }

    article.post > header {
        border-bottom: solid #333 3px;
        margin-bottom: 24px;
    }

    article.post > header > span.entry-date {
        position: relative;
        display: block;
        width: 150px;
        margin: 0 auto;
        margin-bottom: 6px;
    }
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>

<?php
$subtitle = get_post_meta($post->ID, 'subtitle', $single = true);
if($subtitle !== '') echo '<span id="subtitlesingle">:: ' . $subtitle . ' ::</span>';
?>
    <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
</header>
<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
</article>