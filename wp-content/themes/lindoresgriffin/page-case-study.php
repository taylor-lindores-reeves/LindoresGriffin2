<?php /* Template Name: Case Studies */ ?>

<?php
get_header()
?>
<div class="wrapper" style="padding-bottom: 100px; background: #121212;">
	<?php $loop = new WP_Query( array( 'post_type' => 'case-study' ) );
	if ( $loop->have_posts() ) :
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="lskew container-fluid clearfix study" id="basic-waypoint-three">
                    <div class="skew-image" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);"></div>
                    <div class="row">
                        <div class="skew-wrapper col-lg-6 col-md-8 col-sm-10 col-xs-12">
                            <div class="skew-content-bg"></div>
                            <div class="skew-content">
                                <h1 class="skew-content--title"><?php the_title() ?></h1>
                                <p class="skew-content--desc"><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                                <div style="text-align: center">
                                    <a href="<?php the_permalink() ?>" class="btn btn--red">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		<?php endwhile; $loop->reset_postdata(); endif; ?>
</div>
    <?php
    get_footer()
    ?>







