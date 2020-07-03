<?php get_header(); ?>

<div class="wrapper">
	<?php while ( have_posts() ) {
		the_post(); ?>
    <div class="single">
        <div class="single__page-banner">
            <?php the_post_thumbnail() ?>
        </div>
        <div class="single__inner">
            <div class="single__container">
                <h1 class="single--title"><?php the_title() ?></h1>
                <div class="single__content">
                    <p><?php the_content() ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } get_footer(); ?>