<?php get_header(); ?>

<div class="front-page">
  <div class="grid-wrapper">
    <div class="grid-item grid-item--top-left">
      <div class="grid-item__info grid-item__info--red-bg">
        <h1 class="grid-item__info--heading">Automotive</h1>
        <h2 class="grid-item__info--headline">Digital Marketing</h3>
        <ul class="grid-item__list">
            <h3 class="grid-item__info--sub-heading">We are an industry leading digital marketing agency paving the way for the new generation of automotive marketers.</h3>
        </ul>
<!--        <a href="#" class="btn btn--main-cta" style="color: black;">LEARN MORE</a>-->
      </div>
    </div>
<!--      <div class="grid-item grid-item--top-middle">-->
<!--          <div class="grid-item__info grid-item__info--red-bg">-->
<!--              <ul class="grid-item__list">-->
<!--                  <ul>-->
<!--                      <li>✔️ Get More Leads</li>-->
<!--                      <li>✔️ Drive Traffic to Your Website</li>-->
<!--                      <li>✔️ Gain Valuable Audience Insights</li>-->
<!--                      <li>✔️ Improve Digital Credibility</li>-->
<!--                      <li>✔️ Increase Your Sales</li>-->
<!--                  </ul>-->
<!--              </ul>-->
<!--          </div>-->
<!--      </div>-->

    <div class="grid-item grid-item--top-right">
<!--      <div class="drawer">-->
<!--        <div class="client">-->
<!--          <h1 class="title">Contact</h1>-->
<!--            <div id="feedback"></div>-->
<!--          <form class="secondary-form row form-horizontal" id="frontPageSendMail" action="#" method="post">-->
<!--            <div class="form-group form-field col x-100">-->
<!--                <input id="name" name="name" class="form-control input-text js-input" type="text" placeholder="Name" required>-->
<!--            </div>-->
<!--            <div class="form-group form-field col x-100">-->
<!--                <input id="company" name="company" class="form-control input-text js-input" type="text" placeholder="Company" required>-->
<!--            </div>-->
<!--            <div class="form-group form-field col x-100">-->
<!--                <input id="email" name="email" class="form-control input-text js-input" type="email" placeholder="Email" required>-->
<!--            </div>-->
<!--            <div class="form-group form-field col x-100">-->
<!--                <input id="telephone" name="telephone" class="form-control input-text js-input" type="text" placeholder="Telephone" required>-->
<!--            </div>-->
<!--            <div class="form-group form-field col x-100 align-center">-->
<!--                <button class="btn" style="text-transform: uppercase;" name="submit" type="submit">Submit</button>-->
<!--            </div>-->
<!--            <input type="hidden" name="action" value="yourwebsite_contactform"/>-->
<!--          </form>-->
<!--            <div class="social-icons">-->
<!--            <a target="_blank" class="social-link" href="https://www.facebook.com/lindoresgriffindigital"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480847/Lindores%20and%20Griffin/fb-compressor.png" alt="facebook icon"></a>-->
<!--            <a target="_blank" class="social-link" href="https://www.linkedin.com/company/lindores-griffin"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480858/Lindores%20and%20Griffin/li-compressor.png" alt="linkedin icon"></a>-->
<!--            <a target="_blank" class="social-link" href="https://www.instagram.com/lindoresgriffin"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480874/Lindores%20and%20Griffin/ig-compressor.png" alt="instagram icon"></a>-->
<!--            <a target="_blank" class="social-link" href="https://www.twitter.com/lindoresgriffin"><img class="social-icon" src="https://res.cloudinary.com/campusxchange/image/upload/v1547480886/Lindores%20and%20Griffin/tw-compressor.png" alt="twitter icon"></a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
        <div class="grid-item__info grid-item__info--transition">
<!--          <h3 class="grid-item__info--heading">Insights</h3>-->
        </div>
    </div>

    <div class="grid-item grid-item--middle-left">
        <div class="grid-item__info grid-item__info--transition">
<!--          <h3 class="grid-item__info--heading">Advertising & Marketing</h3>-->
        </div>
    </div>

    <div class="grid-item grid-item--middle-right">
        <div class="grid-item__info grid-item__info--transition">
<!--          <h3 class="grid-item__info--heading">Photography & Videography</h3>-->
        </div>
    </div>

    <div class="grid-item grid-item--bottom-left">
        <div class="grid-item__info grid-item__info--transition">
<!--          <h3 class="grid-item__info--heading">Case Studies</h3>-->
        </div>
    </div>

    <div class="grid-item grid-item--bottom-right">
        <div class="grid-item__info grid-item__info--transition">
<!--          <h3 class="grid-item__info--heading">Become Our Client</h3>-->
        </div>
    </div>
  </div>
<!--  <section class="clients">-->
<!--    <div class="generic-box-wrapper generic-box-wrapper--clients">-->
<!--        <div class="clients__header">-->
<!--            <h3>Our Clients</h3>-->
<!--        </div>-->
<!--        <ul class="clients__list">-->
<!--          <li class="clients__list--item clients__list--item-1"></li>-->
<!--          <li class="clients__list--item clients__list--item-2"></li>-->
<!--          <li class="clients__list--item clients__list--item-3"></li>-->
<!--          <li class="clients__list--item clients__list--item-4"></li>-->
<!--          <li class="clients__list--item clients__list--item-5"></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--  </section>-->

  <section class="trust-pilot">
    <div class="generic-box-wrapper generic-box-wrapper--trust-pilot trust-pilot__wrapper">
      <div class="trust-pilot__logo">
        <a target="_blank" href="https://uk.trustpilot.com/review/lindoresgriffin.co.uk"><img src="https://res.cloudinary.com/campusxchange/image/upload/v1552489749/Lindores%20and%20Griffin/trustpilot.png" alt=""></a>
      </div>
      <div class="carousel-two trust-pilot__testimonials">
        <?php $loop = new WP_Query( array( 'post_type' => 'testimonial' ) );
          if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="trust-pilot__testimonial">
              <?php the_content() ?>
              <p><?php the_excerpt() ?></p>
            </div>
          <?php endwhile; $loop->reset_postdata(); endif; ?>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>