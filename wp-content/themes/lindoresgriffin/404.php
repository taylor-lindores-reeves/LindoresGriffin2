<?php 
get_header()
?>
<div class="error wrapper">
    <div class="error__inner">
        <div class="error-container">
            <div class="error-container__content">
            <h1 class="error-container--error">
                404! We couldn't find the page!
            </h1>
            <h3 class="error-container--subtitle">
                Oops... That was a bad breakdown. <a href="tel:07947790914" style="text-decoration: none; color: grey;">Contact us</a> so we can help!
            </h3>
            <h3 class="error-container--subtitle">
                You can also  <a href="<?php echo site_url() ?>" style="text-decoration: none; color: grey;">return home</a> if you're feeling lost.
            </h3>
            
            </div>
        </div>
    </div>
</div>
<?php
get_footer()
?>