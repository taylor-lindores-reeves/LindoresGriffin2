
<?php /* Template Name: Digital Marketing */ ?>
<?php get_header();

	while ( have_posts() ) {
		the_post(); ?>
<div class="wrapper">
    <div class="inner-page-banner">
        <img src="https://res.cloudinary.com/campusxchange/image/upload/v1547481208/Lindores%20and%20Griffin/Screenshot-2018-11-06-at-11.31.55-compressor.png" alt="digital marketing page banner">
    </div>
    <div class="content">
        <div class="content__inner">
        <div class="toolbox">
                    <ul class="toolbox__list">
                        <li class="toolbox__list-item toolbox__list--google"></li>
                        <li class="toolbox__list-item toolbox__list--spyfu"></li>
                        <li class="toolbox__list-item toolbox__list--adbeat"></li>
                        <li class="toolbox__list-item toolbox__list--basecamp"></li>
                        <li class="toolbox__list-item toolbox__list--fbpixel"></li>
                        <li class="toolbox__list-item toolbox__list--semrush"></li>
                        <li class="toolbox__list-item toolbox__list--similarweb"></li>
                        <li class="toolbox__list-item toolbox__list--hotjar"></li>
                    </ul>
                </div>
            <h1 class="content--title">Digital Marketing</h1>
            <div class="content__container">
                <p>Whether you're starting from scratch or you're looking to expand your business, it's essential you have a strategic digital marketing plan to help you achieve your business goals. We create a digital strategy for your business to increase brand awareness, generate online or in-store sales or to manage communities or stakeholders.</p>
                <p>We establish the way forward for your brand, identifying and reviewing the platforms necessary for marketing and acquiring new clients to accelerate the growth of your business.</p>
                <p>We create digital campaigns that will get you results and we're transparent with the information we use to that enables us to measure our performance and your return on investment. Reflection is a key part of moving forward. In the digital age, there is a world of data available. But what do these analytics mean? We provide a clear, simple breakdown each month and review your businesses digital performance.</p>
                <div class="services-grid" id="basic-waypoint-one">
                <?php $loop = new WP_Query( array( 'post_type' => 'service' ) );
                if ( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="services-grid__item services-grid__item-row-one">
                            <a href="#"><div class="services-grid--img <?php echo get_the_excerpt() ?>"></div></a>
                            <h3><a href="#"><?php the_title()?></a></h3>
                            <p><?php the_field('main-content'); ?></p>
                        </div>
                    <?php endwhile; $loop->reset_postdata(); endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } get_footer(); ?>