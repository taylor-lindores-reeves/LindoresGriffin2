
<?php /* Template Name: Services */ ?>
<?php get_header(); ?>
<div class="wrapper">
    <div class="inner-page-banner">
        <img src="https://res.cloudinary.com/campusxchange/image/upload/v1547481208/Lindores%20and%20Griffin/Screenshot-2018-11-06-at-11.31.55-compressor.png" alt="about us page banner">
    </div>
    <div class="content">
        <div class="content__inner">
            <div class="service">
		        <?php while ( have_posts() ) {
			        the_post(); ?>
                    <div class="service__wrapper">
                        <div class="service__header">
                            <div class="service__img <?php echo get_the_excerpt() ?>"></div>
                            <h1 class="service--title"><?php the_title() ?></h1>
                        </div>
                        <div class="service__info">                        
                            <div class="service__column">
                                <?php the_content() ?>
                            </div>
                            <?php if( get_field('image-right') ): ?>
                                <div class="service__column">
                                    <img class="service--image-right" src="<?php the_field('image-right'); ?>" alt="">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
		        <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>