<?php get_header();?>

<?php
if ( have_posts() ):
    while ( have_posts() ):
        the_post();
        echo the_content();
    endwhile;
endif;
?>

<?php get_footer()?>