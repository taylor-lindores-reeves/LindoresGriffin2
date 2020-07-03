
<?php /* Template Name: Sitemap */ ?>
<?php get_header(); ?>
<div class="wrapper">
    <div class="sitemap">
        <?php while ( have_posts() ) {
            the_post(); ?>
            <?php the_content() ?>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>