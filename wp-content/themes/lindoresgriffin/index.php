<?php 
get_header()
?>
    <div class="insights content">

        <div class="insights__inner">
            
            <div class="squeaker" id="insight-column">
                <div class="squeaker__inner">
                    <h3>Insights</h3>
                    <p>Digital Speed is proud to be at the forefront of digital marketing, offering the latest, most relevant and cost effective service. We have marketed products from Rolls Royce Phantom’s to 5 Birth Motorhomes and this has taught us the importance of marketing to the highest standard, getting a crucial message across in the best form possible. We pride ourselves on our specialist knowledge of digital marketing and your luxury markets audience- their precise demographic and engagement with our marketing.</p>
                </div>
            </div>

            <div class="all-insights">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
                        <div class="featured-post__container">
                            <div class="featured-post" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
                                <div class="featured-post__content">
                                    <div class="featured-post__upper">
                                        <h2 class="featured-post__upper--title"><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></h2>
                                        <span class="featured-post__upper--length"><p class="featured-post__meta"><?php the_time('j F Y'); ?><br><?php the_category( ', ' ); ?></p></span>
                                    </div>
                                    <div class="featured-post__lower">
                                        <p class="featured-post--content"><?php echo wp_trim_words( get_the_content(), 15, '...' );?></p>
                                        <a class="featured-post--link" href="<?php the_permalink(); ?>" rel="canonical" title="Permanent Link to <?php the_title_attribute(); ?>">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <?php else : ?>
                        <?php if($wp_query->current_post <= 1){ ?>
                            <div class="all-insights__grid" style="margin:0">
                        <?php } ?>
                                <div class="post" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
                                    <div class="post__content">
                                        <div class="post__upper">
                                            <h2 class="post__upper--title"><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></h2>
                                            <span class="post__upper--length"><p class="post__meta"><?php the_time('j F Y'); ?><br><?php the_category( ', ' ); ?></p></span>
                                        </div>
                                        <div class="post__lower">
                                            <p class="post--content"><?php echo wp_trim_words( get_the_content(), 15, '...' );?></p>
                                            <a class="post--link" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Continue Reading</a>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>
                        <?php endwhile; else : ?>
                                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer()
?>