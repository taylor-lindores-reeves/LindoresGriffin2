<?php get_header(); ?>
<div class="wrapper">
	<?php while ( have_posts() ) {
		the_post(); ?>

    <div class="inner-page-banner">
        <?php the_post_thumbnail() ?>
    </div>
    <div class="content">
        <div class="content__inner">
            <h1 class="content--title"><?php the_title() ?></h1>
            <div class="content__container">
                <p><?php the_content() ?></p>
            </div>
        </div>
    </div>
</div>
<?php } get_footer(); ?>