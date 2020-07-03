</div>
</div>
<footer class="site-footer" style="<?php if (!is_front_page()) { ?>width: 100vw;<?php } ?>">
  <nav class="footer-nav-list">
    <ul>      
      <li><a class="site-footer--text">© Created by Lindores & Griffin Ltd <?php echo date("Y"); ?></a></li>
      <li><a class="site-footer--text">Company No: 10988004</a></li>
      <li><a class="site-footer--text" href="<?php echo site_url('/sitemap') ?>">Sitemap</a></li>
      <li><a class="site-footer--text" href="<?php echo site_url('/privacy-policy') ?>">Privacy Policy</a></li>
    </ul>
  </nav>
</footer>

<div class="modal">
  <div class="modal__inner">
        <div class="contact">
            <h1 id="contact-us-title">Contact us</h1>
          <form class="contact-form form-horizontal" id="contactPageSendMail" action="#" method="post">
              <div class="form-group form-field col x-100">
                <input id="name" name="name" class="form-control input-text js-input" type="text" placeholder="Name" required />
              </div>
              <div class="form-group form-field col x-100">
                <input id="company" name="company" class="form-control input-text js-input" type="text" placeholder="Company" required />
              </div>
              <div class="form-group form-field col x-100">
                <input id="email" name="email" class="form-control input-text js-input" type="email" placeholder="Email" required />
              </div>
              <div class="form-group form-field col x-100">
                <input id="telephone" name="telephone" class="form-control input-text js-input" type="text" placeholder="Telephone" required />
              </div>
              <div class="form-group form-field col x-100">
                <input id="message" name="message" class="form-control input-text js-input" type="text" placeholder="Message" required />
              </div>
              <div class="form-group form-field col x-100 align-center">
                  <button class="btn" style="text-transform: uppercase;" type="submit">Submit</button>
              </div>
              <input type="hidden" name="action" value="yourwebsite_contactform"/>
          </form>
            <div id="feedback"></div>
            <br>
            <a class="contact--tel" href="tel:07947790914"><p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;07947 790 914</p></a>
            <br>
            <div class="social-icons">
              <a target="_blank" class="social-link" href="https://www.facebook.com/lindoresgriffindigital"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480847/Lindores%20and%20Griffin/fb-compressor.png" alt="facebook icon"></a>
              <a target="_blank" class="social-link" href="https://www.linkedin.com/company/lindores-griffin"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480858/Lindores%20and%20Griffin/li-compressor.png" alt="linkedin icon"></a>
              <a target="_blank" class="social-link" href="https://www.instagram.com/lindoresgriffin"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480874/Lindores%20and%20Griffin/ig-compressor.png" alt="instagram icon"></a>
              <a target="_blank" class="social-link" href="https://www.twitter.com/lindoresgriffin"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480886/Lindores%20and%20Griffin/tw-compressor.png" alt="twitter icon"></a>
            </div>
        </div>
  </div>

  <div class="modal__close">
    X
  </div>
</div>

<script type="text/javascript">
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>
<?php wp_footer(); ?>
</body>
</html>
