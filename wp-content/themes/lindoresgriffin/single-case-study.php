<?php get_header(); ?>
	<?php while ( have_posts() ) {
		the_post(); ?>
<div class="wrapper">
    <div class="case-study">
        <div class="case-study__page-banner" style='background-image: url("<?php echo get_the_post_thumbnail_url() ?>");'></div>
        <div class="case-study__inner">
            <div class="case-study__container">
                <h2 class="case-study--excerpt"><?php the_excerpt() ?></h2>
                <div class="case-study__content">
                    <p><?php the_content() ?></p>
                </div>
            </div>
        </div>
        <div class="case-study__grid">
            <?php
                //Get the images ids from the post_metadata
                $images = acf_photo_gallery('gallery', $post->ID);
                //Check if return array has anything in it
                if( count($images) ):
                    //Cool, we got some data so now let's loop over it
                    foreach($images as $image):
                        $id = $image['id']; // The attachment id of the media
                        $title = $image['title']; //The title
                        $caption= $image['caption']; //The caption
                        $full_image_url= $image['full_image_url']; //Full size image url
                        $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                        $url= $image['url']; //Goto any link when clicked
                        $target= $image['target']; //Open normal or new tab
                        $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                        $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
            ?>
                <div class="case-study__grid--item" style="background-image: url('<?php echo $full_image_url; ?>');"></div>
            <?php endforeach; endif; ?>
        </div>
        <section class="case-study__lower">
            <div class="generic-box-wrapper case-study__social">
                <p>Visit <?php the_title() ?> Online</p>
                <div class="social-icons">
                    <a target="_blank" class="social-link" href="https://www.facebook.com/lindoresgriffindigital"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480847/Lindores%20and%20Griffin/fb-compressor.png" alt="facebook icon"></a>
                    <a target="_blank" class="social-link" href="https://www.linkedin.com/company/lindores-griffin"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480858/Lindores%20and%20Griffin/li-compressor.png" alt="linkedin icon"></a>
                    <a target="_blank" class="social-link" href="https://www.instagram.com/lindoresgriffin"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480874/Lindores%20and%20Griffin/ig-compressor.png" alt="instagram icon"></a>
                    <a target="_blank" class="social-link" href="https://www.twitter.com/lindoresgriffin"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480886/Lindores%20and%20Griffin/tw-compressor.png" alt="twitter icon"></a>
                </div>
            </div>

            <div class="generic-box-wrapper">
               
            </div>
        </section>
    </div>
</div>
<?php } get_footer(); ?>