<?php

/*
Template Name: HomePage
*/


get_header(); ?>

<div class="hero">
    <img id="hero-img" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
    <a href="#" class="btn-primary">latest library</a>

</div>
<div class="latest">
    <?php
    echo do_shortcode('[products limit="8" orderby="date" order="DESC"]');
    ?>
</div>

<?php get_footer();
