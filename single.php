<?php get_template_part( 'head'); ?>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<?php get_header(); ?>
<?php get_template_part('container','single'); ?>
<?php get_footer(); ?>
</div><!--close wrapper-->
<?php wp_footer(); ?>
</body>
</html>
    